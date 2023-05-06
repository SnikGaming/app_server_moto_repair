<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->per_page ?? 10;

        if ($request->has('booking_date')) {
            $bookingDate = Carbon::parse($request->booking_date)->format('Y-m-d');
            $userBookings = Booking::where('customer_id', auth()->user()->id)
                ->whereDate('booking_time', $bookingDate)
                ->where('status', true) // Thêm điều kiện trạng thái
                ->orderBy('booking_time', 'desc')
                ->paginate($perPage);
        } else {
            $userBookings = Booking::where('customer_id', auth()->user()->id)
                ->where('status', true) // Thêm điều kiện trạng thái
                ->orderBy('booking_time', 'desc')
                ->paginate($perPage);
        }

        $currentPageItemCount = count($userBookings->items());
        $totalItemCount = $userBookings->total();

        $data = [
            'status' => 200,
            'data' => $userBookings->items(),
            'current_page' => $userBookings->currentPage(),
            'last_page' => $userBookings->lastPage(),
            'per_page' => $perPage,
            'total_items' => $totalItemCount,
        ];

        if ($currentPageItemCount >= $totalItemCount) {
            $data['next_page_url'] = null;
        }

        return response()->json($data, 200);
    }

    public function updateBookingStatus($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json(['status' => 404, 'message' => 'Booking not found.'], 404);
        }

        $booking->status = false;
        $booking->save();

        return response()->json(['status' => 200, 'message' => 'Booking status updated successfully.'], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreBookingRequest $request)
    // {
    //     //

    // }






    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'booking_time' => 'required|date',
            'note' => 'nullable|string'

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
            $booking = new Booking();
            $booking->customer_id = auth()->user()->id;
            $booking->mechanic_id = 0;
            $booking->booking_time = $request->input('booking_time');
            $booking->note = $request->input('note');
            $booking->address = $request->input('address');
            $booking->service = $request->input('service');
            // $booking->service = $request->input('service');

            $booking->save();

            return response()->json(['message' => 'create successful'], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went really wrong!"
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        // Kiểm tra xem user có quyền sửa booking này hay không
        if ($booking->customer_id !== auth()->user()->id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $booking->fill($request->all());
        $booking->save();

        return response()->json(['message' => 'Booking updated successfully'], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
