<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Category::where('name', 'vỏ xe')->first()->products()->createMany([]);
        Category::where('name', 'đồ chơi')->first()->products()->createMany([
            ["name" => "Gù cao Inox Salaya", "number" => 306, "price" => 150000, "like" => 8128, "image" => "dochoi/1.jpg", "description" => "Gù cao inox Salaya sáng đẹp, không bị phai màu theo thời gian như nhôm, titan.   Thiết kế thẩm mỹ, gắn gọn gàng vào bao tay xe.   Gù cao Salaya inox có thể gắn tất cả loại xe máy (trừ AB160, Vario 160)."],
            ["name" => "Bao tay Ariete (chính hãng) 25/SSF", "number" => 699, "price" => 450000, "like" => 7139, "image" => "dochoi/2.jpg", "description" => "Bao tay Ariete 25/SSF hàng chính hãng, thiết kế của Ariete đậm chất zin, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Ariete 25/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng.  Bao tay Ariete 25/SSF gắn được tất cả các loại xe."],
            ["name" => "Bao tay Ariete (chính hãng) 23/SSF", "number" => 863, "price" => 450000, "like" => 9094, "image" => "dochoi/3.png", "description" => "Bao tay Ariete 23/SSF hàng chính hãng, thiết kế của Ariete đậm chất zin, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Ariete 23/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng.  Bao tay Ariete 23/SSF gắn được tất cả các loại xe."],
            ["name" => "Bao tay Daytona Line (chính hãng)", "number" => 685, "price" => 400000, "like" => 8048, "image" => "dochoi/4.jpg", "description" => "Bao tay Daytona Line hàng chính hãng, thiết kế đơn giản có logo Daytona cùng các dòng kẻ ngang nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt, nhất là cho các bạn có mồ hôi tay nhiều.  Bao tay Daytona Line có 2 màu: đỏ, xám gắn được tất cả các loại xe, được sản xuất tại Nhật, thương hiệu Daytona rất nổi tiếng trong việc sản xuất phụ tùng xe máy."],
            ["name" => "Bộ công tắc đèn Sunfa cho AirBlade 160 2022 - 2023", "number" => 537, "price" => 250000, "like" => 6371, "image" => "dochoi/5.jpg", "description" => "Bộ công tắc đèn Sunfa cho Honda AirBlade 160 2022 - 2023, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo.  Bộ công tắc đèn Sunfa cho AB 160 phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.  Bảo hành 12 tháng 1 đổi 1.  Sản phẩm chưa bao gồm công lắp đặt."],
            ["name" => "Bộ công tắc đèn Sunfa cho Vario 2018 - 2022", "number" => 605, "price" => 250000, "like" => 3662, "image" => "dochoi/6.png", "description" => "Bộ công tắc đèn Sunfa cho Honda Vario 2018 - 2022, gắn trực tiếp và nút pha cos pha rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo.  Bộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.  Bảo hành 12 tháng 1 đổi 1."],
            ["name" => "Bộ công tắc đèn Sunfa cho SHVN 2020", "number" => 863, "price" => 250000, "like" => 3624, "image" => "dochoi/7.jpg", "description" => "Bộ công tắc đèn Sunfa cho Honda SHVN 2020, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo.  Bộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.  Bảo hành 12 tháng 1 đổi 1.  Sản phẩm chưa bao gồm công lắp đặt."],
            ["name" => "Bộ công tắc đèn Sunfa cho Air Blade 2020", "number" => 252, "price" => 250000, "like" => 2238, "image" => "dochoi/8.jpg", "description" => "Bộ công tắc đèn Sunfa cho Honda Air Blade 2020, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo.  Bộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.  Bảo hành 12 tháng 1 đổi 1.  Sản phẩm chưa bao gồm công lắp đặt."],
            ["name" => "Bộ công tắc đèn Sunfa cho Honda Wave A, Blade", "number" => 657, "price" => 220000, "like" => 2741, "image" => "dochoi/9.jpg", "description" => "Bộ công tắc đèn Sunfa cho Honda Wave A, Blade, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo.  Bộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.   Bảo hành 12 tháng 1 đổi 1.  Giá sản phẩm chưa bao gồm công lắp đặt."],
            ["name" => "Bộ công tắc đèn Sunfa cho Vision 2020 - 2023, Lead 2019 trở về trước (halogen)", "number" => 422, "price" => 220000, "like" => 943, "image" => "dochoi/10.jpg", "description" => "Bộ công tắc đèn Sunfa cho Honda Vision 2020 - 2023 và ead 2019 trở về trước (halogen), gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo.  Bộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.   Bảo hành 12 tháng 1 đổi 1.  Giá sản phẩm chưa bao gồm công lắp đặt."],
            ["name" => "Bộ công tắc đèn Sunfa cho Lead 2020", "number" => 460, "price" => 250000, "like" => 769, "image" => "dochoi/11.jpg", "description" => "Bộ công tắc đèn Sunfa cho Honda Lead từ 2020 trở về sau (mẫu Lead đèn Led mới), gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo.  Bộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.  Bảo hành 12 tháng 1 đổi 1.   Sản phẩm chưa bao gồm công lắp đặt."],
            ["name" => "Bộ ốc đĩa Salaya inox 8ly cho Exciter 150 (5con)", "number" => 517, "price" => 90000, "like" => 3831, "image" => "dochoi/12.jpg", "description" => "Bộ ốc đĩa Salaya inox gồm 5 con 8ly gắn cho Exciter 150, Exciter 155  hoặc các loại xe đĩa 5 lỗ...  Ốc inox Salaya cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."],
            ["name" => "Gù Carbon fiber chống rung, đầm tay lái cho AB 160, Vario 160", "number" => 814, "price" => 350000, "like" => 5586, "image" => "dochoi/13.jpg", "description" => "Gù Carbon fiber xịn cực chất, chống rung, đầm tay lái cho AB 160, Vario 160. Thiết kế chắc chắn, nặng hơn nhiều so với gù zin, chất liệu carbon chống trầy, chống ngã khá tốt. Gù Carbon fiber gắn cho AB 160, Vario 160."],
            ["name" => "Đèn Led 2 tầng Zhi.Pat cho Yamaha Y125ZR - Yaz", "number" => 755, "price" => 1350000, "like" => 7181, "image" => "dochoi/14.jpg", "description" => "Đèn Led 2 tầng Zhi.Pat cho Yamaha Y125ZR - Yaz.   ZHI.PAT Y125ZR sở hữu thiết kế vượt trội nổi bật với vẻ đẹp cuốn hút riêng biệt. Thiết kế đèn định vị đầy phong cách cùng sắc cam nổi bật, mang đến nét nhìn hiện đại, trẻ trung và thể thao cho chiếc xe của bạn.  Với 2 màu: Khói - định vị cam hoặc Si bạc - định vị cam.  Chính hãng Zhi.Pat Bảo hành 12 tháng."],
            ["name" => "Đèn Led 2 tầng Zhi.Pat cho Dream II (Dream Thái), Super Dream", "number" => 748, "price" => 1180000, "like" => 7505, "image" => "dochoi/15.jpg", "description" => "Đèn Led 2 tầng Zhi.Pat Dream-II-THA cho Dream II (Dream Thái), Super Dream.  ZHI.PAT DREAM sở hữu thiết kế vượt trội nổi bật với vẻ đẹp cuốn hút riêng biệt. Thiết kế đèn định vị đầy phong cách cùng sắc cam nổi bật, mang đến nét nhìn hiện đại, trẻ trung và thể thao cho chiếc xe của bạn.  Với 2 màu: Khói - định vị cam hoặc Si bạc - định vị cam.   Chính hãng Zhi.Pat Bảo hành 12 tháng."],
            ["name" => "Kính Rizoma vuông mode chân kính mẫu mới", "number" => 429, "price" => 490000, "like" => 725, "image" => "dochoi/16.jpg", "description" => "Kính Rizoma vuông mode chân kính mẫu mới làm bằng nhôm sắc nét, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau, đảm bảo an toàn, rất thẩm mỹ.  Kính Rizoma vuông mode chân kính mẫu mới có thể gắn đước tất cả các loại xe 2 bánh. Với 2 màu: Bạc, đen."],
            ["name" => "Gù nặng inox chống rung, đầm tay lái cho các dòng xe", "number" => 869, "price" => 150000, "like" => 5569, "image" => "dochoi/17.jpg", "description" => "Gù dài inox nặng cực chất, chống rung, đầm tay lái. Thiết kế chắc chắn, nặng hơn nhiều so với gù zin, chất liệu inox chống trầy, sáng bóng theo thời gian.  Gù dài inox có thể gắn vừa tất cả các loại xe."],
            ["name" => "Gù dài inox cho AB 2020, Vario 160", "number" => 510, "price" => 150000, "like" => 6084, "image" => "dochoi/18.jpg", "description" => "Gù dài inox mới dành riêng cho AB 2020 trở lên và Vario 160 mới mà không cần phải cắt, mài ghi đông và có thể gắn được tất cả loại xe khác một cách nhanh gọn.  Gù dài inox được làm nặng, giúp tay lái đầm chắc hơn khi vận hành."],
            ["name" => "Nắp nhớt inox Salaya cho các dòng xe Honda, Yamaha", "number" => 429, "price" => 75000, "like" => 8884, "image" => "dochoi/19.jpg", "description" => "Nắp nhớt inox Salaya cho Honda, Yamaha, thiết kế inox rất chắc chắn, sáng bóng theo thời gian, giá thành hợp lí, dùng để thay thế nắp nhớt zin cũ kỹ hoặc làm món phụ tùng trang trì cực chất.  Nắp nhớt inox Salaya cho có thể gắn vừa các dòng xe Honda, Yamaha."],
            ["name" => "Đèn phản quang Zhi.Pat SH350i (mắt mèo vuông) cho các dòng xe", "number" => 537, "price" => 250000, "like" => 6885, "image" => "dochoi/20.jpg", "description" => "Đèn phản quang Zhi.Pat SH350i (mắt mèo vuông). Sử dụng cho tất cả các dòng xe: Honda - Yamaha.   - Bộ sản phẩm có 03 màu: Đỏ, Cam, Trắng.  - Sản phẩm gắn như zin. Chính hãng Zhi.Pat."],
            ["name" => "Dè trước Zhi.Pat SH350i cho SHVN 125i-150i-160i 2020 - 2023", "number" => 168, "price" => 650000, "like" => 3127, "image" => "dochoi/21.jpg", "description" => "Bộ sản phẩm Dè trước Zhi.Pat SH350i sử dụng cho các dòng xe: Honda SHVN 125i-150i-160i 2020 - 2023  - Bộ sản phẩm có 04 màu: Đen bóng, đỏ, trắng, xám.  - Hai bên hông dè được phối mắt mèo chữ nhật nổi bật.  - Sản phẩm gắn như zin. Chính hãng Zhi.Pat."],
            ["name" => "Đèn pha Led 2 tầng Zhi.Pat W110 THA cho Wave 100/110/110S đời 1997 - 2004", "number" => 834, "price" => 1180000, "like" => 1212, "image" => "dochoi/22.jpg", "description" => "Bộ sản phẩm đèn pha Led 2 tầng Zhi.Pat W110 THA  
 + Sử dụng cho các dòng xe : Xe Wave 100/110/110S đời 1997-2004 
 + Bộ sản phẩm bao gồm : 
     - 01 bộ Đèn Led  02 tầng 
     - 01 cáp nguồn (đính kèm chóa đèn) 
     - 01 Móc khóa Zhi.Pat 
     - 01 Thẻ Bảo hành chính hãng 
     - 01 Bộ hướng dẫn sử dụng 
+ Sản phẩm có 03 mẫu: 
     - Chóa đèn màu khói - định vị tím 
     - Chóa đèn màu khói - định vị xanh 
     - Chóa đèn màu khói - định vị đỏ 
+ Bảo hành chính hãng 12 tháng 1 đổi 1"],
            ["name" => "Bao tay CRG viền nhôm", "number" => 685, "price" => 220000, "like" => 8294, "image" => "dochoi/23.jpg", "description" => "Bao tay CRG viền nhôm mẫu mới, thiết kế đẹp mắt, cao su mềm chắc tạo cảm giác lái an toàn, 2 đầu có viền nhôm hạn chế trượt bao tay về lâu dài.  Bao tay CRG viền nhôm có nhiều màu cho khách lựa chọn và gắn được tất cả dòng xe máy."],
            ["name" => "Kính chiếu hậu Mview 009", "number" => 236, "price" => 300000, "like" => 4656, "image" => "dochoi/24.jpg", "description" => "- Kính chiếu hậu Mview 009 có góc quan sát rộng cho bạn tầm nhìn tốt, rõ ràng hoạt động phía sau  - Kính Mview 009 với chất liệu kim loại nhôm CNC cao cấp, bền đẹp, cao cấp hơn nhiều so với vật liệu nhựa bình thường  - Kính chiếu hậu Mview 009 gắn được cho tất cả các loại xe. Có 2 màu: Đen hoặc bạc."],
            ["name" => "Móc treo đồ CNC cho Honda SH, Lead,...", "number" => 339, "price" => 320000, "like" => 6006, "image" => "dochoi/25.jpg", "description" => "Móc treo đồ CNC cho Honda SH, Lead, Scoopy.... và nhiều loại xe khác, với thiết kế nhôm CNC cực đẹp, móc chắc chắn, treo đồ cực tốt.  
Móc treo đồ CNC có nhiều màu cho khách lựa chọn."],
            ["name" => "Tay thắng CNC cho Honda AB 160, PCX 160", "number" => 200, "price" => 1450000, "like" => 7947, "image" => "dochoi/26.jpg", "description" => "Tay thắng CNC mẫu mới nhất dành cho Honda AB 160, PCX 160... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.   Tay thắng CNC cho Honda AB 160, PCX 160 có 2 màu: Đen full và đen phối xám Titan."],
            ["name" => "Tay thắng CNC cho Yamaha Exciter", "number" => 266, "price" => 1450000, "like" => 6691, "image" => "dochoi/27.jpg", "description" => "Tay thắng CNC cẫu mới nhất dành cho Yamaha Exciter... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.   Tay thắng CNC cho Yamaha Exciter có 2 màu: Đen full và đen phối xám Titan."],
            ["name" => "Tay thắng CNC cho Honda Vario 160", "number" => 721, "price" => 1450000, "like" => 181, "image" => "dochoi/28.jpg", "description" => "Tay thắng CNC cẫu mới nhất dành cho Honda Vario 160... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.   Tay thắng CNC cho Honda Vario 160 có 2 màu: Đen full và đen phối xám Titan."],
            ["name" => "Chóa bạc Xinhan Zhi.Pat Crypton cho Exciter 135 (4 số)", "number" => 114, "price" => 480000, "like" => 7747, "image" => "dochoi/29.jpg", "description" => "Chóa đèn xinhan CRYPTON X135 cho Exciter 135 (2005 - 2010), Spark 135. Chính hãng Zhi.pat  Sở hữu được vẻ đẹp thể thao, mạnh mẽ đầy sự cuốn hút, giúp chiếc của bạn trở nên nổi trội hơn, khả năng thông báo tín hiệu lẫn định vị chiếc xe cũng được gia tăng đáng kể.  - Chóa TRẮNG BẠC phối màu: Cam/ Đỏ/ Xanh rêu/Xanh dương/Trắng.  Bảo hành 12 tháng 1 đổi 1.  Lưu ý: Dùng dây và bóng zin theo xe."],
            ["name" => "Tay thắng CNC cho Honda Vario 125, 150", "number" => 258, "price" => 1450000, "like" => 2079, "image" => "dochoi/30.jpg", "description" => "Tay thắng CNC cẫu mới nhất dành cho Honda Vario 125-150... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.  
Tay thắng CNC cho Honda Vario có 2 màu: Đen full và đen phối xám Titan."],
            ["name" => "Tay thắng CNC cho Honda SH", "number" => 167, "price" => 1450000, "like" => 5941, "image" => "dochoi/31.jpg", "description" => "Tay thắng CNC cẫu mới nhất dành cho Honda SH 2 thắng đĩa (SH 125/150i, SH300i, SH350i) các đời... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn.  Tay thắng có thể tăng chỉnh biên độ xa gần.  Tay thắng CNC cho Honda SH có 2 màu: Đen full và đen phối xám bạc."],
            ["name" => "Gù Carbon fiber chống rung, đầm tay lái cho các dòng xe", "number" => 446, "price" => 350000, "like" => 8400, "image" => "dochoi/32.jpg", "description" => "Gù Carbon fiber xịn cực chất, chống rung, đầm tay lái. Thiết kế chắc chắn, nặng hơn nhiều so với gù zin, chất liệu carbon chống trầy, chống ngã khá tốt.  Gù Carbon fiber có thể gắn vừa tất cả các loại xe."],
            ["name" => "Bộ đầu đèn Zhi.Pat VS110 2022 cho Vision 2014 - 2019", "number" => 179, "price" => 1480000, "like" => 2364, "image" => "dochoi/33.jpg", "description" => "Bộ đầu đèn Zhi.Pat VS110 2022 sử dụng để nâng cấp cho dòng xe Honda Vision 2014 - 2019 bao gồm:  
+ Đèn led 2 tầng ZHI.PAT 2021 - 2022 
+ Bợ Cổ có 2 màu: Đen nhám & Nâu  
+ Ốp đầu đèn: Trắng & Đỏ & Đen mờ  
Sản phẩm chính hãng Zhi.pat. Bảo hành 12 tháng."],
            ["name" => "Bao tay Ariete chính hãng 24/SSF", "number" => 630, "price" => 480000, "like" => 7704, "image" => "dochoi/34.jpg", "description" => "Bao tay Ariete 24/SSF hàng chính hãng, thiết kế đơn giản có ít rãnh gai tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Ariete 24/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng.  Bao tay Ariete 24/SSF gắn được tất cả các loại xe."],
            ["name" => "Chóa đen Xinhan Zhi.Pat Crypton cho Exciter 135 (4 số)", "number" => 643, "price" => 380000, "like" => 4233, "image" => "dochoi/35.jpg", "description" => "Chóa đèn xinhan CRYPTON X135 cho Exciter 135 (2005 - 2010), Spark 135. Chính hãng Zhi.pat  
Sở hữu được vẻ đẹp thể thao, mạnh mẽ đầy sự cuốn hút, giúp chiếc của bạn trở nên nổi trội hơn, khả năng thông báo tín hiệu lẫn định vị chiếc xe cũng được gia tăng đáng kể. 
- Chóa ĐEN KHÓI phối màu: Cam/ Đỏ/ Xanh rêu/Xanh dương. 
Bảo hành 12 tháng 1 đổi 1. 
Lưu ý: Dùng dây và bóng zin theo xe."],
            ["name" => "Tay thắng Carbon cho AB160", "number" => 505, "price" => 1300000, "like" => 3592, "image" => "dochoi/36.jpg", "description" => "Tay thắng Carbon cho AB 160 mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày cực tốt, hàng đặt gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa.  Tay thắng Carbon cho AB 160 có bản lề gắn như zin không chế cháo."],
            ["name" => "Gù trung CNC gắn AB 2020, Vario 160", "number" => 431, "price" => 150000, "like" => 3739, "image" => "dochoi/37.jpg", "description" => "Gù trung CNC mới dành riêng cho AB 2020 trở lên và Vario 160 mới mà không cần phải cắt, mài ghi đông, có thể gắn được tất cả loại xe khác. Thiết kế nhôm CNC logo Brembo cực nét, nhìn sang trọng, đẹp mắt."],
            ["name" => "Bao tay gù nhôm X1R V2 chính hãng", "number" => 271, "price" => 170000, "like" => 8155, "image" => "dochoi/38.jpg", "description" => "Bao tay gù nhôm X1R chính hãng gắn mọi loại xe, thương hiệu X1R gần đây đã trở nên quen thuộc với anh em biker, bởi thiết kế đẹp mắt cùng với giá thành hợp lí. Bao tay với cao su mềm mại, bám chắc tay kể cả khi trời mưa, cùng với đó là nắp chụp gù nhôm CNC theo sản phẩm thiết kế khá đẹp.  Bao tay gù nhôm X1R chính hãng là sản phẩm 2 trong 1, giúp khách hàng đỡ phải lăn tăn khi phải chọn mua cả bao tay và gù tay lái."],
            ["name" => "Kính chắn gió Zhi.pat chính hãng cho Click, Vario 2017 phong cách Touring", "number" => 216, "price" => 1480000, "like" => 9349, "image" => "dochoi/39.jpg", "description" => "Kính chắn gió Zhi.pat chính hãng cho Click, Vario 2017 đầy thể thao & mạnh mẽ.  Có thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, mang lại cảm giác lái tuyệt vời và đầy phấn khích sau tay lái.  Sản phẩm gồm: Pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng...  được bảo hành chính hãng 12 tháng."],
            ["name" => "Kính chắn gió ZHI.PAT cho NVX 2016 - 2020 phong cách Touring", "number" => 455, "price" => 1480000, "like" => 1878, "image" => "dochoi/40.jpg", "description" => "Kính chắn gió ZHI.PAT cho NVX 2016 - 2020 phong cách Touring đầy thể thao & mạnh mẽ.  Kính chắn gió ZHI.PAT phong cách Touring có thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, kính chắn gió được gia công rất cao cấp mang đến cho Biker cảm giác lái tuyệt vời và đầy phấn khích sau tay lái.  Kính chắn gió ZHI.PAT phong cách Touring cho NVX 2016 - 2020 gồm đầy đủ bộ pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng...  Sản phẩm được bảo hành chính hãng ZHI.PAT 12 tháng."],
            ["name" => "Đĩa KingSpeed 260mm mẫu mới 4 lỗ", "number" => 187, "price" => 550000, "like" => 9206, "image" => "dochoi/41.jpg", "description" => "Đĩa KingSpeed 260mm vừa cho ra mắt mẫu mới cho thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. Thiết kế mẫu mới dạng bông rất đẹp 
Đĩa KingSpeed 260mm mẫu mới 4 lỗ ốc gắn vừa cho các dòng xe Wave, AB cũ, Exciter 135, Sirius muốn đi đĩa lớn."],
            ["name" => "Kính H2C tròn chính hãng mode chân kính", "number" => 562, "price" => 650000, "like" => 1603, "image" => "dochoi/42.jpg", "description" => "Kính H2C loại tròn chính hãng làm bằng nhôm sắc nét, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau, đảm bảo an toàn. Kính H2C đã được mode chân lại, nhìn rất thẩm mỹ, có khả năng xoay 180 độ, tiện lợi cho việc di chuyển   Kính H2C tròn xoay có thể gắn đước tất cả các loại xe 2 bánh."],
            ["name" => "Tay côn chính hãng cho Suzuki Satria", "number" => 307, "price" => 105000, "like" => 6313, "image" => "dochoi/43.png", "description" => "Tay côn chính hãng cho Suzuki Satria... (tay bên trái), thay thế cho tay côn zin theo xe bị trầy, gãy,...."],
            ["name" => "Baga inox 10 ly màu titan cho Exciter 150", "number" => 845, "price" => 200000, "like" => 2389, "image" => "dochoi/44.jpg", "description" => "Baga inox 10ly màu titan cho Exciter 150 được làm bằng vật liệu cao cấp, với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy, xe rất thẩm mỹ và gọn gàng."],
            ["name" => "Kính CNC 002 mẫu mới", "number" => 434, "price" => 450000, "like" => 8842, "image" => "dochoi/45.jpg", "description" => "Kính CNC 002 mẫu mới, làm bằng nhôm sắc nét, không phải dạng nhựa cứng giá rẻ trên thị trường, có thể xoay 360 độ, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau.  Kính CNC 002 có thể gắn đước tất cả các loại xe 2 bánh."],
            ["name" => "Tay thắng Carbon cho Vario 160, PCX 160", "number" => 200, "price" => 1300000, "like" => 4667, "image" => "dochoi/46.jpg", "description" => "Tay thắng Carbon cho Vario 160, PCX 160 mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Vario 160, PCX 160, Click 160 có bản lề gắn như zin không chế cháo."],
            ["name" => "Tay thắng Carbon cho Satria/Raider", "number" => 121, "price" => 1300000, "like" => 9132, "image" => "dochoi/47.jpg", "description" => "Tay thắng Carbon cho Satria/Raider mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Satria/Raider có bản lề gắn như zin không chế cháo."],
            ["name" => "Đèn Led 2 tầng ZHI.PAT cho Sirius SRC110 xăng cơ 2003 - 2022", "number" => 864, "price" => 1290000, "like" => 4398, "image" => "dochoi/48.jpg", "description" => "ZHI.PAT SRC110 – Phiên bản đèn led 2 tầng mới nhất dành cho Sirius SRC110 xăng cơ 2003 - 2022 . 
Thông số kỹ thuât Đèn led 2 tầng ZHI.PAT SRC110:  
+ Điện áp: DC9V - 20V (zin theo xe )  
+ Passing Beam: 12V/9W  
+ Driving Beam: 12V/18W  
+ Kết nối chân H4 theo xe.  
+ Mặt kính phủ chống trầy. Không bị ố vàng.   
Với 2 phiên bản màu: Trắng Bạc và Đen Khói. 
Chế độ bảo hành 12 tháng chính hãng 1 đổi 1."],
            ["name" => "Bộ ốc Salaya dàn áo cho xe Honda Wave nhỏ 100-110", "number" => 219, "price" => 295000, "like" => 2389, "image" => "dochoi/49.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Honda Wave nhỏ 100-110 cũ, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu.  Bộ ốc dàn áo Salaya cho xe Honda Wave nhỏ gồm: 19 con gắn full dàn áo xe."],
            ["name" => "Che két nước CNC Anode cho Honda SHVN 2020", "number" => 412, "price" => 195000, "like" => 7836, "image" => "dochoi/50.jpg", "description" => "Che két nước CNC Anode mới nhất dành cho Honda SHVN 2020..., với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước  Che két nước CNC Anode gắn vừa khít cho Honda SHVN 2020, có 3 màu: Anode vàng nhạt, bạc, đen."],
            ["name" => "Cảng sau, Tay xách SH350i chính hãng ZHI.PAT cho SHVN 2020 - 2023", "number" => 876, "price" => 550000, "like" => 6167, "image" => "dochoi/51.jpg", "description" => "Cảng sau, Tay xách SH350i chính hãng ZHI.PAT cho SHVN 2020 - 2023, sản phẩm phá cách hoàn toàn mới, nhìn rất lạ mắt khi trang bị lên xe, sản phẩm rất chắc chắn làm từ nhựa kỹ thuật ABS siêu bền.   Cảng sau, Tay xách SH350i chính hãng ZHI.PAT cho SHVN 2020 - 2023 có 3 màu: Đen bóng, đen nhám, bạc."],
            ["name" => "Tay thắng RCB S3 chính hãng cho Honda SH", "number" => 831, "price" => 500000, "like" => 7653, "image" => "dochoi/52.jpg", "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho Honda SH 2 thắng đĩa (SH 125/150i, SH300i, SH350i) các đời...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. 
Tay thắng RCB S3 chính hãng cho Honda SH có 2 màu: đen và bạc"],
            ["name" => "Tay thắng RCB S3 chính hãng cho Winner", "number" => 799, "price" => 500000, "like" => 5312, "image" => "dochoi/53.jpg", "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho Honda Winner các đời...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. 
Tay thắng RCB S3 chính hãng cho Winner có 2 màu: đen và bạc"],
            ["name" => "Tay thắng RCB S3 chính hãng cho AB", "number" => 290, "price" => 500000, "like" => 6327, "image" => "dochoi/54.jpg", "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho AB...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn.  Tay thắng RCB S3 chính hãng cho AB có 2 màu: đen và bạc"],
            ["name" => "Tay thắng RCB S3 chính hãng cho Exciter", "number" => 106, "price" => 500000, "like" => 6526, "image" => "dochoi/55.jpg", "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho Exciter các đời...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. 
Tay thắng RCB S3 chính hãng cho Exciter có 2 màu: đen và bạc"],
            ["name" => "Gù Seven Speed CNC loại to mẫu mới", "number" => 543, "price" => 200000, "like" => 8466, "image" => "dochoi/56.jpg", "description" => "Gù Seven Speed CNC mẫu mới độc lạ, thiết kế lớn hơn bình thường, cực chất, vặn dành cho các loại xe moto, tay ga lớn, kiểu dáng không quá dài, thích hợp cho Biker nào thích đi đơn giản.   Gù Seven Speed CNC loại to có thể gắn vừa tất cả các loại xe."],
            ["name" => "Cần số X1R chính hãng cho Winner X (1 chiều)", "number" => 821, "price" => 350000, "like" => 3410, "image" => "dochoi/57.jpg", "description" => "Cần số X1R chính hãng cho Winner X, thiết kế 1 chiều, làm bằng chất liệu nhôm CNC nên cho ra mẫu mã rất đẹp, ngoài ra cần số rất to, chắc, tiện lợi cho việc sang số nhẹ nhàng.  Cần số X1R chính hãng cho Winner X 1 chiều là hàng chính hãng X1R có 2 màu: đen và trắng."],
            ["name" => "Gù dẹp inox Salaya S05", "number" => 365, "price" => 150000, "like" => 5437, "image" => "dochoi/58.jpg", "description" => "Gù dẹp inox Salaya  S05, thiết kế mới nhất rất đẹp, sang trọng, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù dẹp inox Salaya S05 thiết kế ngắn, gọn gàng vào bao tay xe.  Gù dẹp inox Salaya S05 có thể gắn tất cả loại xe máy."],
            ["name" => "Ốp mặt nạ Zhi.Pat mẫu SH350i gắn SHVN 2020 - 2022", "number" => 860, "price" => 790000, "like" => 6531, "image" => "dochoi/59.jpg", "description" => "Ốp mặt nạ Zhi.Pat mẫu SH350i gắn SHVN 2020 – 2022, sản phẩm mới dành cho các bạn chạy SHVN thích gắn mặt nạ mẫu SH350i với giá thành cực kỳ hợp lí, không phải chờ đợi đặt hàng hãng, Ốp mặt nạ mẫu SH350i thiết kế đẹp, tinh tế, gắn vừa khít như zin không cần chế.  Ốp mặt nạ Zhi.Pat mẫu SH350i gắn SHVN 2020 – 2022 làm từ chất liệu nhựa ABS chất lượng bền, chịu lực, chịu nhiết.  Chính hãng Zhi.pat có các màu: Đen mờ - Đen bóng - Trắng - Đỏ - Xám."],
            ["name" => "Van vòi inox Salaya mẫu mới", "number" => 379, "price" => 60000, "like" => 1359, "image" => "dochoi/60.jpg", "description" => "Van vòi inox Salaya mẫu Thái lan kiểu dáng mới rất độc lạ, chất kiệu inox bền bỉ theo thời gian và không xuống màu như các loại van vòi nhôm, Titan, nhựa màu thông thường.  Van vòi inox Salaya mẫu Thái Lan mới có thể gắn cho tất cả các dòng xe."],
            ["name" => "Đĩa KingSpeed 220mm mẫu mới 4 lỗ cho Wave, AB...", "number" => 435, "price" => 520000, "like" => 7458, "image" => "dochoi/61.jpg", "description" => "Đĩa KingSpeed 220mm vừa cho ra mắt mẫu mới cho thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. Thiết kế mẫu mới dạng bông rất đẹp 
Đĩa KingSpeed 220mm mẫu mới 4 lỗ ốc gắn vừa như zin cho các dòng xe Wave, AB cũ, Exciter 135, Sirius......"],
            ["name" => "Cảng sau (Tay xách) nhôm nguyên khối cho SH Ý, SHVN 2013 - 2019 chính hãng ZHI.PAT", "number" => 258, "price" => 2800000, "like" => 5187, "image" => "dochoi/62.png", "description" => "Cảng sau (Tay xách) nhôm nguyên khối chính hãng ZHI.PAT. 
Đẳng cấp vượt trội dành cho Gu thẩm mỹ xứng tầm. Với thiết kế cực ngầu, chất liệu nhôm nguyên khối sắc sảo, bền bỉ. 
Dùng được các xe: SH Ý 2008 - 2010| SHVN 2013 - 2019 
Gồm 2 màu cá tính: Đen mờ - Xám bạc 
Bảo hành chính hãng 12 tháng."],
            ["name" => "Ốp đầu trước ZHI.PAT mẫu SH350i gắn SHVN 2020 - 2022", "number" => 564, "price" => 480000, "like" => 5529, "image" => "dochoi/63.jpg", "description" => "Ốp đầu trước ZHI.PAT mẫu SH350i gắn SHVN 2020 - 2022, hàng hót dành cho các bạn chạy SHVN thích gắn ốp đầu (mão) SH350i với giá thành cực kỳ hợp lí, không phải chờ đợi đặt hàng hãng, ốp đầu SH350i thiết kế đẹp, tinh tế so với ốp đầu zin. 
Ốp đầu trước ZHIPAT mẫu SH350i gắn SHVN 2020 - 2022 làm từ chất liệu nhựa ABS chất lượng, có các màu: Đen mờ - Đen bóng - Trắng - Đỏ ."],
            ["name" => "Cùm tăng tốc Domino chính hãng 1 dây ga trên", "number" => 360, "price" => 1600000, "like" => 2477, "image" => "dochoi/64.jpg", "description" => "Cùm tăng tốc Domino chính hãng 1 dây ga trên màu đen giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó.  Cùm ga tăng Domino 1 dây ga trên chính hãng được sản xuất tại Italy, 1 bộ gồm: cùm và cặp bao tay chính hãng gắn được tất cả dòng xe."],
            ["name" => "Đĩa KingSpeed sau cho SH350i, SH300i, SH125i, SH150i", "number" => 327, "price" => 700000, "like" => 9679, "image" => "dochoi/65.jpg", "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho SH350i, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giữa lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed sau mẫu mới nhất cho SH350i, SH300i có size 240mm gắn vừa như zin không cần chế cháo. Có thể gắn vừa khít cho bánh trước sau cho SH125-SH150i"],
            ["name" => "Đĩa KingSpeed trước cho SH350i, SH300i, Winner", "number" => 112, "price" => 700000, "like" => 7581, "image" => "dochoi/66.jpg", "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho SH350i, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giữa lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed mẫu mới nhất cho SH350i, SH300i, Winner có size 255mm gắn vừa như zin không cần chế cháo."],
            ["name" => "Bộ ốc nồi Salaya inox cho Honda Future Led", "number" => 396, "price" => 350000, "like" => 4038, "image" => "dochoi/67.png", "description" => "Bộ ốc nồi Salaya inox cho Honda Future Led full gồm 21 con gắn vừa khít cho Future Led, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế mẫu mới rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Bộ ốc nồi Salaya inox cho Honda Sonic", "number" => 676, "price" => 300000, "like" => 629, "image" => "dochoi/68.jpg", "description" => "Bộ ốc nồi Salaya inox cho Honda Sonic full gồm 21 con gắn vừa khít cho xe Sonic, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế mẫu mới rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Bộ ốc nồi Salaya inox cho Exciter 2010", "number" => 156, "price" => 350000, "like" => 5702, "image" => "dochoi/69.jpg", "description" => "Bộ ốc nồi Salaya inox cho Exciter 2010 (Exciter nhỏ) full gồm 25 con gắn vừa khít cho Exciter 2010, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế mẫu mới rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Đĩa KingSpeed mẫu mới cho Vario, Click (5 lỗ)", "number" => 196, "price" => 500000, "like" => 2639, "image" => "dochoi/70.jpg", "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho Vario thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giưã lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí.  Đĩa KingSpeed mẫu mới cho Vario, Click 5 lỗ ốc có size 190mm gắn vừa như zin cho các dòng xe Vario, Click 150 đời 2018-2021"],
            ["name" => "Đĩa KingSpeed mẫu mới cho Vario, Click (4 lỗ)", "number" => 145, "price" => 500000, "like" => 2705, "image" => "dochoi/71.jpg", "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho Vario thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giưã lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed mẫu mới cho Vario, Click có size 190mm gắn vừa như zin cho các dòng xe Vario, Click 125 2018-2021 (hoặc Vario, Click đời cũ 2017), Mio, Janus (các mâm 4 lỗ đĩa), Sonic mà không cần chế cháo."],
            ["name" => "Xinhan Spirit Beast M1 chính hãng", "number" => 146, "price" => 200000, "like" => 5348, "image" => "dochoi/72.jpg", "description" => "Xinhan Spirit Beast M1 hàng chính hãng hoàn toàn mới, thiết kế thon gọn khá ấn tượng dành cho các dòng xe. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam  Xinhan Spirit Beast M1 chính hãng có thể gắn cho nhiều loại xe."],
            ["name" => "Bộ ốc Salaya dàn áo cho xe Honda Wave A", "number" => 253, "price" => 305000, "like" => 7530, "image" => "dochoi/73.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Honda Wave A, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu.  Bộ ốc dàn áo Salaya cho xe Honda Wave A gồm: 24 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya dàn áo cho xe Wave RS, RSX", "number" => 122, "price" => 320000, "like" => 5918, "image" => "dochoi/74.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Honda Wave RSX, RS, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu.  Bộ ốc dàn áo Salaya cho xe Honda Wave RSX, RS gồm: 24 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya dàn áo cho xe  AB 2020", "number" => 298, "price" => 360000, "like" => 4418, "image" => "dochoi/75.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Honda AB 2020, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu.  Bộ ốc dàn áo Salaya cho xe Honda AB 2020 gồm: 26 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya dàn áo cho xe Exciter 150", "number" => 823, "price" => 320000, "like" => 5122, "image" => "dochoi/76.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Exciter 150, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe  Exciter 150 gồm: 32 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya dàn áo cho xe Exciter 135 (4 số)", "number" => 550, "price" => 380000, "like" => 8896, "image" => "dochoi/77.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Exciter 2010 , chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe Exciter 2010 gồm: 43 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya Dàn áo cho xe Dream", "number" => 350, "price" => 235000, "like" => 4315, "image" => "dochoi/78.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Dream, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp em trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe Honda Dream gồm: 17 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya Dàn áo cho xe Sonic", "number" => 423, "price" => 235000, "like" => 2227, "image" => "dochoi/79.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Sonic, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe Honda Sonic  gồm: 18 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya Dàn áo cho xe Winner 150", "number" => 295, "price" => 285000, "like" => 5138, "image" => "dochoi/80.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Honda Winner V1, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe Honda Winner V1 gồm: 24 con gắn full dàn áo xe."],
            ["name" => "Bộ Ốc Salaya dàn áo cho xe Sirius Fi", "number" => 212, "price" => 235000, "like" => 2949, "image" => "dochoi/81.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Sirius Fi, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe Sirius Fi gồm: 20 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya Dàn áo cho xe Exciter 135 (5 số)", "number" => 648, "price" => 285000, "like" => 5640, "image" => "dochoi/82.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Exciter 135 (2011- 2014), chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe Exciter 135 (2011 - 2014) gồm: 24 con gắn full dàn áo xe."],
            ["name" => "Bộ ốc Salaya Dàn áo cho xe Future led 2018 - 2021", "number" => 848, "price" => 245000, "like" => 2270, "image" => "dochoi/83.jpg", "description" => "Bộ ốc dàn áo Salaya cho xe Future Led 2018 - 2021, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. 
Bộ ốc dàn áo Salaya cho xe Future Led 2018 - 2021 gồm: 21 con gắn full dàn áo xe."],
            ["name" => "Kính chắn gió ZHI.PAT cho NVX 155 phong cách Touring", "number" => 465, "price" => 1480000, "like" => 2965, "image" => "dochoi/84.jpg", "description" => "Kính chắn gió ZHI.PAT cho NVX 155 phong cách Touring đầy thể thao & mạnh mẽ. 
Kính chắn gió ZHI.PAT phong cách Touring có thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, kính chắn gió được gia công rất cao cấp mang đến cho Biker cảm giác lái tuyệt vời và đầy phấn khích sau tay lái. 
Kính chắn gió ZHI.PAT phong cách Touring cho NVX 155 gồm đầy đủ bộ pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng... 
Sản phẩm được bảo hành chính hãng ZHI.PAT 12 tháng."],
            ["name" => "Kính chắn gió ZHI.PAT chính hãng cho AB 2020 - 2021 phong cách Touring", "number" => 460, "price" => 1480000, "like" => 7276, "image" => "dochoi/85.jpg", "description" => "Kính chắn gió ZHI.PAT cho AB 2020 - 2021 phong cách Touring đầy thể thao & mạnh mẽ.  Có thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, mang lại cảm giác lái tuyệt vời và đầy phấn khích sau tay lái.  Sản phẩm gồm: Pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng...  được bảo hành chính hãng 12 tháng."],
            ["name" => "Cảng sau (Tay xách) nhôm nguyên khối cho SH350i, SHVN 2020 - 2022 chính hãng ZHI.PAT", "number" => 581, "price" => 2800000, "like" => 5605, "image" => "dochoi/86.jpg", "description" => "Cảng sau (Tay xách) nhôm nguyên khối chính hãng ZHI.PAT. 
Đẳng cấp vượt trội dành cho Gu thẩm mỹ xứng tầm. Với thiết kế cực ngầu, chất liệu nhôm nguyên khối sắc sảo, bền bỉ. 
Dùng được các xe: SH350i, SHVN 2020 - 2022 
Gồm 2 màu cá tính: Đen mờ - Xám bạc 
Bảo hành chính hãng 12 tháng."],
            ["name" => "Đèn led 2 tầng ZHI.PAT VS110 cho Vision 2021 – 2022", "number" => 562, "price" => 1180000, "like" => 2839, "image" => "dochoi/87.jpg", "description" => "Sản phẩm chính hãng ZHI.PAT với thiết kế thanh lịch và sắc màu hiện đại từ công nghệ đèn LED dành cho xe Vision 2021 – 2022.   Sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường.   Không cần thay đổi jack cắm, thao tắc gắn rất đơn giản không hề chế độ.   Đèn led 2 tầng ZHI.PAT VS110 cho Vision 2021 – 2022 có 2 màu: Trắng bạc và Đen khói cực ngầu.   Chế độ bảo hành 12 tháng 1 đổi 1."],
            ["name" => "Nút Carbon che kính SH", "number" => 499, "price" => 125000, "like" => 9728, "image" => "dochoi/88.jpg", "description" => "Nút carbon che kính xe Honda SH các đời, thiết kế phủ Carbon xịn nên rất đẹp và bền, có sẵn ốc và lông đền để chụp lỗ chân kính các dòng xe Honda SH."],
            ["name" => "Kính chắn gió Zhi.pat chính hãng cho Vario, Click 2018 phong cách Touring", "number" => 762, "price" => 1480000, "like" => 2978, "image" => "dochoi/89.jpg", "description" => "Kính chắn gió ZHI.PAT phong cách Touring cho Vario, Click (2018 trở lên) đầy thể thao & mạnh mẽ.  Có thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, mang lại cảm giác lái tuyệt vời và đầy phấn khích sau tay lái.  Sản phẩm gồm: Pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng...  được bảo hành chính hãng 12 tháng."],
            ["name" => "Gù inox Salaya lõm", "number" => 657, "price" => 150000, "like" => 48, "image" => "dochoi/90.jpg", "description" => "Gù inox Salaya lõm, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù inox Salaya thiết kế ngắn gọn, lõm vào trung tâm rất gọn gàng vào bao tay xe.  Gù inox Salaya lõm có thể gắn tất cả loại xe máy."],
            ["name" => "Kính H2C inox cho Suzuki và Honda", "number" => 295, "price" => 100000, "like" => 9131, "image" => "dochoi/91.jpg", "description" => "Kính H2C inox dành cho Suzuki và Honda, kính được gia công lấy thương hiệu H2C, sản phẩm mới toanh trên thị trường, có thiết kế như các dòng xe Suzuki và Honda gắn chung, đang rất được nhiều Biker ưa chuộng bởi kiểu dáng đẹp cũng như giá thành rẻ."],
            ["name" => "Cốt bánh sau inox Salaya cho Honda Sonic", "number" => 893, "price" => 180000, "like" => 6553, "image" => "dochoi/92.jpg", "description" => "Cốt bánh sau inox Salaya dành cho Honda Sonic, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ.  Cốt bánh sau inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Cốt bánh trước inox Salaya cho Honda Sonic", "number" => 202, "price" => 190000, "like" => 2295, "image" => "dochoi/93.jpg", "description" => "Cốt bánh trước inox Salaya dành cho Honda Sonic, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. 
Cốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Cốt bánh trước inox Salaya cho Suzuki Raider", "number" => 716, "price" => 180000, "like" => 7609, "image" => "dochoi/94.jpg", "description" => "Cốt bánh trước inox Salaya dành cho Suzuki Raider, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ.  Cốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Đĩa thắng KingSpeed Moto 3 Version 2", "number" => 496, "price" => 550000, "like" => 9858, "image" => "dochoi/95.jpg", "description" => "Đĩa KingSpeed Moto 3 Version 2, mẫu nâng cấp mới của Moto 3 phiên bản cũ, thiết kế tròn tương tự như các kiểu đĩa thắng dành cho xe đua, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed Moto 3 Version 2 size 220mm 4 lỗ, gắn vừa như zin cho các dòng xe AB cũ , Wave, Exciter 135, Sirius..."],
            ["name" => "Bao tay Progrip 723 chính hãng", "number" => 260, "price" => 400000, "like" => 5413, "image" => "dochoi/96.jpg", "description" => "Bao tay Progrip 723 hàng chính hãng, thiết kế Progrip lúc nào cũng đậm chất Biker, gai bao tay được làm rất tinh tế, chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Progrip 723 hàng chính hãng made in Italy.  Bao tay Progrip 723 gắn được tất cả các loại xe."],
            ["name" => "Cùm tăng tốc Domino 2 dây ga dưới màu vàng chính hãng", "number" => 230, "price" => 2150000, "like" => 5386, "image" => "dochoi/97.jpg", "description" => "Cùm tăng tốc Domino 2 dây ga dưới màu vàng chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. 
Cùm ga tăng Domino 2 dây ga dưới chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."],
            ["name" => "Tay thắng Carbon cho Honda Air Blade ABS 2020, PCX", "number" => 425, "price" => 1300000, "like" => 2676, "image" => "dochoi/98.jpg", "description" => "Tay thắng Carbon cho Honda Air Blade 2020 ABS, PCX mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Honda Air Blade ABS 2020, PCX có bản lề gắn như zin không chế cháo."],
            ["name" => "Tay thắng Carbon cho Honda Vario, Click đời 2017", "number" => 308, "price" => 1300000, "like" => 5521, "image" => "dochoi/99.jpg", "description" => "Tay thắng Carbon cho Honda Vario, Click đời 2017 (mẫu cũ), thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Honda Vario, Click đời 2017 (mẫu cũ) có bản lề gắn như zin không chế cháo."],
            ["name" => "Gù dẹp inox Salaya", "number" => 236, "price" => 95000, "like" => 8719, "image" => "dochoi/100.jpg", "description" => "Gù dẹp inox Salaya, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù dẹp inox Salaya thiết kế ngắn, gọn gàng vào bao tay xe.  Gù dẹp inox Salaya có thể gắn tất cả loại xe máy."],
            ["name" => "Tay thắng Carbon cho Honda SH (2 đĩa)", "number" => 742, "price" => 1300000, "like" => 494, "image" => "dochoi/101.jpg", "description" => "Tay thắng Carbon cho Honda SH 2 đĩa, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Honda SH có bản lề gắn như zin không chế cháo."],
            ["name" => "Tay thắng Carbon cho Winner", "number" => 243, "price" => 1300000, "like" => 7206, "image" => "dochoi/102.jpg", "description" => "Tay thắng Carbon cho Winner, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Winner các đời có bản lề gắn như zin không chế cháo."],
            ["name" => "Tay thắng Carbon cho Exciter các đời", "number" => 533, "price" => 1300000, "like" => 2773, "image" => "dochoi/103.png", "description" => "Tay thắng Carbon cho Exciter, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Exciter các đời có bản lề gắn như zin không chế cháo."],
            ["name" => "Tay thắng Carbon cho Vario, Click 2018", "number" => 457, "price" => 1300000, "like" => 6320, "image" => "dochoi/104.jpg", "description" => "Tay thắng Carbon cho Vario, Click 2018 trở lên, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Vario, Click 2018 trở lên có bản lề gắn như zin không chế cháo."],
            ["name" => "Dây ga Thái", "number" => 250, "price" => 90000, "like" => 2816, "image" => "dochoi/105.png", "description" => "Dây ga Thái, dùng để thay thế dây ga zin lâu ngày bị mục nát, nứt, dơ bụi khiến tay ga nặng hơn, hoặc dây ga Thái dùng để gắn chung với cùm tăng Domino nhìn khá nổi bật.  Dây ga hàng Thái Lan có thể gắn được tất cả loại xe."],
            ["name" => "Co ga Domino", "number" => 387, "price" => 70000, "like" => 6253, "image" => "dochoi/106.jpg", "description" => "Co ga Domino hàng copy đủ màu sắc, gắn chung với cùm tăng Domino giúp màu mè, nổi bật hơn, ruột bên trong cao su bền, đẹp, thiết kế rất nét, đẹp."],
            ["name" => "Cùm tăng tốc Domino 2 dây ga dưới màu đen chính hãng", "number" => 399, "price" => 1750000, "like" => 5053, "image" => "dochoi/107.jpg", "description" => "Cùm tăng tốc Domino 2 dây ga dưới màu đen chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. 
Cùm ga tăng Domino 2 dây ga dưới chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."],
            ["name" => "Cùm tăng tốc Domino 2 dây ga trên màu vàng chính hãng", "number" => 611, "price" => 1500000, "like" => 6530, "image" => "dochoi/108.jpg", "description" => "Cùm tăng tốc Domino 2 dây ga trên màu vàng chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. 
Cùm ga tăng Domino 2 dây ga trên chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."],
            ["name" => "Cùm tăng tốc Domino 2 dây ga trên màu đen chính hãng", "number" => 650, "price" => 1300000, "like" => 3164, "image" => "dochoi/109.jpg", "description" => "Cùm tăng tốc Domino 2 dây ga trên màu đen chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. 
Cùm ga tăng Domino 2 dây ga trên chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."],
            ["name" => "Xinhan Spirit Beast L27 chính hãng", "number" => 458, "price" => 400000, "like" => 3616, "image" => "dochoi/110.jpg", "description" => "Xinhan Spirit Beast L27 hàng chính hãng hoàn toàn mới, thiết kế thon dài khá ấn tượng dành cho các dòng xe. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam  Xinhan Spirit Beast L27 chính hãng có thể gắn cho nhiều loại xe."],
            ["name" => "Đĩa KingSpeed sau cho Raider Fi, Satria", "number" => 655, "price" => 0, "like" => 6062, "image" => "dochoi/111.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed 190mm gắn vừa như zin đĩa sau cho Raider Fi, Satria mà không cần chế cháo."],
            ["name" => "Kính H2C tròn", "number" => 573, "price" => 220000, "like" => 7884, "image" => "dochoi/112.jpg", "description" => "Kính H2C tròn hàng gia công làm bằng nhôm sắc nét, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau, đảm bảo an toàn. Kính H2C đã được mode chân lại, nhìn rất thẩm mỹ  Kính H2C tròn có thể gắn đước tất cả các loại xe 2 bánh."],
            ["name" => "Đĩa thắng KingSpeed Moto 3", "number" => 738, "price" => 480000, "like" => 4396, "image" => "dochoi/113.jpg", "description" => "Đĩa KingSpeed Moto 3, thiết kế tròn tương tự như các kiểu đĩa thắng dành cho xe đua, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed Moto 3 size 220mm 4 lỗ, gắn vừa như zin cho các dòng xe AB cũ , Wave..."],
            ["name" => "Kính gù Motogadget tròn", "number" => 853, "price" => 800000, "like" => 3100, "image" => "dochoi/114.jpg", "description" => "Kính gù Motogadget tròn, hàng chuẩn 1:1 mẫu mới nhất, được thiết kế tinh tế, nguyên khối sắc cạnh từng chi tiết, cùng với đó là độ bền, cứng cáp, an toàn khi xe vận hành dài lâu. Kính gù Motogadget tròn lên xe nhìn rất gọn, thích hợp cho xe đi gọn nhẹ hơn là gắn kính kiểu truyền thống.  Kính gù Motogadget tròn, hàng chuẩn 1:1 có thể gắn tất cả các loại xe."],
            ["name" => "Che két nước CNC titan cho Yamaha Exciter 155", "number" => 208, "price" => 0, "like" => 5102, "image" => "dochoi/115.jpg", "description" => "Che két nước CNC màu Titan mới nhất dành cho Exciter 155, với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước 
Che két nước CNC màu titan gắn vừa khít cho Yamaha Exciter 155."],
            ["name" => "Che két nước CNC bạc cho Yamaha Exciter 155", "number" => 347, "price" => 0, "like" => 5028, "image" => "dochoi/116.jpg", "description" => "Che két nước CNC bạc mới nhất dành cho Exciter 155, với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước 
Che két nước CNC bạc gắn vừa khít cho Yamaha Exciter 155."],
            ["name" => "Ốp mặt nạ carbon limited cho Exciter 155", "number" => 716, "price" => 950000, "like" => 8755, "image" => "dochoi/117.jpg", "description" => "Ốp mặt nạ carbon limited cho Exciter 155, miếng ốp được làm từ carbon nguyên khối, rất chắc chắn, ngoài việc làm xe trở nên đẹp hơn còn giúp xe của bạn trở thành bản limited như đợt đầu bán ra 100 xe ở Việt Nam.
Ốp mặt nạ carbon limited cho Exciter 155 được sản xuất với nhiều con số để cho khách hàng chọn lựa."],
            ["name" => "Rổ giữa cho Exciter 155", "number" => 110, "price" => 150000, "like" => 2031, "image" => "dochoi/118.jpg", "description" => "Rổ giữa dành cho Exciter 155 mới, rất tiện dụng dùng để áo khoác, áo mưa, khẩu trang, nón...khắc phục tính trang không có chỗ để đồ trên xe số vô cùng tiện lợi. 
Rổ giữa dành cho Exciter 155 gôm nguyên bộ rổ, pát gắn vừa khít Exciter 155."],
            ["name" => "Lót cốp da cách nhiệt cho Honda Air Blade 125", "number" => 255, "price" => 320000, "like" => 2278, "image" => "dochoi/119.jpg", "description" => "Lót cốp da cách nhiệt cho xe Honda Air Blade 125 (AB125) các đời từ 2013-2019, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda Air Blade 125 (AB125) các đời từ 2013-2019,."],
            ["name" => "Bợ đầu đèn sơn carbon chính hãng Zhi.Pat cho EX135 (4 số)", "number" => 691, "price" => 260000, "like" => 3843, "image" => "dochoi/120.jpg", "description" => "Bợ đầu đèn sơn carbon chính hãng Zhi.Pat cho EX135 (4 số). 
Gắn như zin không cần chế. Có thể kết hợp với đầu đèn led hoặc gắn thêm kính chắn gió để thay đổi diện mạo đầu đèn xe. 
Sản phẩm chính hãng Zhi.pat."],
            ["name" => "Bợ đầu đèn sơn đen chính hãng Zhi.Pat cho EX135 (4 số)", "number" => 827, "price" => 260000, "like" => 8361, "image" => "dochoi/121.jpg", "description" => "Bợ đầu đèn sơn đen chính hãng Zhi.Pat cho EX135 (4 số). 
Gắn như zin không cần chế. Có thể kết hợp với đầu đèn led hoặc gắn thêm kính chắn gió để thay đổi diện mạo đầu đèn xe. 
Sản phẩm chính hãng Zhi.pat"],
            ["name" => "Lót cốp da cách nhiệt cho Honda SHVN 2020", "number" => 597, "price" => 250000, "like" => 5687, "image" => "dochoi/122.jpg", "description" => "Lót cốp da cách nhiệt cho xe Honda SHVN 2020, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda SHVN 2020."],
            ["name" => "Lót cốp da cách nhiệt cho Honda SH Mode", "number" => 409, "price" => 250000, "like" => 5752, "image" => "dochoi/123.JPG", "description" => "Lót cốp da cách nhiệt cho xe Honda SH Mode, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda SH Mode."],
            ["name" => "Lót cốp da cách nhiệt cho Honda Vision", "number" => 228, "price" => 250000, "like" => 4632, "image" => "dochoi/124.JPG", "description" => "Lót cốp da cách nhiệt cho xe Honda Vision 2016-2020, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda Vision 2016-2020."],
            ["name" => "Lót cốp da cách nhiệt cho Honda Lead 125", "number" => 532, "price" => 0, "like" => 1784, "image" => "dochoi/125.JPG", "description" => "Lót cốp da cách nhiệt cho xe Honda Lead 125, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda Lead 125."],
            ["name" => "Lót cốp da cách nhiệt cho Honda Vario, Click", "number" => 613, "price" => 0, "like" => 8558, "image" => "dochoi/126.JPG", "description" => "Lót cốp da cách nhiệt cho xe Honda Vario, Click, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda Vario, Click."],
            ["name" => "Lót cốp da cách nhiệt cho Honda SHVN 2017-2019", "number" => 446, "price" => 250000, "like" => 2922, "image" => "dochoi/127.JPG", "description" => "Lót cốp da cách nhiệt cho xe Honda SHVN 2017-2019, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda SHVN 2017-2019."],
            ["name" => "Lót cốp da cách nhiệt cho Honda Air Blade 2020", "number" => 890, "price" => 320000, "like" => 2713, "image" => "dochoi/128.JPG", "description" => "Lót cốp da cách nhiệt cho xe Honda Air Blade 2020 (AB2020), với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda Air Blade 2020 (AB2020)."],
            ["name" => "Đĩa KingSpeed 245mm (4 lỗ mâm độ) cho Exciter 150", "number" => 649, "price" => 500000, "like" => 3251, "image" => "dochoi/129.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed 245mm 4 lỗ cho Exciter 150 đi mâm độ có 4 lỗ bắt đĩa như mâm RCB, mâm X1R..."],
            ["name" => "Bình dầu inox Salaya", "number" => 315, "price" => 400000, "like" => 8112, "image" => "dochoi/130.jpg", "description" => "Bình dầu inox Salaya, sản phẩm mới từ chất liệu inox làm cho độ bền của bình dầu tốt hơn, ngoài ra inox luôn sáng bóng bền bỉ theo thời gian không xuống màu như các loại đồ nhôm CNC. 
Bình dầu inox Salaya có thể gắn cho các loại xe đi thắng đĩa bình dầu rời."],
            ["name" => "Van vòi inox Salaya", "number" => 687, "price" => 60000, "like" => 5563, "image" => "dochoi/131.jpg", "description" => "Van vòi inox Salaya kiểu dáng mới rất độc lạ, chất kiệu inox bền bỉ theo thời gian và không xuống màu như các loại van vòi nhôm, nhựa màu thông thường.  Van vòi inox Salaya có thể gắn cho tất cả các dòng xe."],
            ["name" => "Combo đèn led 2 tầng Exciter 135 (2005 - 2010) chính hãng ZHI.PAT", "number" => 821, "price" => 1500000, "like" => 1685, "image" => "dochoi/132.jpg", "description" => "Combo đèn pha Led 02 tầng Exciter 135 (2005 – 2010) chính hãng ZHI.PAT. Bao gồm:  - Chóa đèn led: Đen khói/ Bạc Trắng.  - Bợ cổ trước: Sơn đen/ Sơn carbon.  - Kính chắn gió: Trắng/ Đen khói Trong suốt.  Bảo hành 12 tháng 1 đổi 1 chính hãng ZHIPAT.  Đèn pha Led 02 tầng Exciter 135 sử dụng điện áp DC 9 - 30V. Công suất tiêu thụ chế độ cos: 9W- pha 18W."],
            ["name" => "Đĩa thắng RCB chính hãng cho Vario, Click", "number" => 479, "price" => 365000, "like" => 5925, "image" => "dochoi/133.jpg", "description" => "Đĩa thắng RCB (Racing Boy) chính hãng dành cho Vario, Click, thiết kế dạng bông vô cùng ấn tượng, chất liệu rất bền và giá cả vô cùng hợp lý. Vừa là phụ tùng thay thế vừa là đồ trang trí khá tuyệt. 
Đĩa thắng RCB bằng size zin 190mm gắn vừa khít cho Vario, Click (mẫu cũ hoặc Vario, Click mới 125cc) mà không cần chế cháo."],
            ["name" => "Kính chắn gió Zhipat cho Exciter 150/135, Wave A, Wave RSX", "number" => 116, "price" => 130000, "like" => 1086, "image" => "dochoi/134.jpg", "description" => "Kính chắn gió Zhipat cho Exciter 150, Exciter 135, Wave A, Wave RSX, Winner, Winner X,... được thiết kế tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. 
Kính chắn gió có 2 màu: Trắng trong suốt hoặc đen khói trong suốt. 
Được là từ chất liệu nhựa kỹ thuật bền. Chính hãng ZHIPAT."],
            ["name" => "Bao tay Ariete chính hãng 61/SSF", "number" => 693, "price" => 450000, "like" => 7624, "image" => "dochoi/135.jpg", "description" => "Bao tay Ariete 61/SSF hàng chính hãng, thiết kế đơn giản có điểm gai dày đặc tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Ariete 61/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng.  Bao tay Ariete 61/SSF gắn được tất cả các loại xe."],
            ["name" => "Đèn pha led 2 tầng Exciter 135 (2005 - 2010) chính hãng ZHI.PAT", "number" => 480, "price" => 1290000, "like" => 2346, "image" => "dochoi/136.jpg", "description" => "Đèn pha Led 02 tầng Exciter 135 đời 2005 – 2010 chính hãng ZHI.PAT. 
Bảo hành 12 tháng 1 đổi 1 chính hãng ZHIPAT. 
Chóa đèn có 02 màu: Đen khói và trắng bạc. 
Đèn pha Led 02 tầng Exciter 135 sử dụng điện áp DC 9 - 30V. Công suất tiêu thụ chế độ cos: 9W- pha 18W. 
Để phần đầu xe thêm ấn tượng có thể mua thêm: 
- Bợ cổ trước: 260.000. 
- Kính chắn gió: 130.000. 
Lưu ý:
- Xe từ 2006 - 2008: Không bắt buộc mua thêm bợ cổ, vẫn gắn được chóa đèn.  
- Xe từ 2009 - 2010: Bắt buộc phải mua thêm bợ cổ, mới gắn được chóa đèn."],
            ["name" => "Kính Motogadget 2 in 1 gắn tất cả các loại xe", "number" => 153, "price" => 700000, "like" => 509, "image" => "dochoi/137.jpg", "description" => "Kính Motogadget 2 in 1, hàng chuẩn 1:1 mới nhất, khi mua 1 bộ sẽ kèm theo pát bắt gù và bắt chân kính nên khách hàng có thể gắn 1 trong 2 vị trí tuỳ thích, quá tiện lợi.  Kính Motogadget 2 in 1 được thiết kế tinh tế, sắc cạnh từng chi tiết, cùng với đó là độ bền, cứng cáp, an toàn khi xe vận hành dài lâu.  Kính Motogadget hàng chuẩn 1:1 có thể gắn tất cả các loại xe."],
            ["name" => "Cốt bánh sau inox Salaya cho Yamaha Exciter 135 (4 số)", "number" => 468, "price" => 180000, "like" => 6149, "image" => "dochoi/138.jpg", "description" => "Cốt bánh sau inox Salaya dành cho Yamaha Exciter 135 (4 số) sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. 
Cốt bánh sau  inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Cốt bánh sau inox Salaya cho Yamaha Exciter 150", "number" => 825, "price" => 220000, "like" => 4, "image" => "dochoi/139.png", "description" => "Cốt bánh sau inox Salaya dành cho Yamaha Exciter 150 sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ.  Cốt bánh sau  inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Cốt bánh trước inox Salaya cho Honda Winner, Lead", "number" => 255, "price" => 180000, "like" => 1240, "image" => "dochoi/140.jpg", "description" => "Cốt bánh trước inox Salaya dành cho Honda Winner, Lead sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. 
Cốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Cốt bánh trước inox Salaya cho Yamaha Exciter, Sirius, Jupiter", "number" => 143, "price" => 180000, "like" => 1404, "image" => "dochoi/141.jpg", "description" => "Cốt bánh trước inox Salaya dành cho Yamaha Exciter, Sirius, Jupiter sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. 
Cốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Cốt bánh trước inox Salaya cho Vario, Click, AB", "number" => 640, "price" => 180000, "like" => 931, "image" => "dochoi/142.jpg", "description" => "Cốt bánh trước inox Salaya dành cho Vario, Click, AB, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. 
Cốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Gù inox Salaya 5 cạnh hình bông", "number" => 329, "price" => 150000, "like" => 6222, "image" => "dochoi/143.jpg", "description" => "Gù inox Salaya 5 cạnh hình bông, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù inox Salaya thiết kế dài trung bình, gọn gàng vào bao tay xe.  Gù inox Salaya 5 cạnh có thể gắn tất cả loại xe máy."],
            ["name" => "Bộ ốc nồi Salaya inox cho SHVN 2012 - 2022", "number" => 554, "price" => 230000, "like" => 370, "image" => "dochoi/144.png", "description" => "Bộ ốc nồi Salaya inox gồm 12 con gắn vừa y cho SHVN, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe. 
Bộ ốc nồi Salaya inox cho SHVN có thể gắn các đời xe SHVN từ 2012-2020."],
            ["name" => "Ốc nhớt inox Salaya sáng bóng", "number" => 311, "price" => 90000, "like" => 7762, "image" => "dochoi/145.jpg", "description" => "Ốc nhớt inox Salaya, sản phẩm đang hot trên thị trường, inox sáng bóng, bền đẹp theo thời gian.  Ốc nhớt inox Salaya có thể gắn hầu hết các loại xe trên thị trường."],
            ["name" => "Đĩa KingSpeed cho Honda SH", "number" => 295, "price" => 500000, "like" => 4354, "image" => "dochoi/146.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí.  Đĩa KingSpeed 245mm gắn vừa như zin đĩa trước và sau Honda SH mà không cần chế cháo."],
            ["name" => "Đĩa KingSpeed 300mm trước cho Sonic", "number" => 464, "price" => 750000, "like" => 2091, "image" => "dochoi/147.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed 300mm gắn vừa như zin đĩa trước Sonic mà không cần chế cháo."],
            ["name" => "Đĩa KingSpeed 256mm trước cho Winner", "number" => 486, "price" => 550000, "like" => 1870, "image" => "dochoi/148.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed 256mm gắn vừa như zin đĩa trước Winner, Sh300i mà không cần chế cháo."],
            ["name" => "Đĩa KingSpeed 200mm sau cho Exciter150", "number" => 668, "price" => 350000, "like" => 7718, "image" => "dochoi/149.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed 200mm gắn vừa như zin đĩa sau cho Exciter 150 mà không cần chế cháo."],
            ["name" => "Đĩa KingSpeed 245mm trước cho Exciter150", "number" => 552, "price" => 0, "like" => 7844, "image" => "dochoi/150.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed 245mm gắn vừa như zin đĩa trước  cho Exciter 150 mà không cần chế cháo."],
            ["name" => "Đĩa KingSpeed 220mm cho Wave, Dream, AB,...", "number" => 844, "price" => 380000, "like" => 9377, "image" => "dochoi/151.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed 220mm gắn vừa như zin cho các dòng xe AB 125, Wave... mà không cần chế cháo."],
            ["name" => "Bao tay Ariete (chính hãng) 38/SSF", "number" => 602, "price" => 450000, "like" => 5753, "image" => "dochoi/152.jpg", "description" => "Bao tay Ariete 38/SSF hàng chính hãng, thiết kế đơn giản có nhiều đường kẻ ngang (line) tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Ariete 38/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng.  Bao tay Ariete 38/SSF gắn được tất cả các loại xe."],
            ["name" => "Bao tay Ariete (chính hãng) 82/SSF", "number" => 463, "price" => 450000, "like" => 9407, "image" => "dochoi/153.jpg", "description" => "Bao tay Ariete 82/SSF hàng chính hãng, thiết kế đơn giản có nhiều đường kẻ tạo hình chữ nhật nhỏ nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Ariete 82/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng.  Bao tay Ariete 82/SSF gắn được tất cả các loại xe."],
            ["name" => "Bao tay Ariete (chính hãng) 02636/CN", "number" => 506, "price" => 450000, "like" => 5117, "image" => "dochoi/154.jpg", "description" => "Bao tay Ariete 02636/CN hàng chính hãng, thiết kế đơn giản có logo Ariete nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su gai li ti chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Ariete 02636/CNlà hàng chính hãng made in Italy, có tem 7 màu chính hãng.  Bao tay Ariete 02636/CN gắn được tất cả các loại xe."],
            ["name" => "Gù inox Salaya bông", "number" => 718, "price" => 180000, "like" => 8789, "image" => "dochoi/155.jpg", "description" => "Gù inox Salaya hình bông, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù inox Salaya thiết kế ngắn gọn, áp sát vào bao tay xe. 
Gù inox Salaya bông có thể gắn tất cả loại xe máy."],
            ["name" => "Baga inox 10 ly màu titan cho Exciter 135", "number" => 233, "price" => 150000, "like" => 7134, "image" => "dochoi/156.jpg", "description" => "Baga inox 10ly màu titan cho Exciter 135 (đời 2011 - 2015) được làm bằng vật liệu cao cấp, với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy, xe rất thẩm mỹ và gọn gàng."],
            ["name" => "Baga inox 10 ly sơn tĩnh điện cho Exciter 135", "number" => 500, "price" => 150000, "like" => 2900, "image" => "dochoi/157.jpg", "description" => "Baga inox 10ly sơn tĩnh điện đen cho Exciter 135 (đồi 2011-2015) được làm bằng vật liệu cao cấp, sở hữu màu đen nhám trùng với miếng ốp bụng màu đen của xe trông xe rất thẩm mỹ và gọn gàng."],
            ["name" => "Thảm lót chân cao su cho Vario, Click mẫu mới", "number" => 598, "price" => 85000, "like" => 5994, "image" => "dochoi/158.jpg", "description" => "Thảm lót chân cao su cho Vario, Click mẫu mới, thiết kế tương tự thảm lót chân hãng bên Indo, cao su dày, rất chắc chắn, giúp xe luôn sạch sẽ và trầy sàn để chân. 
Thảm lót chân cao su mẫu mới có thể gắn được các đời xe Vario, Click từ 2015 đến nay."],
            ["name" => "Gù trung carbon", "number" => 652, "price" => 300000, "like" => 2984, "image" => "dochoi/159.jpg", "description" => "Gù trung Carbon fiber xịn cực chất, thiết kế khá vừa vặn, carbon chống trày, chống ngã khá tốt. 
Gù trung carbon có thể gắn vừa tất cả các loại xe."],
            ["name" => "Bộ ốc đĩa Salaya inox cho Exciter, Winner, Sonic (10con)", "number" => 871, "price" => 210000, "like" => 2456, "image" => "dochoi/160.jpg", "description" => "Bộ ốc đĩa Salaya inox gồm 10 con 8ly 2 phân gắn cho Exciter, Winner, Sonic, ốc inox cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."],
            ["name" => "Bộ ốc đĩa Salaya inox cho Honda SH, Raider, Satria (8 con)", "number" => 748, "price" => 175000, "like" => 6483, "image" => "dochoi/161.jpg", "description" => "Bộ ốc đĩa Salaya inox gồm 8 con 8ly 2 phân gắn cho Honda SH, Raider, Satria, ốc inox cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."],
            ["name" => "Bộ ốc đĩa Salaya inox cho AB, Vision, Sirius (5con)", "number" => 858, "price" => 70000, "like" => 6001, "image" => "dochoi/162.jpg", "description" => "Bộ ốc đĩa Salaya inox gồm 5 con 6ly 2 phân gắn cho AB mới , Vision, Sirius hoặc các loại xe đĩa 5 lỗ như Vario, Click đời mới  Ốc inox Salaya  cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."],
            ["name" => "Bộ ốc đĩa Salaya inox cho Vario (4con)", "number" => 590, "price" => 90000, "like" => 1065, "image" => "dochoi/163.jpg", "description" => "Bộ ốc đĩa Salaya inox gồm 4 con 8ly 2 phân gắn cho Vario hoặc các loại xe đi đĩa 4 lỗ, ốc inox cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí.  Bộ ốc đĩa Salaya inox gồm 4 con 8ly 2 phân gắn cho các loại xe Vario, Vision, Sirius, Air Blade cũ..."],
            ["name" => "Bộ ốc nồi Salaya inox cho AB 2020", "number" => 272, "price" => 230000, "like" => 9510, "image" => "dochoi/164.png", "description" => "Bộ ốc nồi Salaya inox gồm 12 con gắn vừa y cho AB 2020, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox AB 2020 còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Bộ ốc nồi Salaya inox cho Vario, Click", "number" => 250, "price" => 230000, "like" => 9300, "image" => "dochoi/165.png", "description" => "Bộ ốc nồi Salaya inox gồm 10 con gắn vừa y cho Vario, Click mẫu 2018, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Vario, Click còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Bộ ốc nồi Salaya inox cho Honda Winner", "number" => 698, "price" => 330000, "like" => 4343, "image" => "dochoi/166.jpg", "description" => "Bộ ốc nồi Salaya inox cho Honda Winner full gồm 18 con gắn vừa khít cho Honda Winner, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Winner còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Bộ ốc nồi Salaya inox cho Exciter 150, Exciter 155", "number" => 415, "price" => 360000, "like" => 1980, "image" => "dochoi/167.jpg", "description" => "Bộ ốc nồi Salaya inox cho Exciter 150/155 full gồm 21 con gắn vừa khít cho Ex150/155, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Exciter 150/155 còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Bộ ốc nồi Salaya inox cho Exciter 135 ( 5 số)", "number" => 656, "price" => 390000, "like" => 2502, "image" => "dochoi/168.jpg", "description" => "Bộ ốc nồi Salaya cho Exciter 135 full gồm 22 con gắn vừa khít cho Ex135 từ đời 2011 đến 2014, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Exciter 135 còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Gù trung Seven Speed CNC mẫu mới", "number" => 418, "price" => 135000, "like" => 8242, "image" => "dochoi/169.jpg", "description" => "Gù trung CNC mẫu mới độc lạ, cực chất, thiết kế khá vừa vặn dành cho các loại xe, kiểu dáng không quá dài, thích hợp cho Biker nào thích đi đơn giản.   Gù trung CNC có thể gắn vừa tất cả các loại xe."],
            ["name" => "Đèn led 2 tầng cho Winner 150 chính hãng ZHI.PAT", "number" => 176, "price" => 1450000, "like" => 3023, "image" => "dochoi/170.jpg", "description" => "Đèn led 2 tầng cho Winner 150 chính hãng ZHI.PAT. Lấy khuôn mẫu từ dòng xe Zin, với thiết kế đồng bộ - trẻ trung, tinh tế gắn được cho Winner đời 2017 - 2019.  
Chế độ cos 12.8v còn khi bật pha cả 2 tầng công suất là 20w, độ sáng cao gần 3 lần so với đèn zin. 
Chuôi đèn 08 chấu, không cần thay đổi jack cắm, như vậy thao tắc gắn sẽ rất là đơn giản không hề chế độ.  
Đèn led 2 tầng cho Winner 150 chính hãng ZHI.PAT có 1 màu đen khói cực ngầu, khác biệt hoàn toàn so với màu bạc của đèn zin. Với chế độ bảo hành BH 12 tháng 1 đổi 1."],
            ["name" => "Đĩa X1R chính hãng sau cho Raider", "number" => 854, "price" => 0, "like" => 947, "image" => "dochoi/171.jpg", "description" => "Đĩa thắng X1R chính hãng sau dành cho Suzuki Raider, Satria, kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng.  Đĩa thắng X1R size zin 190mm gắn vừa y chang Raider/Satria mà không cần chế."],
            ["name" => "Đĩa X1R chính hãng trước cho Raider", "number" => 482, "price" => 0, "like" => 4643, "image" => "dochoi/172.jpg", "description" => "Đĩa thắng X1R chính hãng trước dành cho Suzuki Raider, Satria, kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng.  Đĩa thắng X1R size zin 290mm gắn vừa y chang Raider/Satria mà không cần chế."],
            ["name" => "Kính chắn gió Zhi.Pat cho Honda SHVN 2020, SH350i", "number" => 693, "price" => 480000, "like" => 4269, "image" => "dochoi/173.jpg", "description" => "Kính chắn gió Zhi.Pat cho Honda SHVN 125/150i 2020, SH350i được thiết kế rất tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. 
Bộ sản phẩm Kính chắn gió cho SH 2020, SH350i bao gồm: Hộp, thẻ bảo hành, phần kính chắn gió đen khói, phần đế nhựa đen, nút bấm DP. 
Màu sắc đèn định vị sẽ thay đổi tùy theo sở thích của khách hàng, xanh dương lịch lãm, sắc đỏ thời thượng, tím bí ẩn và trắng sang trọng."],
            ["name" => "Đĩa KingSpeed cho Vario, Click (4 lỗ)", "number" => 471, "price" => 380000, "like" => 382, "image" => "dochoi/174.jpg", "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. 
Đĩa KingSpeed cho Vario, Click có size 190mm gắn vừa như zin cho các dòng xe Vario, Click 125 (hoặc Vario, Click đời cũ), Mio, Janus (các mâm 4 lỗ đĩa), Sonic mà không cần chế cháo."],
            ["name" => "Đĩa X1R chính hãng cho Vario, Click, sau Sonic", "number" => 126, "price" => 230000, "like" => 9651, "image" => "dochoi/175.jpg", "description" => "Đĩa thắng X1R chính hãng dành cho bánh sau Sonic, trước  Vario, Click mẫu cũ hoặc Vario, Click 125 mẫu mới (đĩa 4 lỗ), kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng.  Đĩa thắng X1R size zin 190mm gắn vừa y chang Xe Vario, Click (4 lỗ) và bánh sau Honda Sonic mà không cần chế."],
            ["name" => "Đĩa X1R chính hãng trước cho Sonic", "number" => 817, "price" => 320000, "like" => 9783, "image" => "dochoi/176.jpg", "description" => "Đĩa thắng X1R chính hãng trước dành cho Honda Sonic, kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng.  Đĩa thắng X1R size zin 295mm gắn vừa y chang Honda Sonic mà không cần chế."],
            ["name" => "Gù CNC logo", "number" => 821, "price" => 140000, "like" => 3548, "image" => "dochoi/177.jpg", "description" => "Gù CNC logo, hàng loại 1 cực chất, thiết kế khá vừa vặn dành cho các loại xe, chi tiết logo được CNC sắc xảo. 
Gù CNC logo được tặng kèm sơmi nhôm có thể gắn vừa tất cả các loại xe."],
            ["name" => "Tay côn chính hãng cho Honda Sonic", "number" => 680, "price" => 105000, "like" => 7407, "image" => "dochoi/178.jpg", "description" => "Tay côn chính hãng cho Honda Sonic...(tay bên trái), hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay côn zin theo xe."],
            ["name" => "Tay thắng chính hãng cho Honda Sonic", "number" => 605, "price" => 105000, "like" => 3452, "image" => "dochoi/179.jpg", "description" => "Tay thắng chính hãng cho Honda Sonic... (thắng đĩa) bên phải, hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."],
            ["name" => "Gác chân sau cho các xe Vespa", "number" => 785, "price" => 550000, "like" => 9560, "image" => "dochoi/180.jpg", "description" => "Bộ gác chân sau dành cho các dòng xe Vespa: LX, S, Sprint, Primavera...được thiết kế rất đẹp, tiện lợi cho các dòng xe Vespa xưa giờ gác chân rất khó khăn, mỏi chân khi đi xa... 
Bộ gác chân sau cho xe Vespa có đầy đủ pát gắn mà không phải chế cháo."],
            ["name" => "Tay thắng chính hãng cho Yamaha Exciter, NVX, Sirius, Jupiter", "number" => 534, "price" => 85000, "like" => 9473, "image" => "dochoi/181.jpg", "description" => "Tay thắng chính hãng cho Yamaha Exciter, NVX, Sirius, Jupiter... (thắng đĩa) bên phải, hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."],
            ["name" => "Tay côn chính hãng cho Yamaha Exciter", "number" => 330, "price" => 100000, "like" => 5578, "image" => "dochoi/182.jpg", "description" => "Tay côn chính hãng cho Yamaha Exciter, tay thắng NVX (tay bên trái), hàng chính hãng Yamaha thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."],
            ["name" => "Tay côn chính hãng cho Winner, Sonic, MSX", "number" => 404, "price" => 120000, "like" => 1334, "image" => "dochoi/183.jpg", "description" => "Tay côn chính hãng cho Winner, Sonic, MSX (tay bên trái), hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."],
            ["name" => "Tay thắng chính hãng cho Winner, Wave, Future", "number" => 373, "price" => 70000, "like" => 512, "image" => "dochoi/184.jpg", "description" => "Tay thắng chính hãng cho Winner, Future, Wave/Dream... (thắng đĩa) bên phải, hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."],
            ["name" => "Tay thắng chính hãng cho AB, Vario, Click bên phải", "number" => 669, "price" => 135000, "like" => 2890, "image" => "dochoi/185.jpg", "description" => "Tay thắng chính hãng cho AB, Vario/Click (mẫu 2018) bên phải, hàng chính hãng Honda thay thế  cho xe bị trày, hoặc gãy tay thắng zin theo xe."],
            ["name" => "Tay thắng chính hãng cho AB, Vario, Click bên trái", "number" => 469, "price" => 135000, "like" => 2202, "image" => "dochoi/186.jpg", "description" => "Tay thắng chính hãng cho AB, Vario/Click (mẫu 2018) bên trái, hàng chính hãng Honda thay thế  cho xe bị trày, hoặc gãy tay thắng zin theo xe."],
            ["name" => "Cảng sau, tay xách 300i chính hãng ZHI.PAT cho SH 2010 - 2023", "number" => 884, "price" => 450000, "like" => 5174, "image" => "dochoi/187.jpg", "description" => "Cảng sau, tay xách 300i chính hãng ZHI.PAT cho SH 2010 - 2023.   Sử dụng cho các đời: SH Ý nhập: 2010 - 2012. SHVN: 2012 - 2023.   Sản phẩm rất chắc chắn làm từ nhựa kỹ thuật siêu bền.  Có 2 màu: Đen bóng hoặc đen mờ.  Cảng sau (Tay xách) chính hãng ZHI.PAT được bảo hành 12 tháng do lỗi kỹ thuật."],
            ["name" => "Mắt mèo biển số chính hãng ZHIPAT", "number" => 159, "price" => 200000, "like" => 3298, "image" => "dochoi/188.jpg", "description" => "Mắt mèo phản quang ZHIPAT gắn đuôi sau, ngay biển số các dòng xe món phù tùng được trang bị trên các dòng xe ở Châu Âu, giúp nhận diện xe rõ hơn vào ban đêm và tất nhiên nhìn xe cũng đẹp ra hẳn. 
Mắt mèo biển số có thể gắn được trên tất cả các loại xe, và có 3 màu: vàng, trắng, đỏ, hàng chính hãng ZHIPAT được bảo hành kỹ thuật 12 tháng."],
            ["name" => "Xinhan Led kiểu ngắn", "number" => 736, "price" => 120000, "like" => 9266, "image" => "dochoi/189.jpg", "description" => "Xinhan led kiểu ngắn mẫu mới nhất, gọn đẹp, giá thành phải chăng nhưng được làm bằng nhôm khá chắc chắn, dạng bầu bầu ngắn giúp đuôi xe khá gọn đẹp.  Xinhan led kiểu ngắn có thể gắn được tất cả loại xe, đặc biệt gắn khá đẹp trên Vario/Click."],
            ["name" => "Bao tay Daytona NAMI chính hãng", "number" => 436, "price" => 400000, "like" => 2253, "image" => "dochoi/190.jpg", "description" => "Bao tay Daytona NAMI chính hãng, thiết kế đơn giản có logo Daytona cùng các đường sóng ngang nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt, nhất là cho các bạn có mồ hôi tay nhiều.  Bao tay Daytona NAMI gắn được tất cả các loại xe, được sản xuất tại Nhật, thương hiệu Daytona rất nổi tiếng trong việc sản xuất phụ tùng xe máy."],
            ["name" => "Kính xoay CRG xoay 360 độ", "number" => 718, "price" => 650000, "like" => 6758, "image" => "dochoi/191.jpg", "description" => "Kính xoay CRG hàng loại 1, làm bằng nhôm sắc nét, không phải dạng nhựa cứng giá rẻ trên thị trường, có thể xoay 360 độ, các nút xoay được làm rất chắc chắn, có thể gắn cả bên trái lẫn bên phải, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau.  Kính xoay CRG có thể gắn đước tất cả các loại xe 2 bánh."],
            ["name" => "Xinhan Spirit Beast L23 (chính hãng)", "number" => 739, "price" => 450000, "like" => 333, "image" => "dochoi/192.jpg", "description" => "Xinhan Spirit Beast L23 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe, ánh sáng Led rất tốt, và thêm led demi thiết kế viền hình flash nổi bật an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam 
Xi nhan mũi tên Spirit Beast L23 có thể gắn cho nhiều loại xe Vario, Click, Winner X, NVX, R15 ..."],
            ["name" => "Gác chân sau kiểu Ducati", "number" => 808, "price" => 120000, "like" => 5913, "image" => "dochoi/193.jpg", "description" => "Gác chân sau kiểu Ducati làm bằng nhôm rất dày, đẹp và phần cao su được gia công chất lượng, đảm bảo bền theo thời gian. Gác chân sau kiểu Ducati được tao ra theo ý tưởng của siêu xe moto Ducati. 
Gác chân sau kiểu Ducati có thể gắn được nhiều loại xe Honda, Yamaha, Suzuki...có gác chân sau dạng xếp."],
            ["name" => "Kính chắn gió chính hãng Zhi.pat cho Lead mới (2017 - 2022)", "number" => 150, "price" => 380000, "like" => 566, "image" => "dochoi/194.jpg", "description" => "Kính chắn gió chính hãng Zhipat cho Honda Lead mới 2017 - 2022, được thiết kế khác tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. 
Kính chắn gió dành cho Honda Lead mới 2017 - 2022 có luôn pát + ốc gắn vừa khít mà không phải chế."],
            ["name" => "Thảm lót chân cao su cho SHVN 2020", "number" => 229, "price" => 75000, "like" => 8724, "image" => "dochoi/195.jpg", "description" => "Thảm lót chân cao su cho xe SHVN 2020 mẫu mới khá đẹp, cao su chất lượng khá tốt.  Giúp cho xe luôn sạch sẽ,  và còn có thể trang điểm cho xế yêu của bạn đẹp hơn."],
            ["name" => "Chắn gió SH 2020", "number" => 211, "price" => 140000, "like" => 1803, "image" => "dochoi/196.jpg", "description" => "Chắn gió cho Honda SH 2020, làm bằng Mica dày, rất chắc chắn, được thiết kế khác tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. 
Chắn gió dành cho Honda SH 2020 gắn vừa khít mà không phải chế, có thể bắt ốc hoặc dán keo 2 mặt đều được."],
            ["name" => "Cần số 2 chiều X1R cho Exciter 150", "number" => 296, "price" => 320000, "like" => 961, "image" => "dochoi/197.jpg", "description" => "Cần số 2 chiều X1R dành cho xe Exciter 150 , mẫu mã thiết kế bằng nhôm CNC rất đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng.  Cần số 2 chiều X1R vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế khá có lợi cho Exciter 150."],
            ["name" => "Cần số 2 chiều X1R cho Honda Winner", "number" => 421, "price" => 320000, "like" => 3379, "image" => "dochoi/198.jpg", "description" => "Cần số  X1R 2 chiều dành cho xe Honda Winner 150, mẫu mã thiết kế bằng nhôm CNC rất đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng.  Cần số 2 chiều X1R vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế khá có lợi cho Honda Winner."],
            ["name" => "Cảng sau, Tay xách 300i trong suốt chính hãng ZHI.PAT cho SH 2010 - 2020", "number" => 896, "price" => 600000, "like" => 6686, "image" => "dochoi/199.jpg", "description" => "Cảng sau, Tay xách 300i trong suốt chính hãng ZHI.PAT cho SH 2010 - 2020, sản phẩm phá cách hoàn toàn mới, nhìn rất lạ mắt khi trang bị lên xe, sản phẩm rất chắc chắn làm từ nhựa kỹ thuật siêu bền.  Cảng sau (Tay xách) chính hãng ZHI.PAT được bảo hành 12 tháng do lỗi kỹ thuật."],
            ["name" => "Nắp thăm nhớt Biker", "number" => 789, "price" => 120000, "like" => 4967, "image" => "dochoi/200.jpg", "description" => "Nắp thăm nhớt Biker 1:1, mẫu mã đẹp, lạ, làm bằng nhôm CNC, giúp xe nổi bật hơn, đồng thời khó bị người xấu phá hơn nắp thăm nhớt zin. 
Nắp thăm nhớt Biker gắn được tất cả loại xe."],
            ["name" => "Gù trung loại có nắp chụp", "number" => 585, "price" => 220000, "like" => 3294, "image" => "dochoi/201.jpg", "description" => "Gù trung loại có nắp chụp kiểu dáng như Rizoma hàng loại 1 cực chất, thiết kế khá vừa vặn dành cho các loại xe, có nắp chụp ngoài rất thẩm mỹ, chống bị tháo mất gù cũng như nước vào sét ốc.  Gù trung loại có nắp chụp có thể gắn vừa tất cả các loại xe."],
            ["name" => "Kính chiếu hậu gắn gù RCB MR004 chính hãng", "number" => 402, "price" => 500000, "like" => 6965, "image" => "dochoi/202.jpg", "description" => "Kính chiếu hậu gắn gù RCB MR004 với thiết kế hoàn toàn mới, gắn lên gù tay lái giúp xe trông gọn đẹp hơn, nhìn chất hơn, mặt kính đạt chuẩn rất dễ dàng quan sát xe phía sau, mặt gương chống đọng nước khá hiệu quả, ngoài ra với chất liệu nhôm CNC nên kính có tính thẩm mỹ khá cao, vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế cực hot.  Kính chiếu hậu gắn gù Racingboy MR004 gắn được tất cả các loại xe.  Kính chiếu hậu RCB là hàng chính hãng Racing Boy."],
            ["name" => "Ốp đầu cho Winner X", "number" => 568, "price" => 100000, "like" => 6978, "image" => "dochoi/203.jpg", "description" => "Ốp đầu đồ chơi Winner X kiểu mới  có thể gắn nhiều loại xe khác nếu khách hàng thích, chắc chắn, dày, đẹp. 
Ốp đầu Winner X được làm rất chắc chắn, dày, đẹp."],
            ["name" => "Chống đổ sau CNC mẫu mới", "number" => 791, "price" => 260000, "like" => 6627, "image" => "dochoi/204.jpg", "description" => "Chống đổ sau CNC kiểu mới dành cho các loại xe, 1 sản phẩm bảo vệ cực tốt dành cho xe của bạn khỏi bị thiệt hại nặng sau khi va quẹt, té ngã, đặc biệt mẫu mới được thiết kế khá dày, chắc chắn. Ngoài ra có tác dụng làm đồ gác chân cho đỡ mỏi khi đi đường xa 
Chống đổ sau CNC mẫu mới có thể gắn được hầu hết tất cả các dòng xe."],
            ["name" => "Ốc Titan chụp lỗ kính", "number" => 301, "price" => 45000, "like" => 3089, "image" => "dochoi/205.jpg", "description" => "Ốc Titan nguyên con màu xanh rất đẹp dùng để chụp lỗ chân kính. 
Ốc titan chụp lỗ chân kính có răng nghịch/thuận có thể gắn tất cả các loại xe."],
            ["name" => "Xinhan Spirit Beast L14 (chính hãng)", "number" => 797, "price" => 350000, "like" => 3905, "image" => "dochoi/206.jpg", "description" => "Xinhan Spirit Beast L14 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe, ánh sáng Led rất tốt, và thêm led demi thiết kế mũi tên nổi bật an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam 
Xi nhan mũi tên Spirit Beast L14 có thể gắn cho nhiều loại xe Vario, Click, Winner X, NVX, R15 ..."],
            ["name" => "Che két nước nhôm lưới cho Vario, Click, SHVN, AB, SH Mode", "number" => 351, "price" => 220000, "like" => 5852, "image" => "dochoi/207.jpg", "description" => "Che két nước nhôm lưới với thiết kế hoàn toàn mới nhìn rất đẹp, được bao bọc bởi lớp lưới chắc chắn giúp bảo vệ két nước cực tốt, tránh tình trạng bị đá văng vào gây hư hỏng két nước 
Che két nước nhôm lưới dùng để gắn xe Vario, Click, SHVN, AB, SH Mode."],
            ["name" => "Che két nước nhôm lưới mới cho Exciter 150", "number" => 730, "price" => 0, "like" => 3089, "image" => "dochoi/208.jpg", "description" => "Che két nước nhôm lưới mẫu mới nhất dành cho Exciter 150, với thiết kế hoàn toàn mới nhìn rất đẹp, được bao bọc bởi lớp lưới chắc chắn giúp bảo vệ két nước cực tốt, tránh tình trạng bị đá văng vào gây hư hỏng két nước 
Che két nước nhôm lưới dùng để gắn xe Exciter 150."],
            ["name" => "Bao tay Progrip 724 chính hãng", "number" => 758, "price" => 400000, "like" => 897, "image" => "dochoi/209.jpg", "description" => "Bao tay Progrip 724hàng chính hãng, thiết kế Progrip lúc nào cũng đậm chất Biker, gai bao tay có nhiều chi tiết được làm rất tinh tế, chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  Bao tay Progrip 724 hàng chính hãng made in Italy.  Bao tay Progrip 724 gắn được tất cả các loại xe."],
            ["name" => "Baga 10ly tĩnh điện cho Sonic 150", "number" => 601, "price" => 200000, "like" => 5313, "image" => "dochoi/210.jpg", "description" => "Baga 10ly sơn tĩnh điện cho Sonic 150 cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trầy xe. 
Baga 10ly tĩnh điện cho Sonic 150 được làm từ inox 10ly khá dày và nước sơn tĩnh điện khá tốt, vẻ đẹp thẩm mỹ cao."],
            ["name" => "Xinhan Spirit Beast L19 (chính hãng)", "number" => 153, "price" => 350000, "like" => 3591, "image" => "dochoi/211.jpg", "description" => "Xinhan Spirit Beast L19 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam 
Xinhan Spirit Beast L19 có thể gắn cho nhiều loại xe."],
            ["name" => "Đèn led 2 tầng cho Sirius 2019 chính hãng ZHI.PAT", "number" => 125, "price" => 1080000, "like" => 205, "image" => "dochoi/212.JPG", "description" => "Đèn led 2 tầng cho Sirius 2019 chính hãng ZHI.PAT là món phụ tùng thay thế hiện đại cho xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. 
Đèn Led 2 tầng cho Sirius 2019 với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. 
Đèn led 2 tầng ZHI.PAT cho xe Yamaha Sirius có 2 màu trắng và đen, được bảo hành 12 tháng chính hãng."],
            ["name" => "Bóng đèn stop led nhấp nháy", "number" => 359, "price" => 75000, "like" => 357, "image" => "dochoi/213.jpg", "description" => "Bóng đèn stop led nhấp nháy cực sáng, nổi bật khi đi đêm, rất phù hợp, an toàn cho các bạn hay đi phượt trong cung đường tối.  Bóng đèn stop led nhấp nháy có thể gắn được nhiều loại xe dùng đèn stop dây tóc."],
            ["name" => "Chống đổ sau CNC kiểu Rizoma", "number" => 568, "price" => 120000, "like" => 6962, "image" => "dochoi/214.png", "description" => "Chống đổ sau CNC kiểu dáng như những bộ gác chân Rizoma dành cho các loại xe, 1 sản phẩm bảo vệ cực tốt dành cho xe của bạn khỏi bị thiệt hại nặng sau khi va quẹt, té ngã. Ngoài ra có tác dụng làm đồ gác chân cho đỡ mỏi khi đi đường xa  Chống đổ sau CNC có thể gắn được hầu hết tất cả các dòng xe."],
            ["name" => "Móc treo đồ Titan", "number" => 324, "price" => 40000, "like" => 7804, "image" => "dochoi/215.jpg", "description" => "Móc treo đồ Titan dành cho tất cả các loại xe, tiện dụng, nhỏ gọn nhưng móc treo vô cùng chắc chắn."],
            ["name" => "Kính chiếu hậu RCB MR002 chính hãng", "number" => 859, "price" => 500000, "like" => 4196, "image" => "dochoi/216.jpg", "description" => "Kính chiếu hậu RCB MR 002 với thiết kế hoàn toàn mới, mặt kính đạt chuẩn rất dễ dàng quan sát xe phía sau, mặt gương chống đọng nước khá hiệu quả, ngoài ra với chất liệu nhôm CNC nên kính có tính thẩm mỹ khá cao, vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế cực hot.  Kính chiếu hậu Racingboy gắn được tất cả các loại xe.  Kính chiếu hậu RCB là hàng chính hãng Racing Boy."],
            ["name" => "Đèn Led 2 Tầng Exciter 150 Phiên bản mới Sporty 2019", "number" => 613, "price" => 1400000, "like" => 2445, "image" => "dochoi/217.jpg", "description" => "Đèn Led 2 Tầng Exciter 150 - Phiên bản mới: Sporty 2019 chính hãng Zhi.Pat được thiết kế chóa đèn, bóng led hướng xuống, ánh sáng được gom và tập trung hơn so với cũ. Và đặc biệt, anh sáng leb pha thêm ánh sáng vàng tăng thêm “ĐỘ BÁM ĐƯỜNG MẠNH” để phù hợp đi trên những cung đường tối, mưa, sương mù,… mà vẫn có thể nhìn rõ từ xa, độ sáng cũng gấp hơn 3 lần so với đèn zin. 
Ưu điểm của hệ thống đèn led 2 tầng mẫu mới này là siêu tiết kiệm điện năng, với chế độ cos chỉ tiêu hao 11w so với bản cũ là 13.8w. Và khi thêm passing là 22w so với bản cũ là 27,5w. 
Đèn LED 2 tầng Exciter 150 - phiên bản mới Sporty 2019 không những làm cho xe của bạn bắt kịp xu hướng mới mà còn hỗ trợ tốt ánh sáng khi đi vào ban đêm, vừa tăng cường độ sáng nhưng không gây chói mắt người đối diện, vừa bền bỉ và tiết kiệm điện năng hơn cả choá đèn zin, thật sự mà nói đây là một người bạn đồng hành lý tưởng dành cho những anh em. 
SP Sporty ver 2019 hiện có 2 màu: Chóa bạc như zin hoặc chóa đen khói cực ngầu. Gắn vào Exciter 150 như zin mà không cần chế cháo. Sản phẩm được bảo hành chính hãng ZHI.PAT 1 đổi 1 miễn phí về lỗi kỹ thuật trong thời gian 12 tháng"],
            ["name" => "Xinhan Spirit Beast L17 (chính hãng)", "number" => 272, "price" => 350000, "like" => 607, "image" => "dochoi/218.jpg", "description" => "Xinhan Spirit Beast L17 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe, với mặt trước là xinhan vàng truyền thống, mặt sau led xanh hình mũi tên khá ấn tượng. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam 
Xinhan Spirit Beast L17 có thể gắn cho nhiều loại xe."],
            ["name" => "Bao tay RCB cao su chính hãng", "number" => 776, "price" => 110000, "like" => 5844, "image" => "dochoi/219.jpg", "description" => "Bao tay RCB cao su chính hãng hoàn toàn mới, thiết khá đẹp, nhìn đơn giản nhưng tinh tế, tay cầm cực êm, an toàn khi vận hành.  Bao tay RCB là hàng chính hãng của Racing Boy, gắn được tất cả loại xe trên thị trường."],
            ["name" => "Bảng tên xe Titan loại dày cao cấp cho Click, Winner", "number" => 280, "price" => 84000, "like" => 8145, "image" => "dochoi/220.jpg", "description" => "Mã SP: 070369 cho Click  Mã SP: 070372 cho Winner  Bảng tên xe Titan loại dày cao cấp dành cho Click, Winner giúp xe trở nên độc đáo, lạ mắt hơn, cá tính hơn.  Bảng tên làm bằng Titan loại dày khá chắc chắn."],
            ["name" => "Cảng sau Givi dành cho Honda AB", "number" => 742, "price" => 190000, "like" => 3427, "image" => "dochoi/221.jpg", "description" => "Cảng sau Givi dành cho Honda AB, khá thích hợp cho các chuyến đi xa, các bạn mê phượt dùng baga sau Honda AB để cố định đồ, balo, dụng cụ phượt ...  Cảng sau Givi gắn vừa cho Honda Air Blade."],
            ["name" => "Móc treo đồ CNC Shark Power dành cho Click, Vario, SH", "number" => 673, "price" => 300000, "like" => 1295, "image" => "dochoi/222.jpg", "description" => "Móc treo đồ CNC Shark Power loại xịn dành cho Click, Vario, SH (có thể gắn nhiều loại xe khác), với thiết kế nhôm CNC cực đẹp, móc chắc chắn, treo đồ cực tốt.  
Móc treo đồ CNC Click, Vario, SH hãng Shark Power có cần gạt che lại tránh trường hợp rớt, bị giựt món đồ treo lên."],
            ["name" => "Đèn led 2 tầng cho LEAD 125 2013-2016 chính hãng ZHI.PAT", "number" => 417, "price" => 1100000, "like" => 7253, "image" => "dochoi/223.jpg", "description" => "Đèn led 2 tầng cho LEAD 125 2013-2016 chính hãng ZHI.PAT thay thế cho đèn theo xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. Ngoài ra còn là món phụ tùng thay thế khi đèn zin bị hư hỏng, cũ, vàng ố. 
Đèn Led 2 tầng cho LEAD 125  với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. 
Đèn led 2 tầng ZHI.PAT cho Honda Lead 125 2013-2016 có 2 màu: đen, trắng và được bảo hành 12 tháng chính hãng."],
            ["name" => "Đèn led 2 tầng cho Vision 2014 - 2020 chính hãng ZHI.PAT", "number" => 389, "price" => 1100000, "like" => 7773, "image" => "dochoi/224.jpg", "description" => "Đèn led 2 tầng cho Vision 2014 - 2020 chính hãng ZHI.PAT là món phụ tùng thay thế hiện đại cho xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. 
Đèn Led 2 tầng Vision 2014 - 2020 với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. 
Đèn led 2 tầng ZHI.PAT cho xe Honda Vision 2014 - 2020 có 2 màu trắng và đen, được bảo hành 12 tháng chính hãng."],
            ["name" => "Cần số 2 chiều cho Exciter 150", "number" => 269, "price" => 90000, "like" => 423, "image" => "dochoi/225.jpg", "description" => "Cần số 2 chiều dành cho xe Exciter 150, mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng."],
            ["name" => "Mắt mèo phuộc trước hàng chính hãng ZHI.PAT", "number" => 615, "price" => 200000, "like" => 4275, "image" => "dochoi/226.jpg", "description" => "Mắt mèo phản quang gắn phuộc trước, món phù tùng được trang bị trên các dòng xe ở Châu Âu, giúp nhận diện xe rõ hơn vào ban đêm và tất nhiên nhìn xe cũng đẹp ra hẳn.  Mắt mèo phuộc trước có thể gắn được trên tất cả các loại xe, và có 3 màu: vàng, trắng và đỏ."],
            ["name" => "Đèn led 2 tầng cho LEAD 2017-2018 chính hãng ZHI.PAT", "number" => 191, "price" => 1200000, "like" => 522, "image" => "dochoi/227.jpg", "description" => "Đèn led 2 tầng cho LEAD 2017 - 2019 chính hãng ZHI.PAT thay thế cho đèn theo xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. 
Đèn Led 2 tầng cho LEAD 2017,  LEAD 2018 với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. 
Đèn led 2 tầng ZHI.PAT cho Honda Lead 2017 - 2019  được bảo hành 12 tháng chính hãng."],
            ["name" => "Móc treo đồ đa năng ZHIPAT", "number" => 649, "price" => 60000, "like" => 5752, "image" => "dochoi/228.jpg", "description" => "Móc treo đồ đa năng kết hợp đế đựng bình nước chính hãng Zhi.Pat. Gắn như zin rất dễ dàng, đẹp hơn, tiện dụng hơn. 
Móc treo đồ đa năng gắn được các loại xe: SH, Dylan, PS, SH Mode, Lead mới...."],
            ["name" => "Đèn Led 2 tầng ZHIPAT cho Wave A, Wave S, Future X", "number" => 777, "price" => 1030000, "like" => 6366, "image" => "dochoi/229.jpg", "description" => "Đèn led ZHI.PAT W110 – Phiên bản đèn led 2 tầng mới nhất dành các dòng xe: Wave Alpha/S/RS 2008 - 2009/Future X 2010 - 2011. 
Đèn led 2 tầng ZHI.PAT W110 sử dụng điện áp DC 9 - 20V. Công suất tiêu thụ chế độ cos: 9W- pha 18W.  
Có 5 phiên bản màu: Tím IP14 mới, Bạc, Đen Khói, Cam và Xanh ngọc lục bảo. 
Chế độ bảo hành 12 tháng chính hãng ZHIPAT."],
            ["name" => "Đèn pha led 2 tầng Exciter 135 (2011 - 2015) chính hãng Zhipat", "number" => 899, "price" => 1300000, "like" => 3124, "image" => "dochoi/230.JPG", "description" => "Đèn pha led 2 tầng đã được gắn vừa khít lên chiếc Exciter 135 với thiết kê tối ưu cho ánh sáng LED & tiết kiệm điện tiêu thụ nên người dùng không cần chỉnh sửa, các vị trí chân ốc đều chuẩn xác 100% đảm bảo độ ổn định của chóa đèn trên xe ở mọi địa hình, chân đèn 3 chân chỉ cần cắm jack zin vào là xong. Cảm giác ban đầu nhìn vào Led 2 tầng cho Ex135, bạn sẽ thấy ngay chiếc xe đã có 1 diện mạo mới hiện đại hơn, đẹp hơn nhiều so với chóa đèn nguyên bản. 
Ưu điểm của hệ thống đèn led 2 tầng Exciter 135 trước tiên là lắp ráp nhanh chóng dễ dàng, không cần thay đổi dàn điện cũng như dàn áo xe, ngoài ra nó rất tiết kiệm điện năng, với chế độ cos chỉ tiêu hao 9w và pha là 18w, khi đó cả 2 tầng đều sáng hết, mỗi tầng là 3 bóng led. Đồng thời không tỏa nhiệt nhiều như đèn halogen nguyên bản đảm bảo độ bền bỉ sáng đẹp theo thời gian, không làm ố vàng chóa gây mất thẩm mỹ.  
Đèn Led 2 tầng ZHIPAT cho Exciter 135 (2011 - 2015) được bảo hành chính hãng 12 tháng."],
            ["name" => "Kính chắn gió SH300i 2017", "number" => 693, "price" => 450000, "like" => 5841, "image" => "dochoi/231.jpg", "description" => "Kính chắn gió cho Honda SH300i 2017, được thiết kế khác tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. 
Kính chắn gió dành cho Honda SH300i 2017 gắn vừa khít mà không phải chế."],
            ["name" => "Đĩa thắng RCB (chính hãng) sau cho Honda Winner", "number" => 160, "price" => 320000, "like" => 6963, "image" => "dochoi/232.jpg", "description" => "Đĩa thắng Racing Boy chính hãng sau dành cho Honda Winner, thiết kế dạng bông vô cùng ấn tượng, chất liệu khá bền so với hàng chợ. Vừa là món phụ tùng thay thế vừa là món đồ trang trí khá tuyệt. 
Đĩa thắng Racing Boy gắn vừa cho Honda Winner 150, Winner X size 220mm."],
            ["name" => "Đĩa thắng RCB (chính hãng) trước cho Honda Winner", "number" => 848, "price" => 400000, "like" => 5750, "image" => "dochoi/233.jpg", "description" => "Đĩa thắng Racing Boy chính hãng trước dành cho Honda Winner, thiết kế dạng bông vô cùng ấn tượng, chất liệu khá bền so với hàng chợ. Vừa là món phụ tùng thay thế vừa là món đồ trang trí khá tuyệt. 
Đĩa thắng Racing Boy gắn vừa cho Honda Winner 150, Winner X size 256mm."],
            ["name" => "Đèn Led 2 tầng ZHI.PAT dành cho xe SHVN (2012 - 2016)", "number" => 741, "price" => 1400000, "like" => 2068, "image" => "dochoi/234.jpg", "description" => "Đèn led 2 tầng ZHI.PAT dành cho mẫu SHVN đời 2012 đến 2016 được gắn hoàn toàn như đèn zin không cần chế cháo, chỉ tiêu hao 17w (passing thì thêm 8,5w) tiết kiệm điện không gây nóng và ố vàng chóa đồng thời không bị cháy mạch khi passing khác với các dòng xe khác như Airblade 125, PCX, Winner 150 nếu chế passing không đúng cách sẽ bị hư hỏng đèn.  
Đèn led 2 tầng SH Việt Nam 2012 - 2016 cho ánh sáng trắng có độ gom cao dễ quan sát trong đêm. 
Hệ thống đèn pha Led 2 Tầng ZHI.PAT siêu sáng gắn lên bao ngầu như SH2017. 
Đèn pha led 2 tầng cho SHVN (2012 - 2016) chính hãng Zhi.Pat được bảo hành 1 đổi 1 miễn phí 1 năm."],
            ["name" => "Đèn Led 2 tầng ZHI.PAT dành cho xe SH Ý (20​10 - 2012)", "number" => 631, "price" => 1500000, "like" => 8931, "image" => "dochoi/235.jpg", "description" => "Đèn Led 2 tầng ZHI.PAT cho SH Ý (20​10 - 2012) được gắn hoàn toàn như đèn zin không cần chế cháo, chỉ tiêu hao 17w (passing thì thêm 8,5w) tiết kiệm điện không gây nóng, ố vàng.  Đèn led 2 tầng SH Ý cho ánh sáng trắng có độ gom cao dễ quan sát trong đêm.  Hệ thống Đèn Led 2 tầng ZHI.PAT cho SH Ý (20​10 - 2012) với chế độ bảo hành 1 đổi 1 miễn phí 1 năm. Với 2 màu đen khói, trắng bạc."],
            ["name" => "Baga cho Air Blade 125/150", "number" => 552, "price" => 150000, "like" => 2119, "image" => "dochoi/236.jpg", "description" => "Baga cho Air Blade 125/150 với thiết kế khá đẹp mắt, để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy."],
            ["name" => "Đèn Led 2 tầng cho Exciter 150 ZHIPAT", "number" => 468, "price" => 1350000, "like" => 29, "image" => "dochoi/237.png", "description" => "Đèn pha LED 2 tầng ZHI.PAT tương tự như đèn pha zin của Exciter 150. Nó chỉ khác nhau ở phần bên trong, thay vì sử dụng bóng halogen thì ZhiPat sử dụng đèn LED được thiết kế tinh xảo, bo viền các góc cạnh cực đẹp. Led 2 tầng Ex 150 sử dụng công nghệ Ledlighting siêu sáng - siêu bền và tiết kiệm điện không gây nóng và ố vàng chóa theo thời gian. 
Hệ thống đèn led 2 tầng Exciter 150 cao cấp - ZHI.PAT có ánh sáng trắng được pha thêm ánh sáng vàng bởi theo 1 công thức đặt biệt, giúp ánh sáng Bám đường mạnh vào ban đêm. Đặc biệt là thỏa nhu cầu đi đêm của những phượt thủ bay đường đèo, đường xa đang ức chế với bộ đèn hiện tại trên Exciter 150. 
Đèn Led 2 tầng cho Exciter 150 chính hãng Zhi.Pat có 4 màu: Chóa bạc, Chóa đen, Chóa Xanh, Chóa đỏ. SP được bảo hành 1 đổi 1 trong vòng 12 tháng."],
            ["name" => "Kính chắn gió Zhi.Pat cho SHVN 2017 - 2019", "number" => 726, "price" => 380000, "like" => 5881, "image" => "dochoi/238.jpg", "description" => "Kính chắn gió Zhi.Pat cho SH 125/150i 2017 - 2019, được thiết kế khác tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều.  Kính chắn gió Zhi.pat cho SH 2017 - 2019 gắn vừa khít mà không phải chế."],
            ["name" => "Lông đền Xinhan", "number" => 792, "price" => 90000, "like" => 6854, "image" => "dochoi/239.jpg", "description" => "Lông đền xinhan CNC cao cấp, dùng để che lỗ xinhan khi thay thế đèn zin bằng xinhan độ các kiểu. Hoặc dùng để làm vật trang trí khác  Lông đền xinhan gắn được cho tất cả các loại xe"],
            ["name" => "Đèn Demi Led siêu sáng", "number" => 239, "price" => 120000, "like" => 7761, "image" => "dochoi/240.jpg", "description" => "Đèn Demi led siêu sáng, siêu bền, an toàn cho các  bạn hay đi xa.  Đèn led Demi siêu sáng gắn cho tất cả các loại xe máy, có nhiều màu phù hợp cho từng loại xe."],
            ["name" => "Đĩa thắng RCB (chính hãng) sau cho Exciter 150", "number" => 549, "price" => 300000, "like" => 4118, "image" => "dochoi/241.jpg", "description" => "Đĩa thắng Racing Boy chính hãng sau dành cho Exciter 150, thiết kế dạng bông vô cùng ấn tượng, chất liệu khá bền so với hàng chợ. Vừa là món phụ tùng thay thế vừa là món đồ trang trí khá tuyệt. 
Đĩa thắng Racing Boy gắn vừa cho Exciter 150 size 203mm."],
            ["name" => "Đĩa thắng RCB (chính hãng) trước cho Exciter 150", "number" => 592, "price" => 400000, "like" => 4110, "image" => "dochoi/242.jpg", "description" => "Đĩa thắng Racing Boy chính hãng trước dành cho Exciter 150, thiết kế dạng bông vô cùng ấn tượng, chất liệu khá bền, giá cả hợp lý. Vừa là món phụ tùng thay thế vừa là món đồ trang trí khá tuyệt. 
Đĩa thắng Racing Boy gắn vừa cho Exciter 150 size 245mm."],
            ["name" => "Nắp chụp ốc che lỗ chân kính CNC", "number" => 498, "price" => 40000, "like" => 2317, "image" => "dochoi/243.jpg", "description" => "Nắp chụp ốc che lỗ chân kính C, mẫu mã mới cực độc đáo, món đồ tráng trí cực tốt để che khuyết điểm khi xe không gắn kính.  Ốc CNC che lỗ kính gắn vừa tất cả các loại xe"],
            ["name" => "Cảng sau Givi dành cho Honda Winner 150", "number" => 244, "price" => 190000, "like" => 7548, "image" => "dochoi/244.JPG", "description" => "Cảng sau Givi dành cho Winner 150, khá thích hợp cho các chuyến đi xa, các bạn mê phượt dùng baga sau Winner 150 để cố định đồ, balo, dụng cụ phượt ... 
Cảng sau Givi gắn vừa cho Winner 150."],
            ["name" => "Cảng sau Givi dành cho Exciter 150", "number" => 198, "price" => 190000, "like" => 5793, "image" => "dochoi/245.JPG", "description" => "Cảng sau Givi dành cho Exciter 150, khá thích hợp cho các chuyến đi xa 
Các bạn mê phượt dùng baga sau Exciter 150 để cố định đồ, balo, dụng cụ phượt... 
Cảng sau Givi gắn vừa cho Exciter 150."],
            ["name" => "Kính Rizoma 5 cạnh", "number" => 454, "price" => 220000, "like" => 9490, "image" => "dochoi/246.png", "description" => "Kính Rizoma 5 cạnh với thiết kế góc cạnh trông rất thể thao, mạnh mẽ cùng chất liệu CNC cực kì sắc xảo.  Kính Rizoma 5 cạnh có thể gắn vừa tất cả các loại xe."],
            ["name" => "Cần số 2 chiều cho Honda Winner 150", "number" => 553, "price" => 90000, "like" => 4251, "image" => "dochoi/247.JPG", "description" => "Cần số 2 chiều dành cho xe Honda Winner 150, mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng."],
            ["name" => "Baga Winner 150 10ly", "number" => 803, "price" => 200000, "like" => 5830, "image" => "dochoi/248.JPG", "description" => "Baga cho Winner 150 cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trày xe."],
            ["name" => "Kính gù CRG", "number" => 558, "price" => 500000, "like" => 3392, "image" => "dochoi/249.jpg", "description" => "Kính gù CRG hàng loại 1, làm bằng nhôm sắc nét, không phải dạng nhựa cứng giá rẻ trên thị trường, có kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau.  Kính gù CRG có thể gắn đước tất cả các loại xe, đặc biết gắn đẹp khi lên xe PKL, xe độ Cafe Racer, Tracker..."],
            ["name" => "Gù trung Rizoma", "number" => 316, "price" => 100000, "like" => 8266, "image" => "dochoi/250.jpg", "description" => "Gù trung Rizoma hàng loại 1 cực chất, thiết kế khá vừa vặn.  Gù trung Rizoma có thể gắn vừa tất cả các loại xe."],
            ["name" => "Gù dẹp 2 màu", "number" => 498, "price" => 120000, "like" => 7080, "image" => "dochoi/251.JPG", "description" => "Gù dẹp 2 màu hoàn toàn mới, thiết kế khá độc đáo, món đồ trang trí xe tuyệt đẹp.  Gù dẹp 2 màu có thể gắn tất cả các loại xe"],
            ["name" => "Kính Rizoma 744", "number" => 216, "price" => 390000, "like" => 9176, "image" => "dochoi/252.jpg", "description" => "Kính Rizoma 744 với thiết kế nhỏ gọn nhưng vô cùng độc đáo và đúng chuẩn khi tham gia giao thông.  Kính Rizoma 744 có thể gắn được tất cả các loại xe trên thị trường."],
            ["name" => "Móc treo đồ Biker", "number" => 868, "price" => 120000, "like" => 5625, "image" => "dochoi/253.JPG", "description" => "Móc treo đồ Biker có thể gắn tất cả các loại xe. 
Thiết kế nhôm CNC cực đẹp, thẩm mỹ cao.vừa treo đồ vừa là món phụ tùng trang trí. 
Có ốc tăng chỉnh vị trí của móc cho phù hợp với từng loại xe."],
            ["name" => "Xinhan Multi", "number" => 175, "price" => 120000, "like" => 9633, "image" => "dochoi/254.JPG", "description" => "- Xinhan Multi là loại xinhan được ưa chuộng nhất thị trường.  - Chất liệu thủy tinh, kim loại cao cấp, bền đẹp.  - Đèn led sáng rất dễ quan sát khi lưu thông."],
            ["name" => "Baga Exciter 150 10 ly", "number" => 439, "price" => 200000, "like" => 1784, "image" => "dochoi/255.jpg", "description" => "Baga Exciter 150 dày 10 ly được làm bằng vật liệu cao cấp, sở hữu màu đen nhám trùng với miếng ốp bụng màu đen của xe trông xe rất thẩm mỹ và gọn gàng."],
            ["name" => "Xinhan nút áo", "number" => 483, "price" => 90000, "like" => 576, "image" => "dochoi/256.jpg", "description" => "Xi nhan nút áo  độ thời trang cho xe máy, đặc biệt là lên Exciter 150 rất gọn gàng, cá tính và đẹp mắt."],
            ["name" => "Kính chiếu hậu Rizoma Elisse", "number" => 157, "price" => 300000, "like" => 777, "image" => "dochoi/257.jpg", "description" => "- Kính chiếu hậu Rizoma Elisse là loại kính được ưa chuộng nhất thị trường.  - Kiếng Rizoma Elisse chất liệu thủy tinh, kim loại cao cấp, bền đẹp.  - Góc quan sát rộng cho bạn tầm nhìn tốt."],
            ["name" => "Gù dẹp Rizoma", "number" => 300, "price" => 66000, "like" => 3591, "image" => "dochoi/258.jpg", "description" => "Thiết kế đơn giản, gọn gàng mà ấn tượng mang đậm phong cách Rizoma, có thể gắn gù tay lái hoặc làm ốc trang trí cho mọi loại xe"],
            ["name" => "Gù xéo Rizoma", "number" => 759, "price" => 0, "like" => 5325, "image" => "dochoi/259.jpg", "description" => "Mã: 070015   - Gù tay lái gọn nhẹ, thẩm mỹ cao, sản phẩm được rất nhiều biker ưa chuộng.  - Gắn được cho nhiều loại xe."],
            ["name" => "Dây dầu Thái Morin sau 22 inch", "number" => 199, "price" => 185000, "like" => 8289, "image" => "dochoi/260.jpg", "description" => "Dây dầu kiểng giúp xe bạn thật nổi bật và bền chắc hơn so với dây dầu nguyên bản, có khả năng chống cắt dây trộm heo dầu. 
Dây dầu Thái Morin sau 22 inch khoảng 558mm."],
            ["name" => "Ốp chắn gió YAMAHA Exciter 150", "number" => 193, "price" => 65000, "like" => 4044, "image" => "dochoi/261.jpg", "description" => "Ốp chắn gió độ giúp cho chiếc YAMAHA Exciter thêm cá tính. 
Có thể gắn Exciter 150, Exciter 135 và độ qua nhiều loại xe khác."],
            ["name" => "Tay thắng Carbon cho Honda Air Blade", "number" => 189, "price" => 0, "like" => 6040, "image" => "dochoi/262.jpg", "description" => "Mã: 970136  
Tay thắng Carbon cho Honda Air Blade các đời (trừ 2020 ABS), thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Honda Air Blade có bản lề gắn như zin không chế cháo."],
            ["name" => "Dây dầu Thái Morin trước 36 inch", "number" => 658, "price" => 0, "like" => 8963, "image" => "dochoi/263.jpg", "description" => "Mã: 070022 
Dây dầu kiểng giúp xe bạn thật nổi bật và bền chắc hơn so với dây dầu nguyên bản, có khả năng chống cắt dây trộm heo dầu. 
Dây dầu Thái Morin trước 36 inch khoảng 915mm."],
            ["name" => "Bao tay Barracuda chính hãng mẫu mới gai kim cương", "number" => 679, "price" => 0, "like" => 6738, "image" => "dochoi/264.jpg", "description" => "Mã: 070848   Bao tay Barracuda chính hãng mẫu mới gai kim cương  xịn xò, thiết kế khá tinh tế, êm tay nguyên khối bằng cao su.  Bao tay Barracuda chính hãng gai kim cương có thể gắn được cho tất cả các dòng xe.  Bao tay Barracuda thương hiệu Italy được nhập chính hãng từ Taiwan."],
            ["name" => "Bao tay Progrip 717 chính hãng", "number" => 284, "price" => 0, "like" => 5436, "image" => "dochoi/265.jpg", "description" => "Mã: 070335  Bao tay Progrip 717 hàng chính hãng, thiết kế Progrip lúc nào cũng đậm chất Biker, gai bao tay được làm rất tinh tế, chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều.  bao tay Progrip 717 hàng chính hãng made in Italy.  Bao tay Progrip 717 gắn được tất cả các loại xe."],
            ["name" => "Cốt bánh sau inox Salaya cho Suzuki Raider", "number" => 112, "price" => 0, "like" => 9596, "image" => "dochoi/266.jpg", "description" => "Cốt bánh sau inox Salaya dành cho Suzuki Raider, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. 
Cốt bánh sau inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."],
            ["name" => "Kính H2C titan cho Suzuki và Honda", "number" => 333, "price" => 0, "like" => 1972, "image" => "dochoi/267.jpg", "description" => "Mã: 070736 
Kính H2C titan dành cho Suzuki và Honda, kính được gia công lấy thương hiệu H2C, thân bằng inox được thổi lên màu titan, sản phẩm mới toanh trên thị trường, có thiết kế như các dòng xe Suzuki và Honda gắn chung, đang rất được nhiều Biker ưa chuộng bởi kiểu dáng đẹp cũng như giá thành rẻ."],
            ["name" => "Kính H2C inox cho Yamaha", "number" => 453, "price" => 0, "like" => 7966, "image" => "dochoi/268.jpg", "description" => "Mã: 070735  Kính H2C inox dành cho Yamaha, kính được gia công lấy thương hiệu H2C, sản phẩm mới toanh trên thị trường, có thiết kế như các dòng xe Yamaha gắn chung, đang rất được nhiều Biker ưa chuộng bởi kiểu dáng đẹp cũng như giá thành rẻ."],
            ["name" => "Kính H2C titan cho Yamaha", "number" => 169, "price" => 0, "like" => 5567, "image" => "dochoi/269.jpg", "description" => "Mã: 070737   Kính H2C titan dành cho Yamaha, kính được gia công lấy thương hiệu H2C, thân kính bằng titan thổi lên màu titan, sản phẩm mới toanh trên thị trường, có thiết kế như các dòng xe Yamaha gắn chung, đang rất được nhiều Biker ưa chuộng bởi kiểu dáng đẹp cũng như giá thành rẻ."],
            ["name" => "Bao tay Barracuda hàng chính hãng Việt Nam", "number" => 475, "price" => 0, "like" => 3345, "image" => "dochoi/270.jpg", "description" => "Bao tay Barracuda hàng chính hãng Việt Nam cực xịn, thiết kế khá tinh tế, êm tay nguyên khối bằng cao su, loại mới sau này có khá năng chống co giãn cực tốt  Bao tay Barracuda chính hãng Việt Nam có thể gắn được cho tất cả các dòng xe.  Bao tay Barracuda chính hãng Việt Nam có giá thành tốt hơn loại chính hãng nhập Taiwan lúc trước."],
            ["name" => "Chân chống nghiêng RCB chính hãng", "number" => 307, "price" => 0, "like" => 5965, "image" => "dochoi/271.jpg", "description" => "Chân chống nghiêng RCB gồm 2 loại size 185mm và 210mm, có thể gắn cho tất cả các loại xe. Thiết kế nhôm CNC hàng cực đẹp, chống mục sét do các chân chống bình thường hay gặp, tăng độ thẩm mỹ cao. Ngoài ra đề chân chống có lốp cao su tốt chống trơn trượt và trầy nền nhà khá tốt. 
Chân chống Nghiêng RCB là hàng chính hãng của Racing Boy."],
            ["name" => "Bao tay Domino (chính hãng) mẫu mới", "number" => 855, "price" => 0, "like" => 561, "image" => "dochoi/272.jpg", "description" => "Mã: 070479  Bao tay Domino hàng chính hãng Italy với thiết kế mới, cao su êm ái và nổi bật hơn bao tay nguyên bản. Thương hiệu Domino chuyên về bao tay thì đã được rất nhiều khách hàng đánh giá cao về chất lượng.  Bao tay Domino gắn được cho tất cả các loại xe."],
            ["name" => "Gù inox Salaya 3 cạnh", "number" => 814, "price" => 0, "like" => 8398, "image" => "dochoi/273.jpg", "description" => "Gù inox Salaya 3 cạnh, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù inox Salaya thiết kế dài trung bình, gọn gàng vào bao tay xe. 
Gù inox Salaya 3 cạnh có thể gắn tất cả loại xe máy."],
            ["name" => "Gù dẹp inox Salaya 3 cạnh", "number" => 431, "price" => 0, "like" => 7906, "image" => "dochoi/274.jpg", "description" => "Mã: 070752 
Gù dẹp inox Salaya 3 cạnh, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù dẹp inox Salaya 3 cạnh lên xe nhìn rất đẹp, thiết kế ngắn, gọn gàng vào bao tay xe. 
Gù dẹp inox Salaya 3 cạnh có thể gắn tất cả loại xe máy."],
            ["name" => "Bao tay Barracuda chính hãng", "number" => 678, "price" => 0, "like" => 2343, "image" => "dochoi/275.jpg", "description" => "Bao tay Barracuda hàng chính hãng cực xịn, thiết kế khá tinh tế, êm tay nguyên khối bằng cao su.  Bao tay Barracuda có thể gắn được cho tất cả các dòng xe.  Bao tay Barracuda được nhập chính hãng từ Taiwan."],
            ["name" => "Bao tay Daytona Octa chính hãng", "number" => 546, "price" => 0, "like" => 1593, "image" => "dochoi/276.png", "description" => "Bao tay Daytona Octa hàng chính hãng, thiết kế đơn giản có logo Daytona cùng các đường sóng dọc chia bao tay thành nhiều khối nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt, nhất là cho các bạn có mồ hôi tay nhiều. 
Bao tay Daytona Octa gắn được tất cả các loại xe, được sản xuất tại Nhật, thương hiệu Daytona rất nổi tiếng trong việc sản xuất phụ tùng xe máy."],
            ["name" => "Ốp đầu cho Click, Vario 2018", "number" => 136, "price" => 0, "like" => 727, "image" => "dochoi/277.jpg", "description" => "Ốp đầu dành cho Click/Vario 2018, làm cho xe ngầu hơn, món phụ tùng được đánh giá khá hot trên thị trường."],
            ["name" => "Tay thắng Carbon cho Vespa", "number" => 558, "price" => 0, "like" => 3702, "image" => "dochoi/278.png", "description" => "Mã: 970147  
Tay thắng Carbon cho Vespa mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. 
Tay thắng Carbon cho Vespa có bản lề gắn như zin không chế cháo."],
            ["name" => "Bộ ốc nồi Salaya inox cho Honda Winner X", "number" => 668, "price" => 0, "like" => 6125, "image" => "dochoi/279.jpg", "description" => "Bộ ốc nồi Salaya inox cho Honda Winner X full gồm 24 con gắn vừa khít cho Honda Winner, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế mẫu mới rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Winner còn có tính thẩm mỹ rất đẹp khi gắn lên xe."],
            ["name" => "Xinhan Led mới dành cho Vario, CLick, Winner X", "number" => 245, "price" => 120000, "like" => 3415, "image" => "dochoi/280.jpg", "description" => "Xinhan led mẫu mới, gọn đẹp, giá thành phải chăng, đặc biệt gắn vừa khít cho Vario, Click 2018, không lòi lỗ bắt xinhan zin đồng thời khắc phục nhược điểm xinhan đưa ra quá xa, giúp đuôi xe khá gọn đẹp.  Xi nhan mai rùa có thể gắn được tất cả loại xe khác như Winner X, R3..."],
            ["name" => "Bao tay Daytona Base (chính hãng)", "number" => 230, "price" => 0, "like" => 3282, "image" => "dochoi/281.jpg", "description" => "Mã: 070521   Bao tay Daytona Base hàng chính hãng, thiết kế đơn giản có logo Daytona cùng các chấm nhỏ tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt, nhất là cho các bạn có mồ hôi tay nhiều.  Bao tay Daytona Base gắn được tất cả các loại xe, được sản xuất tại Nhật, thương hiệu Daytona rất nổi tiếng trong việc sản xuất phụ tùng xe máy."],
            ["name" => "Bao tay Daytona Arc-1 (chính hãng)", "number" => 516, "price" => 0, "like" => 5621, "image" => "dochoi/282.jpg", "description" => "Bao tay Daytona Arc-1 hàng chính hãng, thiết kế đơn giản có logo Daytona cùng các gân ngang nhẹ nổi bật tạo điểm nhấn trên bao tay, mẫu bao tay cực êm dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt, nhất là cho các bạn có mồ hôi tay nhiều. 
Bao tay Daytona Arc-1 gắn được tất cả các loại xe, được sản xuất tại Nhật, thương hiệu Daytona rất nổi tiếng trong việc sản xuất phụ tùng xe máy."],
            ["name" => "Kính H2C chính hãng mode chân kính", "number" => 597, "price" => 0, "like" => 1407, "image" => "dochoi/283.jpg", "description" => "Mã: 070537   Kính H2C chính hãng làm bằng nhôm sắc nét, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau, đảm bảo an toàn. Kính H2C đã được mode chân lại, nhìn rất thẩm mỹ.  Kính H2C có thể gắn đước tất cả các loại xe 2 bánh. Có 2 màu: Bạc, đen."],
            ["name" => "Bao tay Barracuda chữ màu chính hãng", "number" => 203, "price" => 0, "like" => 5014, "image" => "dochoi/284.jpg", "description" => "Bao tay Barracuda chữ màu, mẫu mới, hàng chính hãng cực xịn, thiết kế mới nổi bật dòng chữ Barracuda khá tinh tế, êm tay nguyên khối bằng cao su.  Bao tay Barracuda chữ màu chính hãng có thể gắn được cho tất cả các dòng xe.  Bao tay Barracuda có 2 màu: xám và đỏ, được nhập chính hãng từ Taiwan."],
            ["name" => "Thùng giữa Givi G10N (chính hãng)", "number" => 812, "price" => 740000, "like" => 3526, "image" => "dochoi/285.png", "description" => "Thùng giữa Givi G10N (chính hãng) có chìa khoá, dễ dàng đựng những vật tư như: áo, nón, áo mưa...khắc phục tình trạng không có cốp dễ đồ ở những dòng xe côn tay thể thao. 
Thùng Givi G10N làm từ chất liệu nhựa PP cực bền, dung tích 10lit.  
Thùng giữa Givi G10N đã bao gồm full pát gắn được nhiều loại xe như: Exciter 135/150, Winner, Axelo, Raider 150, các dòng xe Wave..."],
            ["name" => "Dây dầu Adelin trước 950mm chính hãng", "number" => 762, "price" => 270000, "like" => 8738, "image" => "dochoi/286.jpg", "description" => "Dây dầu Adelin chính hãng  giúp xe bạn thật nổi bật với nhiều màu sắc và bền chắc hơn dây dầu zin nguyên bản, nhiều lõi kim loại bên trong có khả năng chống cắt dây trộm heo dầu. 
Hàng chính hãng Adelin, dây dầu có thể gắn tất cả loại xe đi thắng đĩa. Chiều dài 950mm."],
            ["name" => "Dây dầu Adelin sau 550mm chính hãng", "number" => 763, "price" => 250000, "like" => 6734, "image" => "dochoi/287.jpg", "description" => "Dây dầu Adelin chính hãng  giúp xe bạn thật nổi bật với nhiều màu sắc và bền chắc hơn dây dầu zin nguyên bản, nhiều lõi kim loại bên trong có khả năng chống cắt dây trộm heo dầu. 
Hàng chính hãng Adelin, dây dầu có thể gắn tất cả loại xe đi thắng đĩa sau. Chiều dài 550mm."],
            ["name" => "Kính H2C inox tĩnh điện đen cho Yamaha", "number" => 674, "price" => 0, "like" => 7193, "image" => "dochoi/288.jpg", "description" => "Mã: 070835   Kính H2C inox tĩnh điện màu đen dành cho Yamaha, kính được gia công lấy thương hiệu H2C, sản phẩm mới toanh trên thị trường, có thiết kế như các dòng xe Yamaha gắn chung, đang rất được nhiều Biker ưa chuộng bởi kiểu dáng đẹp cũng như giá thành rẻ."]
        ]);

        Category::where('name', 'phụ tùng')->first()->products()->createMany([
            ["name" => "Phuộc RCB MB2 chính hãng cho SHVN", "number" => 100, "price" => 2320000, "like" => 6765, "image" => "phutung/1.jpg", "description" => "Phuộc RCB MB2 chính hãng bình dầu cho SHVN...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Phuộc Racingboy MB2 có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành  Phuộc sau RCB MB2 cho SHVN là hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng.  Phuộc RCB MB2 cao 380mm gắn được cho SHVN 2012-2020... Phuộc có 3 màu: đỏ, vàng, đen."],
            ["name" => "Phuộc RCB MB2 ty vàng chính hãng cho Wave, Dream, Future", "number" => 161, "price" => 2850000, "like" => 7387, "image" => "phutung/2.jpg", "description" => "Phuộc RCB MB2 ty vàng chính hãng bình dầu cho Wave, Dream, Future, Blade...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung,với ty phuộc được mạ vàng rất độc đáo. Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành  Phuộc RCB MB2 ty vàng hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng.  Phuộc RCB MB2 cao 335mm gắn được cho Wave, Dream, Future, Blade..."],
            ["name" => "Phuộc RCB C Series chính hãng cho Honda Vario, Click", "number" => 380, "price" => 0, "like" => 6146, "image" => "phutung/3.jpg", "description" => "Mã: 070750   - Phuộc RCB C Series cho Vario/Click thiết kế mới vô cùng sắc xảo cùng với loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành.  - Phuộc sau RCB C Series cho Vario/CLick là Hàng chính hãng Racing Boy bảo hành 12 tháng.  - Phuộc RCB C Series chính hãng gắn được cho Honda Vario, Click có màu: vàng và đen...với chiều cao 330mm bằng với phuộc zin."],
            ["name" => "Lọc gió STB chính hãng cho SHVN 2020 - 2023", "number" => 139, "price" => 700000, "like" => 219, "image" => "phutung/4.png", "description" => "Lọc gió STB chính hãng dành cho SHVN đời 2020 - 2023, vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió STB có thể dễ dàng vệ sinh sử dụng lại nhiều lần với tuổi thọ hơn 5 năm  Lọc gió STB là hàng chính hãng sản xuất tại Taiwan.  Lọc gió STB dùng cho SHVN từ 2020 - 2023 gắn như zin không chế cháo."],
            ["name" => "Cao su đùm Honda Winner chính hãng", "number" => 252, "price" => 90000, "like" => 6279, "image" => "phutung/5.png", "description" => "Cao su đùm Honda Winner zin (hay còn gọi là cao su giảm giật nhông sau) gắn cho các đời xe Winner, để thay thế cao su đùm zin lâu ngày bị hao mòn, vỡ nát, giúp xe vận hành êm ái hơn."],
            ["name" => "Cao su đùm Yamaha chính hãng", "number" => 331, "price" => 80000, "like" => 6801, "image" => "phutung/6.png", "description" => "Cao su đùm Yamaha zin (hay còn gọi là cao su giảm giật nhông sau) gắn cho các dòng xe Exciter, Sirius, Jupiter, để thay thế cao su đùm zin lâu ngày bị hao mòn, vỡ nát, giúp xe vận hành êm ái hơn."],
            ["name" => "Sên vàng DID 10 ly 428HD chính hãng 122 mắc", "number" => 887, "price" => 600000, "like" => 5536, "image" => "phutung/7.jpg", "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay.    DID là thương hiệu nổi tiếng trên thế giới, chuyên sản xuất sên dành cho các giải đua xe hàng đầu vì thế chất lượng không thể chê được, sản phẩm cũng đã được nhiều anh em Biker tin dùng để thay để thay thế cho sên hãng rất nhanh bị giản, phải tốn nhiều công sức tăng sên thường xuyên, ngoài ra sên DID vàng còn là món phụ tùng trang trí tuyệt vời.   Sên vàng DID 428HD 122 mắc (10mm) dành cho các loại xe sử dụng sên tải Winner 150, Sonic , Exciter 150, Exciter 135, Axelo 125, Raider/Satria 150, Fz150i, FX 125..."],
            ["name" => "Bố thắng đùm sau VTC chính hãng cho các dòng xe Honda", "number" => 188, "price" => 0, "like" => 3613, "image" => "phutung/8.jpg", "description" => "Bố thắng đùm sau VTC chính hãng cho các dòng xe Honda: Airblade các đời, Lead, SH Mode, Vision, Click/Vario, PCX... luôn an toàn nhờ mặt bố bám cực chắc khi sử dụng.  Bố thắng VTC được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp vì không chứa Amiăng làm tăng tuổi thọ sản phẩm gấp nhiều lần sản phẩm thông thường."],
            ["name" => "Bố thắng đùm sau RCB chính hãng cho các dòng xe Honda", "number" => 484, "price" => 0, "like" => 55, "image" => "phutung/9.jpg", "description" => "Mã: 070439   Bố thắng đùm sau RCB chính hãng cho các dòng xe Honda: Airblade các đời, Lead, SH Mode, Vision, Click/Vario, PCX... luôn an toàn nhờ mặt bố bám cực chắc khi sử dụng.  Bố thắng RCB được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp nhiều lần sản phẩm thông thường."],
            ["name" => "Dây Curoa Michelin cho AB125, Lead125, Click125, SHmode...", "number" => 411, "price" => 392000, "like" => 8491, "image" => "phutung/10.jpg", "description" => "Dây Curoa Michelin cho AB125, Lead125, Click125, SHmode,...  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho SCR, Lead 110", "number" => 687, "price" => 274000, "like" => 8212, "image" => "phutung/11.jpg", "description" => "Dây Curoa Michelin cho SCR, Lead 110.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho Vision 110", "number" => 568, "price" => 274000, "like" => 1924, "image" => "phutung/12.jpg", "description" => "Dây Curoa Michelin cho Vision 110.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho AB 150, Vario 125", "number" => 150, "price" => 594000, "like" => 1953, "image" => "phutung/13.jpg", "description" => "Dây Curoa Michelin cho AB 150, Vario 125.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho Vision 2014 - 2020", "number" => 448, "price" => 298000, "like" => 4716, "image" => "phutung/14.jpg", "description" => "Dây Curoa Michelin cho Vision 2014 - 2020.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho Vision 2021 - 2023", "number" => 159, "price" => 509000, "like" => 827, "image" => "phutung/15.jpg", "description" => "Dây Curoa Michelin cho Vision 2021 - 2023.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho Vario 150", "number" => 875, "price" => 594000, "like" => 92, "image" => "phutung/16.jpg", "description" => "Dây Curoa Michelin cho Vario 150.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho SHVN 2020 - 2023", "number" => 158, "price" => 767000, "like" => 4496, "image" => "phutung/17.jpg", "description" => "Dây Curoa Michelin cho SHVN 125/150 2020 - 2022, SHVN 125/160 đời 2023.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Dây Curoa Michelin cho SHVN 125/150 2013 - 2019", "number" => 429, "price" => 407000, "like" => 3130, "image" => "phutung/18.jpg", "description" => "Dây Curoa Michelin cho SHVN 125/150 2013 - 2019.  Dây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất.  TÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM:  - Nhiệt độ sử dụng: -40 ~ 130 độ C.  - Độ cứng và độ dẻo tốt.  - Độ chống nhão cao, hạn chế mài mòn tốt.  - Chuyển động ổn định, ít tiếng ồn.  - Ít lão hóa, tuổi thọ cao."],
            ["name" => "Nhông Recto 14T chính hãng cho Raider, Satria,...", "number" => 795, "price" => 65000, "like" => 2954, "image" => "phutung/19.jpg", "description" => "Nhông Recto 14T chính hãng dành cho Raider, Satria,... với chất liệu hộp kim siêu bền, vận hành ổn định sẽ giúp cho xe các bạn luôn hoạt động tốt nhất.  Nhông Recto 14T gắn cho xe Raider, Satria,..."],
            ["name" => "Bộ vệ sinh và dầu dưỡng lọc gió STB chính hãng", "number" => 568, "price" => 250000, "like" => 3864, "image" => "phutung/20.png", "description" => "Bộ vệ sinh và dầu dưỡng lọc gió STB chính hãng gồm 2 chai:   - 1 chai tẩy rửa vệ sinh (355ml)  - 1 chai phun xịt dầu phục hồi tấm lọc gió (184g)  Có thể dùng cho tất cả các loại lọc gió lưới vĩnh viễn như: K&N, BMC, DNA, STB..... giúp tẩy rửa lọc gió bẩn và phục hồi lại tính năng lọc gió như ban đầu. Sản phẩm bộ vệ sinh lọc gió STB lợi thế bởi giá thành khá dễ chịu so với nhiều thương hiệu khác.  Bộ vệ sinh và dầu dưỡng lọc gió STB chính hãng, sản xuất tại Taiwan"],
            ["name" => "Lọc gió K&N chính hãng dành cho Honda SH350i", "number" => 339, "price" => 1500000, "like" => 761, "image" => "phutung/21.jpg", "description" => "Lọc gió K&N chính hãng dành riêng cho Honda SH350i, thương hiệu nổi tiếng bậc nhất thế giới về lọc gió. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe.  Lọc gió K&N cho SH350i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ.  Lọc gió K&N SH350i hàng chính hãng  sản xuất tại USA."],
            ["name" => "Sên RK vàng đen 428SB - 132L chính hãng", "number" => 175, "price" => 600000, "like" => 5782, "image" => "phutung/22.jpg", "description" => "Sên RK vàng đen 428SB - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản.  Sên RK vàng đen 428SB - 132L là loại sên 9ly không phốt, dài 132 mắc, sên có lớp mạ vàng phối đen 2 màu rất đẹp, độc lạ, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường.  Sên RK vàng đen 428SB - 132L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số."],
            ["name" => "Sên RK vàng đen 428SB - 124L chính hãng", "number" => 779, "price" => 550000, "like" => 4846, "image" => "phutung/23.png", "description" => "Sên RK vàng đen 428SB - 124L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản.  Sên RK vàng đen 428SB - 124L là loại sên 9ly không phốt, dài 124 mắc, sên có lớp mạ vàng phối đen 2 màu rất đẹp, độc lạ, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường.  Sên RK vàng đen 428SB - 124L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số."],
            ["name" => "Bố thắng đĩa sau Elig Satria, Raider", "number" => 824, "price" => 100000, "like" => 7477, "image" => "phutung/24.png", "description" => "Bố thắng đĩa sau Elig cho Raider, Satria luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường.  Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đĩa trước Elig Satria, Raider", "number" => 640, "price" => 90000, "like" => 664, "image" => "phutung/25.png", "description" => "Bố thắng đĩa trước Elig cho Raider, Satria luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường.  Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Lọc gió DNA chính hãng dành cho Honda SH350i", "number" => 359, "price" => 2250000, "like" => 9544, "image" => "phutung/26.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Honda SH350i, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe.  Lọc gió DNA cho SH350i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ.  Lọc gió SH350i hàng chính hãng DNA sản xuất tại Hy Lạp."],
            ["name" => "Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i", "number" => 834, "price" => 5750000, "like" => 5424, "image" => "phutung/27.jpg", "description" => "Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.  Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.  Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i gắn như zin không cần chế cháo. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc Nitron bình dầu chính hãng Việt Nam cho Wave, Dream, Future", "number" => 149, "price" => 4900000, "like" => 2800, "image" => "phutung/28.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron bình dầu chính hãng Việt Nam cho Wave, Dream, Future được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron bình dầu chính hãng Việt Nam cho Wave, Dream, Future được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron bình dầu chính hãng Việt Nam cho SH Ý", "number" => 629, "price" => 4900000, "like" => 4224, "image" => "phutung/29.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron bình dầu chính hãng Việt Nam cho SH Ý được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron bình dầu chính hãng Việt Nam cho SH Ý được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron bình dầu chính hãng Việt Nam cho AB", "number" => 351, "price" => 4900000, "like" => 4569, "image" => "phutung/30.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron bình dầu chính hãng Việt Nam cho AB, PCX được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron bình dầu chính hãng Việt Nam cho AB được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Adelin chính hãng cho Exciter 150, Exciter 155", "number" => 421, "price" => 2250000, "like" => 4899, "image" => "phutung/31.jpg", "description" => "Phuộc Adelin chính hãng cho Exciter 150, Exciter 155, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng.  Phuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng.  Phuộc Adelin chính hãng cho  Exciter 150, Exciter 155...có chiều cao 208mm."],
            ["name" => "Phuộc Adelin chính hãng cho Winner, Sonic", "number" => 305, "price" => 2250000, "like" => 2444, "image" => "phutung/32.jpg", "description" => "Phuộc Adelin chính hãng cho Winner, Sonic, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. 
Phuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. 
Phuộc Adelin chính hãng cho Winner, Sonic...có chiều cao 225mm."],
            ["name" => "Phuộc Adelin bình dầu chính hãng cho Exciter 150, Exciter 155", "number" => 376, "price" => 3850000, "like" => 4764, "image" => "phutung/33.jpg", "description" => "Phuộc Adelin bình dầu chính hãng cho Exciter 150, Exciter 155, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng.  Phuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng.  Phuộc Adelin bình dầu chính hãng cho  Exciter 150, Exciter 155...có chiều cao 208mm."],
            ["name" => "Phuộc Adelin bình dầu chính hãng cho Winner, Sonic", "number" => 434, "price" => 3850000, "like" => 5770, "image" => "phutung/34.jpg", "description" => "Phuộc Adelin bình dầu chính hãng cho Winner, Sonic, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng.  Phuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng.  Phuộc Adelin bình dầu chính hãng cho Winner, Sonic...có chiều cao 225mm."],
            ["name" => "Phuộc Adelin chính hãng cho SHVN", "number" => 783, "price" => 3550000, "like" => 4127, "image" => "phutung/35.jpg", "description" => "Phuộc Adelin chính hãng cho SHVN các đời, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng.  Phuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng.  Phuộc Adelin chính hãng cho SHVN...có chiều cao 375mm."],
            ["name" => "Phuộc Adelin bình dầu chính hãng cho SHVN", "number" => 327, "price" => 5550000, "like" => 1959, "image" => "phutung/36.jpg", "description" => "Phuộc Adelin bình dầu chính hãng cho SHVN các đời, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng.  Phuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng.  Phuộc Adelin bình dầu chính hãng cho SHVN...có chiều cao 375mm."],
            ["name" => "Phuộc Adelin chính hãng cho Wave, Future, Dream", "number" => 552, "price" => 3250000, "like" => 3643, "image" => "phutung/37.jpg", "description" => "Phuộc Adelin chính hãng cho Wave, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng.  Phuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng.  Phuộc Adelin chính hãng cho Wave, Future, Dream...có chiều cao 330mm."],
            ["name" => "Phuộc YSS G-Sport chính hãng cho Honda AB160 cao 335mm", "number" => 630, "price" => 7160000, "like" => 6854, "image" => "phutung/38.jpg", "description" => "Phuộc YSS G-Sport chính hãng cho Honda AB 160...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành.  Phuộc YSS G-Sport chính hãng gắn cho Honda AB 160 mà không cần chế, phuộc có chiều cao 335mm. Phuộc YSS G-Sport chính hãng cho AB 160  được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Phuộc YSS G-Sport 2 loxo cho Vario 160, Click 160", "number" => 696, "price" => 3770000, "like" => 8835, "image" => "phutung/39.jpg", "description" => "Phuộc YSS dòng G-Sport 2 loxo cao cấp cho các dòng xe tay ga Vario 160, Click 160 mới...với thiết kế mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành, đặc biệt phiên bản này có kèm theo loxo để thay thế khi hư hỏng hoặc sơn lại để thay đổi màu sắc. 
Phuộc YSS G-Sport 2 loxo cho Vario 160, Click 160 mới có chiều cao 340mm được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Baga inox 10 ly màu titan cho AB 160", "number" => 690, "price" => 200000, "like" => 2504, "image" => "phutung/40.jpg", "description" => "Baga inox 10ly màu titan cho AB160 được làm bằng vật liệu cao cấp, với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy, xe rất thẩm mỹ và gọn gàng."],
            ["name" => "Bộ nhông sên dĩa Light cho Yamaha Sirius/Jupiter xăng cơ", "number" => 393, "price" => 400000, "like" => 1310, "image" => "phutung/41.jpg", "description" => "Bộ nhông sên dĩa Light dành cho Yamaha Sirius, Jupiter xăng cơ với Sên vàng Light 428HS 104 mắc 10ly, nhông dĩa 15 - 36 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Bộ NSD Light dành cho Yamaha Sirius, Jupiter gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."],
            ["name" => "Bộ nhông sên dĩa Light cho Yamaha Exciter 135 đời 5 số 2011 - 2015", "number" => 811, "price" => 420000, "like" => 2680, "image" => "phutung/42.jpg", "description" => "Bộ nhông sên dĩa Light dành cho Yamaha Exciter 135 đời 5 số 2011 - 2015 với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 14 - 38 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Bộ NSD Light dành cho Yamaha Exciter 135 đời 5 số gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."],
            ["name" => "Bộ Nhông sên dĩa Light cho Yamaha Exciter 135 đời 4 số 2006 - 2010", "number" => 842, "price" => 420000, "like" => 9090, "image" => "phutung/43.jpg", "description" => "Bộ NSD Light dành cho Yamaha Exciter 135 nhỏ 4 số 2010 với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 15 - 39 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. 
Bộ NSD Light dành cho Yamaha Exciter 135 4 số gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000km tùy điều kiện nào đến trước."],
            ["name" => "Bộ Nhông sên dĩa Light cho Yamaha Exciter 150", "number" => 490, "price" => 420000, "like" => 7497, "image" => "phutung/44.jpg", "description" => "Bộ nhông sên dĩa Light dành cho Yamaha Exciter 150 với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 14 - 42 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Bộ NSD Light dành cho Yamaha Exciter 150 gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."],
            ["name" => "Bộ Nhông sên dĩa Light cho Honda Winner", "number" => 333, "price" => 430000, "like" => 4674, "image" => "phutung/45.jpg", "description" => "Bộ nhông sên dĩa Light dành cho Winner với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 15 - 44 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Bộ NSD Light cho Honda  Winner 150, Winner X gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."],
            ["name" => "Bộ Nhông sên dĩa Light cho Honda Sonic", "number" => 409, "price" => 430000, "like" => 2701, "image" => "phutung/46.jpg", "description" => "Bộ Nhông sên dĩa Light dành cho Sonic với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 15 - 42 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Bộ NSD Light dành cho Honda  Sonicgắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."],
            ["name" => "Bộ Nhông sên dĩa Light cho Satria, Raider", "number" => 794, "price" => 420000, "like" => 9928, "image" => "phutung/47.jpg", "description" => "Bộ Nhông sên dĩa Light dành cho Satria, Raider với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 14 -38 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Bộ NSD Light dành cho Satria, Raider gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."],
            ["name" => "Sên vàng Light 428HS 132 mắc 10ly", "number" => 684, "price" => 270000, "like" => 9942, "image" => "phutung/48.jpg", "description" => "Sên vàng Light 428HS 132 mắc 10ly, được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Sên vàng Light 428HS 132 mắc 10ly có thể gắn nhiều loại xe số thể thao dưới 175cc. Sên được bảo hành 6 tháng hoặc 12.000km tùy điều kiện nào đến trước."],
            ["name" => "Sên vàng Light 428HS 122 mắc 10ly", "number" => 106, "price" => 250000, "like" => 8361, "image" => "phutung/49.jpg", "description" => "Sên vàng Light 428HS 122 mắc 10ly, được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí.  Sên vàng Light 428HS 122 mắc 10ly có thể gắn nhiều loại xe số thể thao dưới 175cc. Sên được bảo hành 6 tháng hoặc 12.000km tùy điều kiện nào đến trước."],
            ["name" => "Nhông Recto chính hãng 15T cho Exciter", "number" => 115, "price" => 65000, "like" => 5872, "image" => "phutung/50.png", "description" => "Nhông Recto 15T dành cho các dòng Exciter, đặc biệt thông số zin cho Exciter 135 nhỏ.   Nhông Recto chính hãng đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn.  Nhông Recto 15T cho Exciter là hàng chính hãng Recto Thái Lan."],
            ["name" => "Phuộc RCB VS ty vàng chính hãng cho AB 125", "number" => 830, "price" => 4600000, "like" => 2393, "image" => "phutung/51.jpg", "description" => "Phuộc RCB VS chính hãng ty vàng cho AB 125 đời 2013-2019...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.
 Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình.
 Phuộc RCB VS cho Air Blade 125 đời 2013-2019 cao 320mm và được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VD ty vàng chính hãng cho Honda AB 125", "number" => 256, "price" => 5750000, "like" => 5136, "image" => "phutung/52.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới dành cho xe Honda AB 125 đời 2013 - 2019 và ...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.
 Phuộc sau RCB VD bình dầu dành cho AB có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.
 Phuộc RCB VD cho Honda AB 125 có chiều cao 320mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Baga inox 10ly sơn đen tĩnh điện cho AB 160", "number" => 317, "price" => 200000, "like" => 1489, "image" => "phutung/53.jpg", "description" => "Baga inox 10ly sơn đen tĩnh điện cho AB 160 với thiết kế sơn đen khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy."],
            ["name" => "Thảm lót chân Air Blade 160", "number" => 391, "price" => 75000, "like" => 7037, "image" => "phutung/54.jpg", "description" => "Thảm lót chân cho xe Air Blade 160 mẫu mới khá đẹp, cao su dày chất lượng khá tốt.  Thảm lót chân AB 160 giúp cho xe luôn sạch sẽ, chống trầy sàn và còn có thể trang điểm cho xế yêu của bạn đẹp hơn."],
            ["name" => "Nhông Recto chính hãng 15T cho Winner", "number" => 120, "price" => 65000, "like" => 8615, "image" => "phutung/55.jpg", "description" => "Nhông Recto 15 dành cho Winner 150, Winner X, Sonic 150   Nhông Recto chính hãng đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn.  Nhông Recto hàng chính hãng Thái Lan."],
            ["name" => "Dĩa tải Saratai 43T cho Raider không Fi", "number" => 406, "price" => 42000, "like" => 4505, "image" => "phutung/56.jpg", "description" => "Dĩa tải Saratai 43T cho Raider không Fi, thương hiệu đến từ Thái Lan, chất lượng tốt, bền bỉ."],
            ["name" => "Pát chống rung dàn đầu Honda SH 2020 - 2022", "number" => 698, "price" => 120000, "like" => 383, "image" => "phutung/57.png", "description" => "Pát chống rung dàn đầu xe Honda SH 2020, khắc phục tình trạng bị rơ dàn đầu xe sau thời gian sử dụng, làm từ chất liệu Inox chắc chắn.  Pát chống rung dàn đầu gắn được cho xe Honda SH 2020-2022"],
            ["name" => "Cao su bọc Smartkey Honda SH350i, Vision", "number" => 756, "price" => 35000, "like" => 6728, "image" => "phutung/58.jpg", "description" => "Cao su bọc Smartkey dành cho Honda SH350i, Vision sử dụng Smartkey, đồ bền gần như tuyệt đối, bảo vệ tốt các chìa Smartkey khỏi va đạp hư hỏng, trầy xước. 
- Mẫu 2 nút cho SH 350i. 
- Mẫu 3 nút cho Vision."],
            ["name" => "Bố thắng đĩa sau RCB chính hãng cho Exciter 135, Exciter 150/155", "number" => 162, "price" => 90000, "like" => 8223, "image" => "phutung/59.jpg", "description" => "Bố thắng đĩa sau RCB chính hãng cho Exciter 135, Exciter 150/155 với lốp bố chất lượng, êm ái khi sử dụng, đảm bảo an toàn khi vận hành.  Bố thắng đĩa RCB khá an toàn, tránh làm tổn hại đĩa thắng một cách tối đa.  Bố thắng đĩa RCB sau gắn vừa xe Exciter 135, Exciter 150/155."],
            ["name" => "Bố thắng đĩa trước RCB chính hãng cho Exciter 150/155, NVX", "number" => 696, "price" => 90000, "like" => 367, "image" => "phutung/60.jpg", "description" => "Bố thắng đĩa trước RCB chính hãng cho Exciter 150/155, NVX với lốp bố chất lượng, êm ái khi sử dụng.  Bố thắng đĩa RCB khá an toàn, tránh làm tổn hại đĩa thắng một cách tối đa."],
            ["name" => "Nhông sên dĩa DID vàng cho Suzuki Raider Fi", "number" => 346, "price" => 510000, "like" => 4574, "image" => "phutung/61.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Suzuki Raider Fi với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Nhông sên dĩa DID vàng cho Suzuki Raider xăng cơ", "number" => 856, "price" => 510000, "like" => 7623, "image" => "phutung/62.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Suzuki Raider xăng cơ với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Nhông sên dĩa DID vàng cho Yamaha FZ150i", "number" => 822, "price" => 460000, "like" => 5264, "image" => "phutung/63.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Yamaha FZ150 với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Ốp lọc gió trong suốt chính hãng ZHI.PAT cho Honda SH350i", "number" => 598, "price" => 480000, "like" => 1155, "image" => "phutung/64.jpg", "description" => "- Ốp lọc gió trong suốt chính hãng ZHI.PAT cho Honda SH350i. Với thiết kế thích hợp cho các bạn cá tính, thời trang.  - Ốp lọc gió trong suốt có độ dày cao, nhẹ & trong suốt hoàn toàn. - Với chất liệu nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong."],
            ["name" => "Thảm lót chân cao su cho Vario 160", "number" => 305, "price" => 90000, "like" => 8464, "image" => "phutung/65.jpg", "description" => "Thảm lót chân cao su cho Vario 160 mẫu mới, cao su dày, rất chắc chắn, giúp xe luôn sạch sẽ và chống trầy sàn để chân.  Thảm lót chân cao su cho Vario 160  mẫu mới có thể gắn được các đời xe Vario 160"],
            ["name" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 150", "number" => 175, "price" => 1800000, "like" => 332, "image" => "phutung/66.jpg", "description" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 150, thiết kế kế đơn giản nhưng đẹp mắt, đặc biệt ty được mạ vàng nhìn nổi bật, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin. 
Chiều dài phuộc: 208mm.- Ty phuộc 13mm - Lò xo phuộc 10mm 
Phuộc sau RCB E2 ty vàng cho Exciter 150 hàng chính hãng Racingboy được bảo hành 1 năm."],
            ["name" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 135", "number" => 194, "price" => 1800000, "like" => 9597, "image" => "phutung/67.jpg", "description" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 135, thiết kế kế đơn giản nhưng đẹp mắt, đặc biệt ty được mạ vàng nhìn nổi bật, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin. 
Chiều dài phuộc: 203mm.- Ty phuộc 13mm - Lò xo phuộc 10mm 
Phuộc sau RCB E2 ty vàng cho Exciter 135 hàng chính hãng Racingboy được bảo hành 1 năm."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng ZHI.PAT cho Vision 2020 - 2022", "number" => 601, "price" => 350000, "like" => 8089, "image" => "phutung/68.jpg", "description" => "- Ốp Lọc Gió Trong Suốt Chính Hãng ZHI.PAT cho Vision 2020 - 2022. Với thiết kế thích hợp cho các bạn cá tính, thời trang.  - Ốp lọc gió trong suốt có độ dày cao, nhẹ & trong suốt hoàn toàn.  - Với chất liệu nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Air Blade", "number" => 114, "price" => 2950000, "like" => 3718, "image" => "phutung/69.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron không bình dầu chính hãng Việt Nam cho Air Blade, PCX được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Air Blade (AB), PCX  cao 330mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Sên vàng  X1R 428S 132 mắc 9ly", "number" => 643, "price" => 300000, "like" => 4361, "image" => "phutung/70.jpg", "description" => "Sên vàng X1R 428S 132 mắc 9ly, sên được sử dụng ống trục liền nguyên khối có độ bền gấp 3 lần các loại sên zin thông thường trên thị trường, làm tăng tuổi thọ của sên lẫn nhông dĩa đi cùng.  Sên vàng X1R 428S 132 mắc 9ly được mạ vàng rất đặc biệt với 3 bước: mạ crom, phủ đồng rồi xi vàng nên màu sên rất đẹp và bền bỉ theo thời gian.  Sên vàng X1R 428S 132 mắc 9ly có thể gắn nhiều loại xe số thể thao dưới 175cc."],
            ["name" => "Sên vàng X1R 428HPO 132 mắc 10ly", "number" => 357, "price" => 450000, "like" => 3698, "image" => "phutung/71.jpg", "description" => "Sên vàng X1R 428 HPO 132 mắc 10ly, sên được sử dụng ống trục liền nguyên khối có độ bền gấp 3 lần các loại sên zin thông thường trên thị trường, làm tăng tuổi thọ của sên lẫn nhông dĩa đi cùng.  Sên vàng X1R 428 HPO 132 mắc 10ly được mạ vàng rất đặc biệt với 3 bước: mạ crom, phủ đồng rồi xi vàng nên màu sên rất đẹp và bền bỉ theo thời gian.  Sên vàng X1R 428 HPO 132 mắc 10ly có thể gắn nhiều loại xe số thể thao dưới 175cc."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Wave", "number" => 520, "price" => 2900000, "like" => 3928, "image" => "phutung/72.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron không bình dầu chính hãng Việt Nam cho Wave được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Wave cao 335mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam SHVN", "number" => 865, "price" => 2900000, "like" => 4090, "image" => "phutung/73.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron không bình dầu chính hãng Việt Nam cho SHVN được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho SHVN cao 380mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron Bình Dầu chính hãng Việt Nam SHVN", "number" => 257, "price" => 4950000, "like" => 6713, "image" => "phutung/74.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron Bình Dầu chính hãng Việt Nam cho SHVN được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron Bình Dầu chính hãng Việt Nam cho SHVN cao 380mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Bố thắng đĩa trước Elig cho AB, Lead, Click, Vario, Vision", "number" => 573, "price" => 80000, "like" => 1981, "image" => "phutung/75.png", "description" => "Bố thắng đĩa trước Elig cho AB, Lead, Click, Vario, Vision... luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường.  Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đĩa trước Elig cho SH125i, SH150i", "number" => 474, "price" => 110000, "like" => 2331, "image" => "phutung/76.png", "description" => "Bố thắng đĩa trước Elig cho SH125i, SH150i luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. 
Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đĩa sau Elig cho SH125i, SH150i, SH300i, SH350i", "number" => 645, "price" => 100000, "like" => 2719, "image" => "phutung/77.png", "description" => "Bố thắng đĩa sau Elig cho SH125i, SH150i, Sh300i, SH350i luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. 
Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đùm sau Elig cho AB, PCX, Lead, SH Mode, Click, Vario, Vision", "number" => 622, "price" => 100000, "like" => 589, "image" => "phutung/78.png", "description" => "Bố thắng đùm sau Elig cho Airblade các đời, Lead, SH Mode, Vision, Click/Vario, PCX... luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường.  Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đĩa trước Elig cho Winner, Wave 110", "number" => 407, "price" => 80000, "like" => 1067, "image" => "phutung/79.jpg", "description" => "Bố thắng đĩa trước Elig cho Winner, Wave 110, Future Fi luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường.  Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đĩa trước Elig cho Exciter 150, Exciter 155", "number" => 879, "price" => 90000, "like" => 8925, "image" => "phutung/80.png", "description" => "Bố thắng đĩa trước Elig cho Exciter 150-155, Sirius Fi luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. 
Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đĩa sau Elig cho Exciter, Sonic", "number" => 191, "price" => 80000, "like" => 2391, "image" => "phutung/81.png", "description" => "Bố thắng đĩa sau Elig cho Exciter 135, 150, 155 các đời, Sonic (đời cũ), Raider, Satria (đời cũ)... luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường.  Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Bố thắng đĩa sau Elig cho Winner, Sonic", "number" => 164, "price" => 100000, "like" => 1921, "image" => "phutung/82.png", "description" => "Bố thắng đĩa sau Elig cho Winner, Sonic mới luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường.  Bố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."],
            ["name" => "Dĩa nhôm 7075 xịn 44T cho Winner", "number" => 759, "price" => 400000, "like" => 7805, "image" => "phutung/83.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 44T dùng để gắn Honda Winner"],
            ["name" => "Dĩa nhôm 7075 xịn 43T cho Sonic, Winner", "number" => 479, "price" => 400000, "like" => 5102, "image" => "phutung/84.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 43T dùng để gắn Sonic, Winner"],
            ["name" => "Dĩa nhôm 7075 xịn 42T cho Sonic", "number" => 144, "price" => 400000, "like" => 5104, "image" => "phutung/85.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 42T dùng để gắn Sonic."],
            ["name" => "Dĩa nhôm 7075 xịn 46T cho Exciter 155", "number" => 706, "price" => 400000, "like" => 9668, "image" => "phutung/86.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 46T dùng để gắn Exciter 155."],
            ["name" => "Dĩa nhôm 7075 xịn 43T cho Exciter 150", "number" => 222, "price" => 400000, "like" => 4020, "image" => "phutung/87.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 43T dùng để gắn Exciter 150."],
            ["name" => "Dĩa nhôm 7075 xịn 42T cho Exciter 150", "number" => 615, "price" => 400000, "like" => 4975, "image" => "phutung/88.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 42T dùng để gắn Exciter 150."],
            ["name" => "Dĩa nhôm 7075 xịn 38T cho Exciter 135", "number" => 673, "price" => 400000, "like" => 4218, "image" => "phutung/89.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 38T dùng để gắn Exciter 135."],
            ["name" => "Dĩa nhôm 7075 xịn 39T cho Exciter 135", "number" => 419, "price" => 0, "like" => 9091, "image" => "phutung/90.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 39T dùng để gắn Exciter 135."],
            ["name" => "Dĩa nhôm 7075 xịn 42T cho Exciter 135", "number" => 455, "price" => 0, "like" => 8747, "image" => "phutung/91.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 42T dùng để gắn Exciter 135 thích đi dĩa to canh theo máy."],
            ["name" => "Dĩa nhôm 7075 xịn 39T cho Raider Fi, Satria Fi", "number" => 667, "price" => 400000, "like" => 10, "image" => "phutung/92.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 39T dùng để gắn Satria Fi, Raider Fi."],
            ["name" => "Dĩa nhôm 7075 xịn 38T cho Raider Fi, Satria Fi", "number" => 316, "price" => 400000, "like" => 3, "image" => "phutung/93.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 38T dùng để gắn Satria Fi, Raider Fi."],
            ["name" => "Dĩa Recto 44T chính hãng cho Exciter 150", "number" => 220, "price" => 220000, "like" => 3543, "image" => "phutung/94.jpg", "description" => "Dĩa Recto 44T hàng chính hãng dành cho Exciter 150. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.  Dĩa Recto hàng chính hãng Thái Lan"],
            ["name" => "Baga inox sơn tĩnh điện cho Honda Future Led", "number" => 139, "price" => 170000, "like" => 1808, "image" => "phutung/95.jpg", "description" => "Baga inox sơn tĩnh điện đen cho Honda Future Led 2018-2022 được làm bằng vật liệu inox cao cấp, dày, bền...sở hữu màu đen trông rất cứng cáp."],
            ["name" => "Gác chân trước X1R chính hãng cho Exciter 150", "number" => 450, "price" => 450000, "like" => 1966, "image" => "phutung/96.jpg", "description" => "Gác chân trước X1R chính hãng dành cho Yamaha Exciter 150, thiết kế đẹp, to bự nên chân gác lên chắc chắn hơn, tạo cảm giác an toàn khi chạy xe. Gác chân trước X1R vừa là món phụ kiện trang trí, vừa dùng để thay thế gác chân zin bị va quẹt, hư hỏng với giá thành hợp lí."],
            ["name" => "Chân chống nghiêng inox 304 cho Vario, Click", "number" => 669, "price" => 300000, "like" => 563, "image" => "phutung/97.jpg", "description" => "Chân chống nghiêng Inox  304 được làm khá đẹp, chuẩn nét từng chi tiết vật liệu inox 304 cao cấp xịn nên rất chắc chắn, sản phẩm vừa làm đẹp vừa thay thế chân chống nghiêng theo xe khi bị hư, cũ  Chân chống nghiêng inox  304 gắn được cho Vario, Click."],
            ["name" => "Chân chống nghiêng inox 304 cho Wave, Dream", "number" => 872, "price" => 300000, "like" => 6243, "image" => "phutung/98.jpg", "description" => "Chân chống nghiêng Inox được làm khá đẹp, chuẩn nét từng chi tiết vật liệu inox 304 cao cấp xịn nên rất chắc chắn, sản phẩm vừa làm đẹp vừa thay thế chân chống nghiêng theo xe khi bị hư, cũ  Chân chống nghiêng inox 304 gắn được cho Wave, Dream."],
            ["name" => "Che két nước CNC Anode xám cho Honda Vario, AB, SHVN", "number" => 866, "price" => 250000, "like" => 3944, "image" => "phutung/99.jpg", "description" => "Che két nước CNC Anode màu xám mới nhất dành cho Honda Vario, AB, SHVN..., với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước  Che két nước CNC Anode màu xám gắn vừa khít cho Honda Vario, AB, SHVN."],
            ["name" => "Sên RK vàng 428SB - 124L chính hãng", "number" => 339, "price" => 450000, "like" => 6585, "image" => "phutung/100.jpg", "description" => "Sên RK vàng 428SB - 124L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản.  Sên RK vàng 428SB - 124L là loại sên 9ly không phốt, dài 124 mắc, sên có lớp mạ vàng rất đẹp, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường.  Sên RK vàng 428SB - 124L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số."],
            ["name" => "Phuộc trước LCM V1 cho Exciter 155 Smartkey", "number" => 195, "price" => 4100000, "like" => 1219, "image" => "phutung/101.jpg", "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter, phuộc LCM V1 nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter. 
Phuộc trước LCM V1 quan trọng nhất là ráp như zin cho Exciter 155 khoá Smartkey dùng heo 2 pis không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng sắt, pát, bạc đạn... 
Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Phuộc trước LCM V2 cho Exciter 155 Smartkey", "number" => 870, "price" => 4250000, "like" => 741, "image" => "phutung/102.jpg", "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter, phuộc LCM V2 nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter.  Phuộc LCM V2 quan trọng nhất là ráp như zin cho Exciter 155 khoá Smartkey dùng heo 2 pis không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng nhôm CNC rất nhẹ, pát, bạc đạn...  Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Phuộc Ohlins HO 647 chính hãng cho Wave, Dream, Future", "number" => 473, "price" => 15000000, "like" => 9835, "image" => "phutung/103.jpg", "description" => "Phuộc Ohlins HO 647 chính hãng cho Honda Wave, Dream, Future có đầy đủ núm rebound tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường. 
Thương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế. 
Phuộc Ohlins cho Wave, Dream, Future chính hãng (HO 647) được bảo hành chính hãng 2 năm. 
Phuộc Ohlins HO 647 chính hãng gắn vừa khít cho Honda Wave, Dream, Future, Axelo, Blade, Cub...đặc biệt có tặng kèm thêm 2 loxo để thay thế."],
            ["name" => "Phuộc Ohlins HO 816 chính hãng cho SHVN", "number" => 284, "price" => 17500000, "like" => 3524, "image" => "phutung/104.jpg", "description" => "Phuộc Ohlins HO 816 dành cho Honda SHVN 125/150 chính hãng có đầy đủ núm rebound tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường.  Thương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế.  Phuộc Ohlins cho SH 125/150 Việt Nam được bảo hành chính hãng 2 năm.  Phuộc Ohlins HO 816 chính hãng gắn vừa khít cho Honda SHVN 125/150i."],
            ["name" => "Phuộc Ohlins HO 831 chính hãng cho Vario, Click", "number" => 495, "price" => 9300000, "like" => 6020, "image" => "phutung/105.jpg", "description" => "Phuộc Ohlins HO 831 Vario, Click chính hãng có đầy đủ núm rebound vs Compression tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường.  Thương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế.  Phuộc sau Ohlins cho Vario, Click chính hãng (HO 831) được bảo hành chính hãng 2 năm.  Phuộc Ohlins HO 831 chính hãng cho Vario, Click và có thể gắn trên nhiều dòng xe 1 phuộc khác."],
            ["name" => "Lót cốp da cách nhiệt cho Honda Scoopy", "number" => 524, "price" => 0, "like" => 8507, "image" => "phutung/106.png", "description" => "Lót cốp da cách nhiệt cho xe Honda Scoopy, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. 
Lót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... 
Lót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: 
- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. 
- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. 
- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. 
Lót cốp da cách nhiệt gắn vừa khít cho xe Honda Scoopy."],
            ["name" => "Nhông Recto 14T chính hãng cho Honda Wave, Dream, Future", "number" => 841, "price" => 65000, "like" => 7883, "image" => "phutung/107.png", "description" => "Nhông Recto 14T chính hãng cho Honda đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn.  Nhông Recto 14T hàng chính hãng Thái Lan, gắn được cho Wave, Dream, Future..."],
            ["name" => "Dĩa Recto 36T chính hãng cho Wave, Future", "number" => 373, "price" => 160000, "like" => 5916, "image" => "phutung/108.jpg", "description" => "Dĩa Recto 36T hàng chính hãng dành choWave 110, Wave RS, Future. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.  Dĩa Recto hàng chính hãng Thái Lan"],
            ["name" => "Lọc gió lưới thép dành cho SH350i", "number" => 826, "price" => 400000, "like" => 7861, "image" => "phutung/109.jpg", "description" => "Lọc gió lưới thép dành riêng cho SH350i, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió lưới thép cho SH350i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Phuộc YSS G-Sport 2 loxo cho Vario, Click", "number" => 681, "price" => 3770000, "like" => 1402, "image" => "phutung/110.jpg", "description" => "Phuộc YSS dòng G-Sport 2 loxo cao cấp cho các dòng xe tay ga Vario, Click...với thiết kế mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành, đặc biệt phiên bản này có kèm theo loxo để thay thế khi hư hỏng hoặc sơn lại để thay đổi màu sắc. 
Phuộc sau YSS G-Sport 2 loxo gắn Vario, Click mà không cần chế, khách muốn gắn cho Lead và Vision thì chêm Pô Air (ốp lọc gió) ra ngoài bằng con tán 8ly.  
Phuộc YSS G-Sport 2 loxo cho Vario, Click có chiều cao 330mm được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Thảm lót chân cao su cho Honda SH350i", "number" => 830, "price" => 90000, "like" => 7508, "image" => "phutung/111.jpg", "description" => "Thảm lót chân cao su cho Honda SH350i mẫu mới, thiết kế đẹp, sang trọng, cao su dày, rất chắc chắn, giúp xe luôn sạch sẽ và chống trầy sàn để chân.  Thảm lót chân cao su gắn vừa khít SH350i mà không cần chế cháo."],
            ["name" => "Cần số 2 chiều X1R chính hãng cho Winner X", "number" => 535, "price" => 400000, "like" => 2514, "image" => "phutung/112.jpg", "description" => "Cần số X1R chính hãng cho Winner X, thiết kế 2 chiều tiện lợi cho việc không bị hư giày trong lúc đạp số, giúp lên số trả số nhanh hơn. Cần số X1R chính hãng cho Winner X được làm bằng chất liệu nhôm CNC nên cho ra mẫu mã rất đẹp.  Cần số X1R chính hãng cho Winner X là hàng chính hãng X1R có 2 màu: đen và trắng."],
            ["name" => "Phuộc RCB M2 ty vàng chính hãng cho Exciter 150, Exciter 155", "number" => 498, "price" => 1300000, "like" => 5857, "image" => "phutung/113.jpg", "description" => "Phuộc RCB M2 ty vàng cho Exciter 150, Exciter 155, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng. 
Phuộc RCB M2 ty vàng cao 208mm. 
- Ty phuộc 10mm màu vàng. 
- Lò xo phuộc 10mm. 
Phuộc RCB M2 ty vàng hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Phuộc RCB M2 ty vàng chính hãng cho Exciter 135", "number" => 353, "price" => 1300000, "like" => 8952, "image" => "phutung/114.jpg", "description" => "Phuộc RCB M2 ty vàng cho Exciter 135, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng. 
Phuộc RCB M2 ty vàng cao 203mm. 
- Ty phuộc 10mm màu vàng. 
- Lò xo phuộc 10mm. 
Phuộc RCB M2 ty vàng hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Phuộc RCB M2 ty vàng chính hãng cho Winner, Sonic", "number" => 373, "price" => 1300000, "like" => 5733, "image" => "phutung/115.jpg", "description" => "Phuộc RCB M2 ty vàng chính hãng cho Winner, Sonic, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng 
Phuộc RCB M2 cao 225mm 
- Ty phuộc 10mm màu vàng.
- Lò xo phuộc 10mm
. Phuộc RCB M2 cho Winner, Sonic hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Phuộc YSS G-Sport chính hãng cho Wave, Dream, Future, Axelo, Monkey...", "number" => 359, "price" => 7160000, "like" => 5146, "image" => "phutung/116.jpg", "description" => "Phuộc YSS G-Sport chính hãng cho Wave, Dream...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. 
Phuộc YSS G-Sport chính hãng gắn cho Wave, Dream, Monkey, Cub, Axelo, Viva...mà không cần chế, phuộc có chiều cao 335mm. 
Phuộc YSS G-Sport chính hãng cho Wave, Dream được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Phuộc YSS G-Sport chính hãng cho Honda SHVN", "number" => 789, "price" => 7160000, "like" => 1523, "image" => "phutung/117.jpg", "description" => "Phuộc YSS G-Sport chính hãng cho Honda SHVN...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành.  Phuộc YSS G-Sport chính hãng gắn cho Honda SHVN mà không cần chế, phuộc có chiều cao 375mm.  Phuộc YSS G-Sport chính hãng cho Honda SHVN được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Bố thắng đĩa RCB sau cho Honda SH 125/150, SH 300 (2012 - 2021)", "number" => 559, "price" => 100000, "like" => 3094, "image" => "phutung/118.png", "description" => "Bố thắng đĩa RCB sau cho Honda SH 125/150, SH 300 (2012 - 2021), hàng nhập khẩu chính hãng RCB, chất lượng bố rất tốt so với giá bán ra, đảm bảo an toàn khi vận hành.  Bố thắng đĩa RCB sau gắn vừa khít cho Honda SH 2 đĩa."],
            ["name" => "Sên phốt RK 428 ELO 132L", "number" => 385, "price" => 490000, "like" => 6053, "image" => "phutung/119.jpg", "description" => "Sên phốt RK 428 ELO - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản.  Sên phốt RK 428 ELO - 132L là loại sên 9ly có phốt cao su, dài 132 mắc, sên này được trang bị trên xe Yamaha Exciter 155 nguyên bản, sên có phốt nên vận hành rất mượt mà, êm ái.  Sên phốt RK 428 ELO - 132L chính hãng được sản xuất tại Nhật, gắn được cho Exciter 155 và các dòng xe côn tay thể thao dưới 150cc."],
            ["name" => "Phuộc trước LCM V1 ty 7 màu cho Exciter 150, Exciter 155", "number" => 244, "price" => 4450000, "like" => 9158, "image" => "phutung/120.jpg", "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter 150, Exciter 155, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter 150, Exciter 155. 
Phuộc LCM V1 ty 7 màu có thiết kế ty phuộc nhiều màu như titan rất đẹp, quan trọng nhất là ráp như zin cho Exciter 150, Exciter 155 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, chảng 3 bằng sắt, pát, bạc đạn... 
Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Sên RK vàng đen 428HSBT - 132L chính hãng", "number" => 465, "price" => 650000, "like" => 2108, "image" => "phutung/121.jpg", "description" => "Sên RK vàng đen 428HSBT - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản.  Sên RK vàng đen 428HSBT - 132L là loại sên 10ly không phốt, dài 132 mắc, sên vàng có lớp mạ ngoài đen, nhìn nổi bật đồng thời cũng giúp màu sắc sên bền hơn so với loại vàng nguyên sợi.  Sên RK vàng đen 428HSBT - 132L chính hãng được sản xuất tại Nhật, gắn được cho Exciter 155 và các dòng xe côn tay thể thao dưới 150cc"],
            ["name" => "Sên vàng DID 9 ly 428D chính hãng 124 mắc", "number" => 640, "price" => 480000, "like" => 2908, "image" => "phutung/122.jpg", "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay.    DID là thương hiệu nổi tiếng trên thế giới, chuyên sản xuất sên dành cho các giải đua xe hàng đầu vì thế chất lượng không thể chê được, sản phẩm cũng đã được nhiều anh em Biker tin dùng để thay để thay thế cho sên hãng rất nhanh bị giản, phải tốn nhiều công sức tăng sên thường xuyên, ngoài ra sên DID vàng còn là món phụ tùng trang trí tuyệt vời.   Sên vàng DID 428D 124 mắc (9mm) dành cho các loại xe sử dụng sên tải Winner 150, Sonic , Exciter 150, Exciter 135, Axelo 125, Raider/Satria 150, Fz150i, FX 125..."],
            ["name" => "Sên vàng DID 10 ly 428HD chính hãng 124 mắc", "number" => 146, "price" => 0, "like" => 8993, "image" => "phutung/123.jpg", "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay.    DID là thương hiệu nổi tiếng trên thế giới, chuyên sản xuất sên dành cho các giải đua xe hàng đầu vì thế chất lượng không thể chê được, sản phẩm cũng đã được nhiều anh em Biker tin dùng để thay để thay thế cho sên hãng rất nhanh bị giản, phải tốn nhiều công sức tăng sên thường xuyên, ngoài ra sên DID vàng còn là món phụ tùng trang trí tuyệt vời.   Sên vàng DID 428HD 124 mắc (10mm) dành cho các loại xe sử dụng sên tải Winner 150, Sonic , Exciter 150, Exciter 135, Axelo 125, Raider/Satria 150, Fz150i, FX 125..."],
            ["name" => "Dĩa Recto 46T chính hãng cho Exciter 155", "number" => 743, "price" => 275000, "like" => 2951, "image" => "phutung/124.jpg", "description" => "Dĩa Recto 46T hàng chính hãng dành cho Exciter 155. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.  Dĩa Recto 46T hàng chính hãng Thái Lan gắn vừa khít cho Exciter 155."],
            ["name" => "Nhông Mặt Trời 15T cho Honda Winner, Sonic", "number" => 816, "price" => 60000, "like" => 4852, "image" => "phutung/125.jpg", "description" => "Nhông mặt trời 15T chính hãng dành cho Honda Winner, Sonic, chất lượng đã được kiểm chứng lâu năm vô cùng bền bỉ.  Nhông mặt trời 15T chính hãng cho Winner được sản xuất tại Thái Lan."],
            ["name" => "Baga inox màu titan cho Exciter 155", "number" => 357, "price" => 150000, "like" => 4205, "image" => "phutung/126.jpg", "description" => "Baga inox lên màu titan cho Exciter 155 được làm bằng vật liệu inox cao cấp, dày, bền...sở hữu màu titan đang hot trên thị trường."],
            ["name" => "Baga inox sơn tĩnh điện cho Exciter 155", "number" => 443, "price" => 150000, "like" => 3507, "image" => "phutung/127.jpg", "description" => "Baga inox sơn tĩnh điện đen cho Exciter 155 được làm bằng vật liệu inox cao cấp, dày, bền...sở hữu màu đen trông rất cứng cáp."],
            ["name" => "Cần số 2 chiều cho Exciter 155", "number" => 750, "price" => 100000, "like" => 2336, "image" => "phutung/128.jpg", "description" => "Cần số 2 chiều dành cho xe Yamaha Exciter 155, mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng."],
            ["name" => "Sên vàng Recto 428SB-124L", "number" => 646, "price" => 310000, "like" => 171, "image" => "phutung/129.jpg", "description" => "Sên vàng Recto 428SB-124L, sên bản 9ly dài 124 mắc, thương hiệu nhông sên dĩa Recto gẩn đây đã quên thuộc với nhiều anh em Biker, giá thành vô cùng hợp lí so với các dòng sên DID.  Sên vàng Recto 428SB-124L hàng chính hãng sản xuất tại Malaysia.  Sên vàng Recto 428SB-124L dài 124 gắn vừa các loại xe côn tay thể thao từ 150cc trở xuống."],
            ["name" => "Thảm cao su Honda Vision 2021", "number" => 326, "price" => 75000, "like" => 9197, "image" => "phutung/130.jpg", "description" => "Thảm cao su lót chân cho Honda Vision đời 2021, thiết kế kiểu Indo đẹp, cao su làm rất dày, giúp chống trầy sàn xe, khi dơ chỉ cần lấy xe chà là xong sạch sẽ rất tiện lợi."],
            ["name" => "Thảm cao su Honda Vision 2014-2020", "number" => 171, "price" => 75000, "like" => 4481, "image" => "phutung/131.jpg", "description" => "Thảm cao su lót chân cho Honda Vision đời 2014 đến 2020, cao su làm rất dày, giúp chống trầy sàn xe, khi dơ chỉ cần lấy xe chà là xong sạch sẽ rất tiện lợi."],
            ["name" => "Cần số 2 chiều zin MX King cho Exciter", "number" => 150, "price" => 250000, "like" => 2425, "image" => "phutung/132.jpg", "description" => "Cần số 2 chiều zin chính hãng Yamaha theo xe MX King, có thể gắn như zin cho các dòng xe EXciter 150-155.  Cần số 2 chiều zin chính hãng Yamaha MX King thì chất lượng đảm bảo, thiết kế gọn đẹp hơn nhiều so với hàng chợ trên thị trường."],
            ["name" => "Dĩa Recto 42T chính hãng cho Honda Sonic", "number" => 286, "price" => 190000, "like" => 4908, "image" => "phutung/133.jpg", "description" => "Dĩa Recto 42T hàng chính hãng dành cho Honda Sonic. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.  Dĩa Recto 42T hàng chính hãng Thái Lan gắn vừa khít như zin cho Sonic."],
            ["name" => "Sên vàng Kozi 428H-130L", "number" => 647, "price" => 400000, "like" => 9511, "image" => "phutung/134.jpg", "description" => "Sên vàng Kozi 428H-130L, sên bản 9ly dài 130 mắc, thương hiệu Kozi đã quên thuộc với nhiều anh em Biker, giá thành vô cùng hợp lí so với các dòng sên DID.  Sên vàng Kozi 428H-130L hàng chính hãng sản xuất tại Malaysia. Sên được bảo hành 6 tháng 1 đổi 1.  Sên vàng Kozi 428H-130L dài 130 gắn vừa các loại xe côn tay thể thao từ 150cc trở xuống."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Winner, Sonic", "number" => 642, "price" => 2500000, "like" => 9976, "image" => "phutung/135.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron chính hãng Việt Nam cho Winner, Sonic được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Winner, Sonic cao 230mm, phuộc được bảo hành 12 tháng, 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Exciter 150", "number" => 296, "price" => 2500000, "like" => 6244, "image" => "phutung/136.jpg", "description" => "Mã: 070656  Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron chính hãng Việt Nam cho Exciter 150 được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Exciter 150 cao 205mm có thể gắn cho cả Exciter 150 và Exciter 135, phuộc được bảo hành 12 tháng,  1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam 2 bình dầu cho Exciter 150", "number" => 487, "price" => 3500000, "like" => 3059, "image" => "phutung/137.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron chính hãng Việt Nam 2 bình dầu cho Exciter 150 được thiết kế 2 bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam 2 bình dầu cho Exciter 150 cao 205mm có thể gắn cho cả Exciter 150 và Exciter 135, phuộc được bảo hành 12 tháng,  1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc RCB DB-2 Line (G-BK) ty vàng cho Exciter 150", "number" => 525, "price" => 4500000, "like" => 1380, "image" => "phutung/138.jpg", "description" => "Phuộc RCB DB-2 Line (G-BK) ty vàng chính hãng mẫu mới nhất dành cho Exciter 150 có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó, đặc biệt thiết kế màu đen ty phuộc được mạ vàng rất sang trọng. 
Phuộc RCB DB-2 Line (G-BK) ty vàng cho Exciter 150 có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. 
Phuộc sau RCB DB-2 Line (G-BK) ty vàng cho Exciter 150 cao 208mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."],
            ["name" => "Phuộc RCB MB2 ty vàng chính hãng cho Air Blade", "number" => 214, "price" => 0, "like" => 7468, "image" => "phutung/139.jpg", "description" => "Phuộc RCB MB2 ty vàng chính hãng bình dầu cho Air Blade, PCX đời cũ..mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung,với ty phuộc được mạ vàng rất độc đáo. Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành 
Phuộc RCB MB2 ty vàng hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng. 
Phuộc RCB MB2 cao 320mm gắn được cho Air Blade, PCX đời cũ"],
            ["name" => "Phuộc RCB C Series ty vàng chính hãng cho Honda Wave, Dream, Future", "number" => 889, "price" => 2020000, "like" => 3158, "image" => "phutung/140.jpg", "description" => "- Phuộc RCB C Series ty vàng cho Honda Wave, Dream, Future, Axelo... thiết kế mới vô cùng sắc xảo cùng với ty phuộc được mạ vàng tạo điểm nhấn, loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành.  - Phuộc RCB C Series ty vàng cho Honda Wave/Dream, Future, Axelo  là Hàng chính hãng Racing Boy bảo hành 12 tháng.  - Phuộc RCB C Series ty vàng cho Honda Wave/Dream, Future, Axelo...với chiều cao 335mm bằng với phuộc zin."],
            ["name" => "Phuộc RCB C Series ty vàng chính hãng cho Honda Air Blade", "number" => 361, "price" => 2020000, "like" => 7194, "image" => "phutung/141.jpg", "description" => "- Phuộc RCB C Series ty vàng cho AB125/150, PCX cũ thiết kế mới vô cùng sắc xảo cùng với ty phuộc được mạ vàng tạo điểm nhấn, loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành. 
- Phuộc sau RCB C Series ty vàng cho AirBlade 125/150 là Hàng chính hãng Racing Boy bảo hành 12 tháng. 
- Phuộc RCB C Series ty vàng gắn được cho Air Blade 125/150, PCX cũ...với chiều cao 320mm bằng với phuộc zin."],
            ["name" => "Ống tiêu inox Honda Winner X", "number" => 256, "price" => 75000, "like" => 6720, "image" => "phutung/142.jpg", "description" => "Ống tiêu inox dành cho Honda Winner X, làm cho hơi thoát ra từ pô xe phóng xuống đường, tình trạng pô zin xe Winner X làm cho khí thải phóng thẳng vào mặt người đi sau đã xảy ra rất nhiều, khiến người đi đường rất khó chịu, sản phẩm chụp pô Winner X này làm cho trở nên văn minh, lịch sự hơn.  Ống tiêu inox Winner X gắn vừa khít cho pô zin."],
            ["name" => "Lọc gió Uma chính hãng dành cho Honda Winner, Sonic", "number" => 585, "price" => 280000, "like" => 6748, "image" => "phutung/143.jpg", "description" => "Lọc gió Uma chính hãng dành cho Honda Winner, Sonic..phụ tùng thay thế chuẩn cho lọc gió zin nguyên bản. Lọc gió Uma dạng mút giúp lọc gió sạch hơn dạng lọc giấy của Zin, thời gian sử dụng lâu hơn và có thể thổi bụi vệ sinh lại, khuyến cáo thay thế khi đi thời gian lâu quá dơ, không nên vệ sinh, rửa, giặt. 
Lọc gió Uma là hàng chính hãng Uma Racing gắn vừa khít như zin cho Honda Winner 150, Winner X, Sonic"],
            ["name" => "Phuộc trước LCM V2 cho Exciter 150, Exciter 155", "number" => 592, "price" => 4250000, "like" => 2001, "image" => "phutung/144.jpg", "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter, phuộc LCM V2 nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter.  Phuộc LCM V2 quan trọng nhất là ráp như zin cho Exciter 150 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng nhôm CNC rất nhẹ, pát, bạc đạn...  Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Phuộc RCB DB-2 Line (G-TI) chính hãng cho Winner, Sonic", "number" => 896, "price" => 4280000, "like" => 3348, "image" => "phutung/145.jpg", "description" => "Phuộc RCB DB-2 Line (G-TI) chính hãng mẫu mới nhất dành cho Honda Winner, Sonic có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó. 
Phuộc RCB DB-2 Line (G-TI) cho Winner, Sonic có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. 
Phuộc sau RCB DB-2 Line (G-TI) cho Winner, Sonic cao 229mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."],
            ["name" => "Phuộc RCB DB-2 Line (G-TI) chính hãng cho Exciter 150", "number" => 380, "price" => 4280000, "like" => 7041, "image" => "phutung/146.jpg", "description" => "Phuộc RCB DB-2 Line (G-TI) chính hãng mẫu mới nhất dành cho Exciter 150 có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó. 
Phuộc RCB DB-2 Line (G-TI) cho Exciter 150 có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. 
Phuộc sau RCB DB-2 Line (G-TI) cho Exciter 150 cao 208mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."],
            ["name" => "Phuộc RCB DB-2 Line (G-TI) chính hãng cho Exciter 135", "number" => 677, "price" => 4280000, "like" => 1655, "image" => "phutung/147.jpg", "description" => "Phuộc RCB DB-2 Line (G-TI) chính hãng mẫu mới nhất dành cho Exciter 135 có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó. 
Phuộc RCB DB-2 Line (G-TI) cho Exciter 135 có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. 
Phuộc sau RCB DB-2 Line (G-TI) cho Exciter 135 cao 203mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."],
            ["name" => "Ốp pô inox 300i ZHIPAT cho SHVN 2020", "number" => 695, "price" => 680000, "like" => 5309, "image" => "phutung/148.jpg", "description" => "Ốp pô inox 300i ZHIPAT cho SHVN 2020. Sản phẩm thay thế cho ốp zin hoặc trang trí cho xe thêm cá tính và thời trang. 
Ốp pô 300i ZHIPAT cho SH 2020 với chất liệu nhựa ABS kết hợp với inox chắc chắn sẽ bảo vệ phần pô gần như tuyệt đối. 
Ốp pô inox 300i ZHIPAT gắn được cho tất cả loại xe SHVN 2020. Sản phẩm chính hãng ZHIPAT."],
            ["name" => "Lọc gió lưới thép độ dành cho Exciter 135", "number" => 795, "price" => 140000, "like" => 9146, "image" => "phutung/149.jpg", "description" => "Lọc gió lưới thép độ dành riêng cho Exicter 135 các đời, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe.  Lọc gió lưới thép độ cho exciter 135 rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Mâm Power Blade chính hãng cho Vario, Click", "number" => 297, "price" => 3550000, "like" => 6113, "image" => "phutung/150.jpg", "description" => "Mâm Power Blade chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm  với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. 
Mâm Power Blade chính hãng cho Vario, Click được sản xuất tại Indonesia."],
            ["name" => "Cục kêu tìm xe Honda", "number" => 581, "price" => 175000, "like" => 5609, "image" => "phutung/151.jpg", "description" => "Cục kêu tìm xe Honda, giúp các xe thường lên Smartkey xử dụng được chức năng tìm xe kêu tít tít khi để trong bãi xe."],
            ["name" => "Cổ pô STB inox chính hãng cho Satria, Raider Fi 34mm", "number" => 279, "price" => 1300000, "like" => 2703, "image" => "phutung/152.jpg", "description" => "Cố pô STB inox 304 chính hãng dành cho Satria, Raider 34mm gồm full bộ cổ có thể gắn đi kèm với pô tăng STB hoặc các loại pô tăng khác trên thị trường, cổ 34mm phù hợp dành các laoi5 xe độ máy, tăng tối đa công suất động cơ. 
Cố pô STB inox chính hãng được làm rất sắc nét, đúng inox 304, hàng xuất xứ từ Đài Loan."],
            ["name" => "Lọc gió trụ STB họng 28 gắn được các xe", "number" => 106, "price" => 480000, "like" => 1800, "image" => "phutung/153.jpg", "description" => "Lọc gió trụ STB tăng lưu lượng gió nạp vào bình xăng, cải thiện hiệu suất hòa trộn nhiên liệu, giúp xe hoạt động mạnh mẽ hơn. Lọc gió trụ phù hợp cho các dòng xe đi bài nhẹ tăng công suất động cơ.  Lọc gió trụ STB xuất xứ từ Đài Loan."],
            ["name" => "Lọc gió lưới thép độ dành cho Vision", "number" => 707, "price" => 230000, "like" => 4074, "image" => "phutung/154.jpg", "description" => "Lọc gió lưới thép độ dành riêng cho Vision từ 2014 trở lên , với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe.  Lọc gió lưới thép độ cho Vision rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng Zhi.Pat dành cho SHVN 2020", "number" => 438, "price" => 420000, "like" => 3635, "image" => "phutung/155.jpg", "description" => "- Ốp lọc gió (pô air) trong suốt chính hãng Zhi.pat nhiều màu dành cho SHVN 2020 Với thiết kế thích hợp cho các bạn cá tính.  - Ốp lọc gió trong suốt hoàn toàn, có độ dày cao và siêu nhẹ.  - Ốp lọc gió sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.   - Bảo hành chính hãng 12 tháng."],
            ["name" => "Phuộc RCB VE chính hãng cho Vario, Click", "number" => 560, "price" => 1800000, "like" => 5568, "image" => "phutung/156.jpg", "description" => "Phuộc RCB VE chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VE có thêm loxo để thay thế rất tiện lợi.
 Phuộc RCB VE cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VD chính hãng cho Vario, Click", "number" => 419, "price" => 2420000, "like" => 2690, "image" => "phutung/157.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm loxo để thay thế rất tiện lợi.
 Phuộc sau RCB VD bình dầu 2 nút tăng chỉnh Rebound ngay chân phuộc và trên bình dầu phù hợp cho mọi địa hình và tải nặng.
 Phuộc RCB VD cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VE chính hãng cho Vario, Click (ty vàng)", "number" => 324, "price" => 2090000, "like" => 557, "image" => "phutung/158.jpg", "description" => "Phuộc RCB VE chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VE có thêm loxo để thay thế rất tiện lợi. Đặc biệt dòng này thiết kế ty mạ vàng nhìn rất sang và đẹp.
 Phuộc RCB VE ty vàng cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VD chính hãng cho Vario, Click (ty vàng)", "number" => 879, "price" => 2700000, "like" => 4221, "image" => "phutung/159.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm loxo để thay thế rất tiện lợi. Đặc biệt dòng này thiết kế ty mạ vàng nhìn rất sang và đẹp.
 Phuộc sau RCB VD bình dầu 2 nút tăng chỉnh Rebound ngay chân phuộc và trên bình dầu phù hợp cho mọi địa hình và tải nặng.
 Phuộc RCB VD ty vàng cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VS ty vàng chính hãng cho SHVN", "number" => 401, "price" => 4600000, "like" => 5853, "image" => "phutung/160.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe SHVN 2012-2020...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm 2 loxo để thay thế. Đặc biệt thiết kế ty phuộc mạ vàng rất đẹp.  Phuộc sau RCB VS bình dầu dành cho SHVN có nút tăng chỉnh Rebound phù hợp cho mọi địa hình và tải nặng ngay chân phuộc.  Phuộc RCB VS ty vàng cho SHVN có chiều cao 380mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VD ty vàng chính hãng cho Wave, Dream, Future", "number" => 785, "price" => 5750000, "like" => 8778, "image" => "phutung/161.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế. Đặc biệt ty được thiết kế mạ vàng rất đẹp mắt.  Phuộc sau RCB VD bình dầu có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.  Phuộc RCB VD ty vàng cho Wave, Dream có chiều cao 335mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VD ty vàng chính hãng cho Honda AB 2020", "number" => 885, "price" => 5750000, "like" => 7687, "image" => "phutung/162.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Honda AB và AB 160...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.  Phuộc sau RCB VD bình dầu dành cho AB có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.  Phuộc RCB VD cho Honda AB 2020 và AB 160 có chiều cao 335mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Mâm RCB 8 cây chính hãng cho Vario, Click", "number" => 138, "price" => 2800000, "like" => 9351, "image" => "phutung/163.jpg", "description" => "Mâm RCB 8 cây chính hãng cho Vario, Click, hàng khá hot trên thị trường, thiết kế 8 cây mảnh rất phù hợp với dáng xe nhỏ gọn như Vario, Click. Hàng RCB chất lượng tốt đã được nhiều biker tin dùng.  Mâm 8 cây RCB chính hãng cho Vario, Click có bản mâm là: 1.85 - 2.15  Mâm 8 cây RCB là hàng chính hãng RCB thương hiệu từ Malaysia. Mâm được bảo hành chính hãng 1 năm"],
            ["name" => "Bố thắng Frando 2pis chính hãng", "number" => 167, "price" => 350000, "like" => 6478, "image" => "phutung/164.jpg", "description" => "Bố thắng Frando 2pis chính hãng dành cho các dòng heo 2 pis đối xứng như: Frando, Brembo, RCB, Anchor...hàng chính hãng cao cấp rất an toàn, bền, không hại đĩa thắng, phù hợp sử dụng cho các dòng heo dầu cao cấp.  Bố thắng Frando chính hãng 2 pis sản xuất tại Taiwan."],
            ["name" => "Phuộc RCB MB2 chính hãng cho Vario, Click", "number" => 598, "price" => 1200000, "like" => 6174, "image" => "phutung/165.jpg", "description" => "Phuộc RCB MB2 chính hãng bình dầu cho Vario, Click...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Phuộc Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành 
Phuộc sau RCB MB2 hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng. 
Phuộc RCB MB2 cao 330mm gắn được cho Vario, Click hoặc Vision, Lead cần khoét nhựa ngay bình dầu... Phuộc có 3 màu: đỏ, vàng, đen."],
            ["name" => "Phuộc RCB VS chính hãng cho Vario, Click (ty vàng)", "number" => 737, "price" => 2320000, "like" => 2837, "image" => "phutung/166.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm loxo để thay thế rất tiện lợi. Đặc biệt dòng này thiết kế ty mạ vàng nhìn rất sang và đẹp.
 Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình.
 Phuộc RCB VS cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VS chính hãng cho Vario, Click", "number" => 641, "price" => 2040000, "like" => 972, "image" => "phutung/167.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm loxo để thay thế rất tiện lợi.
 Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình. Phuộc RCB VS có màu: đỏ, vàng
 Phuộc RCB VS cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Pô R8 chính hãng cho Vario, Click 2017", "number" => 656, "price" => 1800000, "like" => 842, "image" => "phutung/168.jpg", "description" => "Pô R8 cho Vario, Click mẫu 2017, tiếng pô nghe rất ấm, phù hợp cho bạn nào đi xe zin hay làm pô xăng lửa bài nhẹ. Pô R8 giả zin có lợi thế ít bị chú ý khi ra đường  Pô R8 chính hãng full cổ gắn Vario/Click mẫu cũ mà không cần phải chế gì thêm. Miễn phí công gắn tại shop2banh."],
            ["name" => "Dè con chắn bùn sau chính hãng Honda cho AB 2020, Vario, Click", "number" => 476, "price" => 220000, "like" => 8196, "image" => "phutung/169.jpg", "description" => "Bộ dè con chắn bùn sau chính hãng Honda cho AB 2020, Click, Vario các đời, thiết kế khá đẹp, gọn gàng phù hợp với xe hơn loại trước.  
Dè con chắn bùn chính hãng Honda Air Blade 2020 gắn Click Thái, Vario 125/150 có tính năng chắn bùn, nước văng lên chân người ngồi sau. Rất phù hợp khi mùa mưa đang đến. 
Bộ dè con chắn bùn sau chính hãng Honda gồm 3 món: dè chắn bùn, bình nước mát và nắp che bình nước mát, gắn vừa khít cho xe Air Blade 2020, Click và Vario."],
            ["name" => "Cần số 2 chiều cho Exciter 135", "number" => 209, "price" => 90000, "like" => 4040, "image" => "phutung/170.jpg", "description" => "Cần số 2 chiều dành cho xe Exciter 135 (2011 - 2015), mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng hay mang giày tây, thể thao..."],
            ["name" => "Hộp đựng đồ AB 2020 - 2022, Hộc đựng đồ AB 2020 - 2022", "number" => 825, "price" => 95000, "like" => 375, "image" => "phutung/171.jpg", "description" => "Hộp đựng đồ xe AB 2020 - 2022mới, sản phẩm rất tiện ích dành cho xe có thể đựng găng tay, chìa khoá, các thứ nhỏ hay móc ra vào.  Hộp đựng đồ xe AB 2020 - 2022 làm bằng nhựa cao cấp rất bền, chắc chắn."],
            ["name" => "Baga inox 10ly màu Titan cho AB 2020", "number" => 481, "price" => 190000, "like" => 1742, "image" => "phutung/172.jpg", "description" => "Baga inox 10ly màu titan cho Air Blade 2020 với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy."],
            ["name" => "Baga inox 10ly sơn đen tĩnh điện cho AB 2020", "number" => 267, "price" => 190000, "like" => 8944, "image" => "phutung/173.jpg", "description" => "Baga inox 10ly đen tĩnh điện cho Air Blade 2020 với thiết kế sơn đen khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy."],
            ["name" => "Bố thắng đĩa Recto chính hãng cho heo Brembo", "number" => 313, "price" => 95000, "like" => 7174, "image" => "phutung/174.jpg", "description" => "Bố thắng đĩa Recto chính hãng dành cho các dòng heo 2 pis đối xứng như: Brembo, Frando, RCB...hàng chính hãng rất an toàn, bền, giá thành vô cùng hợp lí khi bố zin theo các loại heo dầu rất khó mua và đắt đỏ.  Bố thắng đĩa Recto chính hãng 2 pis sản xuất tại Thái Lan."],
            ["name" => "Thảm lót chân Air Blade 2020", "number" => 550, "price" => 70000, "like" => 1365, "image" => "phutung/175.png", "description" => "Thảm lót chân cho xe Air Blade 2020 mẫu mới khá đẹp, cao su dày chất lượng khá tốt.  Thảm lót chân AB 2020 giúp cho xe luôn sạch sẽ, chống trầy sàn và còn có thể trang điểm cho xế yêu của bạn đẹp hơn."],
            ["name" => "Phuộc RCB VD chính hãng cho Sirius, Jupiter", "number" => 667, "price" => 5170000, "like" => 3368, "image" => "phutung/176.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Sirius, Jupiter, Taurus...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế.
 Phuộc sau RCB VD bình dầu có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc. Phuộc VD có màu: đỏ, vàng, đen
 Phuộc RCB VD cho Sirius, Jupiter có chiều cao 275mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VD chính hãng cho Wave, Dream, Future", "number" => 662, "price" => 5170000, "like" => 685, "image" => "phutung/177.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế.
 Phuộc sau RCB VD bình dầu có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc. Phuộc VD có màu: đỏ, vàng, đen
 Phuộc RCB VD cho Wave, Dream có chiều cao 335mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Heo dầu trước RCB S2 chính hãng cho Raider, Satria", "number" => 753, "price" => 1000000, "like" => 6557, "image" => "phutung/178.jpg", "description" => "Heo dầu trước RCB S2 chính hãng 1pis mẫu mới nhất dành cho Suzuki Raider, Satria, full bộ có đầy đủ pát gắn như zin mà không cần chế cháo.  Heo dầu thắng đĩa trước RCB S2 chính hãng được thiết kế khá đẹp, giá thành lại cực tốt, vừa là món phụ tùng trang trí vừa có thể thay thế đồ zin rất chuẩn.  Heo dầu trước RCB S2  cho Raider, Satria được bảo hành 6 tháng chính hãng Racingboy."],
            ["name" => "Heo dầu trước RCB S2 chính hãng cho Honda Winner, Wave S", "number" => 836, "price" => 1000000, "like" => 7519, "image" => "phutung/179.jpg", "description" => "Heo dầu trước RCB S2 1pis mẫu mới nhất dành cho Honda Winner, Wave S, full bộ có đầy đủ pát gắn như zin mà không cần chế cháo.  Heo dầu thắng đĩa trước RCB S2 chính hãng được thiết kế khá đẹp, giá thành lại cực tốt, vừa là món phụ tùng trang trí vừa có thể thay thế đồ zin rất chuẩn.  Heo dầu trước RCB S2 cho Winner, Wave S được bảo hành 6 tháng chính hãng Racingboy."],
            ["name" => "Heo dầu trước RCB S2 chính hãng cho Exciter 150", "number" => 529, "price" => 1000000, "like" => 322, "image" => "phutung/180.jpg", "description" => "Heo dầu trước RCB S2 chính hãng 1pis mẫu mới nhất dành cho Exciter 150, full bộ có đầy đủ pát gắn như zin mà không cần chế cháo. 
Heo dầu thắng đĩa trước RCB S2 chính hãng được thiết kế khá đẹp, giá thành lại cực tốt, vừa là món phụ tùng trang trí vừa có thể thay thế đồ zin rất chuẩn. 
Heo dầu trước RCB S2 cho Exciter 150 được bảo hành 6 tháng chính hãng RCB."],
            ["name" => "Phuộc YSS G-Sport (chính hãng) cho Exciter 150", "number" => 412, "price" => 4800000, "like" => 7924, "image" => "phutung/181.jpg", "description" => "Phuộc YSS G-Sport dòng cao cấp cho dòng xe Exciter 150...thiết kế mới nhất với bình dầu rời rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh nặng nhẹ, nhún rất êm ái khi vận hành. 
Phuộc YSS G-Sport đang là sản phẩm hot với giá thành hợp lí cho phân loại phuộc tăng chỉnh cao cấp. 
Phuộc YSS G-Sport cho Exciter 150 có 2 màu đỏ và vàng được bảo hành chính hãng 6 tháng, Phuộc YSS sản xuất tại Thái Lan."],
            ["name" => "Phuộc trước LCM cho Vario, Click ty vàng/titan", "number" => 284, "price" => 2200000, "like" => 7611, "image" => "phutung/182.jpg", "description" => "Phuộc trước LCM cho Vario mang thiết kế với ngoại hình to lớn đầy cứng cáp, ty phuộc màu vàng hoặc Titan rất nổi bật, khắc phục tiếng kêu cụp cụp từ các dòng xe Vario/Click vốn dĩ rất yếu, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc. 
Phuộc LCM quan trọng nhất là ráp như zin cho Vario/Click không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. 
Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Phuộc RCB VD (chính hãng) cho AB, PCX mẫu cũ", "number" => 729, "price" => 5170000, "like" => 4662, "image" => "phutung/183.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe AB, PCX mẫu cũ, SH Ý (cao hơn zin 1cm)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế.
 Phuộc sau RCB VD bình dầu dành cho AB có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc. Phuộc VD có màu: đỏ, vàng, đen
 Phuộc RCB VD cho AB, PCX có chiều cao 320mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VS chính hãng cho Wave, Dream, Future, Axelo...", "number" => 584, "price" => 4080000, "like" => 9085, "image" => "phutung/184.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo, Viva...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế rất tiện lợi.  Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình. Phuộc RCB VS có màu: đỏ, vàng, titan.  Phuộc RCB VS cho Wave, Dream, Future có chiều cao 335mm. Bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VS ty vàng chính hãng cho Wave, Dream, Future, Axelo...", "number" => 347, "price" => 4600000, "like" => 7070, "image" => "phutung/185.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo, Viva...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.  Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình.  Phuộc RCB VS cho Wave, Dream, Future có chiều cao 335mm. Bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VD ty vàng chính hãng cho SHVN", "number" => 651, "price" => 5750000, "like" => 8610, "image" => "phutung/186.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe SHVN 2012-2020...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.  Phuộc sau RCB VD bình dầu dành cho SHVN có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.  Phuộc RCB VD cho SHVN có chiều cao 380mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB MB2 chính hãng cho Wave, Dream, Future, Axelo...", "number" => 395, "price" => 2320000, "like" => 7717, "image" => "phutung/187.jpg", "description" => "Phuộc RCB MB2 bình dầu cho Wave, Dream, Future, Axelo...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Phuộc Racingboy MB2 có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành  Phuộc sau RCB MB2 hàng chính hãng RACINGBOY. Thời gian bảo hành : 12 tháng.  Phuộc RCB MB2 cao 335mm gắn được cho Wave, Dream, Future, Axelo, Viva... Phuộc có 3 màu: đỏ, vàng, đen."],
            ["name" => "Phuộc RCB A2 (chính hãng) cho Sirius, Jupiter, ...", "number" => 112, "price" => 900000, "like" => 2177, "image" => "phutung/188.jpg", "description" => "Phuộc RCB A2 mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Giá thành hợp lí cho người sử dụng, phuộc Racingboy A2 có 7 nấc tăng chỉnh nặng nhẹ, cứng cáp, an toàn hơn so với phuộc zin  - Ty phuộc 7mm - Lò xo phuộc 4mm. Phuộc sau RCB A2 hàng chính hãng RACINGBOY. Thời gian bảo hành : 12 tháng.  Phuộc RCB A2 cao 275mm gắn được cho Sirius, Jupiter... Phuộc có 3 màu: đỏ, vàng đen."],
            ["name" => "Phuộc RCB A2 chính hãng cho Wave, Dream, Future", "number" => 275, "price" => 900000, "like" => 4766, "image" => "phutung/189.jpg", "description" => "Phuộc RCB A2 mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Giá thành hợp lí cho người sử dụng, phuộc Racingboy A2 có 7 nấc tăng chỉnh nặng nhẹ, cứng cáp, an toàn hơn so với phuộc zin  - Ty phuộc 7mm - Lò xo phuộc 4mm. Phuộc sau RCB A2 hàng chính hãng RACINGBOY. Thời gian bảo hành: 12 tháng.  Phuộc RCB A2 cao 335mm gắn được cho Wave, Dream, Future, Axelo, Viva... Phuộc có 3 màu: đỏ, vàng đen."],
            ["name" => "Phuộc trước LCM V1 cho Exciter 150, Exciter 155", "number" => 308, "price" => 4100000, "like" => 3417, "image" => "phutung/190.jpg", "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter 150, Exciter 155, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter 150, Exciter 155. 
Phuộc LCM V1 quan trọng nhất là ráp như zin cho Exciter 150, Exciter 155 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng sắt, pát, bạc đạn... 
Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Mâm RCB 5 cây (chính hãng) cho Exciter 150 bản 1.6-1.85", "number" => 703, "price" => 0, "like" => 1509, "image" => "phutung/191.jpg", "description" => "Mâm RCB  5 cây bản siêu nhỏ cho Exciter 150 với bản trước 1.6 sau 1.85 lên xe cực chất, dành cho Biker thích phong cách racing.
 Gắn lên xe như zin không cần chế cháo.
 Mâm RCB 5 cây Exciter 150 bản siêu nhỏ thích hợp anh em đi bánh nhỏ gọn, nhìn xe thanh thoát..
 Hàng chính hãng RCB. Bảo hành 6 tháng.
 Mâm Racingboy 5 cây cho Exciter 150 bản 1.6-1.85 có 2 Màu: Đen/Vàng"],
            ["name" => "Phuộc trước LCM cho Vario, Click", "number" => 543, "price" => 1800000, "like" => 3680, "image" => "phutung/192.jpg", "description" => "Phuộc trước LCM cho Vario mang thiết kế với ngoại hình to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Vario/Click vốn dĩ rất yếu, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc. 
Phuộc LCM quan trọng nhất là ráp như zin cho Vario/Click không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. 
Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Dĩa tải Akei 38T chính hãng cho Exciter 135", "number" => 610, "price" => 48000, "like" => 4232, "image" => "phutung/193.jpg", "description" => "Dĩa tải Akei 38T dành cho Exciter 135 mẫu mới được nhiều anh em Biker ưa chuộng. Chất liệu cực bền, cứng cáp, thích hợp đi sên to.  Dĩa Akei 38T là thông số zin theo xe EXciter 135 từ đời 2011, hàng chính hãng sản xuất tại Thái Lan."],
            ["name" => "Bộ vệ sinh lọc gió K&N (chính hãng)", "number" => 890, "price" => 550000, "like" => 7596, "image" => "phutung/194.jpg", "description" => "Bộ vệ sinh lọc gió K&N gồm 2 chai: 1 chai tẩy rửa và 1 chai phun xịt dầu phục hồi tấm lọc gió, có thể dùng cho tất cả các loại lọc gió lưới vĩnh viễn như: K&N, BMC, DNA.. giúp tẩy rửa lọc gió bẩn và phục hồi lại tính năng lọc gió như ban đầu. 
Bộ vệ sinh lọc gió K&N là hàng chính hãng của K&N made in USA."],
            ["name" => "Lọc gió K&N (chính hãng) cho SH Ý", "number" => 624, "price" => 1450000, "like" => 6653, "image" => "phutung/195.jpg", "description" => "Lọc gió K&N chính hãng dành cho SH Ý vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió K&N là loại lọc vĩnh cữu, có thể dễ dàng vệ sinh sử dụng lại 
Lọc gió K&N là hàng chính hãng K&N USA. 
Lọc gió K&N dùng cho SH Ý gắn như zin không chế cháo."],
            ["name" => "Lọc gió lưới thép độ dành cho SHVN", "number" => 338, "price" => 450000, "like" => 4700, "image" => "phutung/196.jpg", "description" => "Lọc gió lưới thép độ dành riêng cho SHVN, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió lưới thép độ cho SHVNi rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Phuộc RCB M2 cho Winner, Sonic (chính hãng)", "number" => 351, "price" => 1030000, "like" => 6862, "image" => "phutung/197.jpg", "description" => "Phuộc RCB M2 cho Winner, Sonic, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng 
Phuộc RCB M2 cao 225mm 
- Ty phuộc 10mm
- Lò xo phuộc 10mm
. Phuộc RCB M2 cho Winner, Sonic hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Lọc gió lưới thép độ dành cho Satria, Raider Fi", "number" => 238, "price" => 0, "like" => 1813, "image" => "phutung/198.jpeg", "description" => "Lọc gió lưới thép độ dành riêng cho Satria, Raider Fi , với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió lưới thép độ rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Lọc gió lưới thép độ dành cho SH300i", "number" => 788, "price" => 520000, "like" => 5633, "image" => "phutung/199.jpg", "description" => "Lọc gió lưới thép độ dành riêng cho SH300i, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió lưới thép độ cho SH300i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Lọc gió BMC (chính hãng) cho SH300i", "number" => 665, "price" => 1650000, "like" => 952, "image" => "phutung/200.jpg", "description" => "Lọc gió BMC (chính hãng) dành cho Honda SH300i, đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp  lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air. 
 Lọc gió BMC dành cho Honda SH300i được sản xuất tại Italy."],
            ["name" => "Cần số 2 chiều cho Honda Winner X", "number" => 343, "price" => 120000, "like" => 9503, "image" => "phutung/201.jpg", "description" => "Cần số 2 chiều dành cho xe Honda Winner X, mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng."],
            ["name" => "Lọc gió Uma (chính hãng) dành cho Vario, Click, Air Blade 125...", "number" => 455, "price" => 280000, "like" => 6049, "image" => "phutung/202.jpg", "description" => "Lọc gió Uma chính hãng dành cho Vario, Click, AB125...phụ tùng thay thế chuẩn cho lọc gió zin nguyên bản. Lọc gió Uma dạng mút giúp lọc gió sạch hơn dạng lọc giấy của Zin, thời gian sử dụng lâu hơn và có thể thổi bụi vệ sinh lại, khuyến cáo thay thế khi đi thời gian lâu quá dơ, không nên rửa, giặt. 
Lọc gió Uma là hàng chính hãng Uma Racing gắn vừa khít AB125, Vario, Click..."],
            ["name" => "Lọc gió lưới thép độ dành cho SH150 Ý", "number" => 292, "price" => 290000, "like" => 9259, "image" => "phutung/203.jpg", "description" => "Lọc gió lưới thép độ dành riêng cho SH150i Ý, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió lưới thép độ rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Sên vàng SSS 428HS (chính hãng) 10ly 130L", "number" => 401, "price" => 400000, "like" => 6032, "image" => "phutung/204.jpg", "description" => "Sên vàng SSS 428HS (chính hãng) 10ly được sản xuất tại Malaysia theo công nghệ Nhật Bản, thiết kế sên màu vàng rất độc đáo, độ bền và êm ái của thương hiệu SSS thì đã được nhiều người tin dùng.  Sên vàng SSS 428HS có độ dài 130 mắc, có thể gắn được nhiều loại xe số từ 150cc trở xuống."],
            ["name" => "Lọc gió lưới thép độ dành cho Winner, Winner X", "number" => 396, "price" => 240000, "like" => 5034, "image" => "phutung/205.jpg", "description" => "Lọc gió lưới thép độ dành riêng cho Winner, Winner X, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió lưới thép độ rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Baga 10ly màu Titan cho Winner X", "number" => 645, "price" => 200000, "like" => 4365, "image" => "phutung/206.jpg", "description" => "Baga 10 ly màu Titan xanh cho Winner x cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trày xe, đồng thời màu xanh titan giúp xe cứng cáp và tính thẩm mỹ cao. 
Baga 10 ly màu titan gắn vừa khít cho Winner X."],
            ["name" => "Baga 10ly tĩnh điện cho Winner X", "number" => 579, "price" => 190000, "like" => 2169, "image" => "phutung/207.jpg", "description" => "Baga 10 ly tĩnh điện đen cho Winner x cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trày xe, màu đen tĩnh điện giúp xe cứng cáp và tính thẩm mỹ cao. 
Baga 10 ly tĩnh điện gắn vừa khít cho Winner X."],
            ["name" => "Phuộc YSS G-Sport cho Vario, Click", "number" => 669, "price" => 3500000, "like" => 110, "image" => "phutung/208.jpg", "description" => "Phuộc YSS dòng G-Sport cao cấp cho các dòng xe tay ga Vario, Click...với thiết kế mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành.  Phuộc sau YSS G-Sport gắn Vario, Click mà không cần chế, khách muốn gắn cho Lead và Vision thì chêm Pô Air (ốp lọc gió) ra ngoài bằng con tán 8ly.   Phuộc YSS G-Sport cho Vario, Click được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Phuộc Ohlins Vario, Click chính hãng (HO 545) 2 loxo", "number" => 209, "price" => 0, "like" => 8736, "image" => "phutung/209.JPG", "description" => "Phuộc Ohlins Vario, Click chính hãng (HO 545) 2 loxo có núm rebound tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường.  Thương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN.  Phuộc sau Ohlins cho Vario, Click chính hãng (HO 545) 2 lò xo được bảo hành chính hãng 2 năm.  Phuộc Ohlins HO 545 (chính hãng) 2 lò xo cho Vario, Click và có thể gắn trên nhiều dòng xe 1 phuộc khác."],
            ["name" => "Dĩa tải nhôm 7 CNC 38T cho Raider Fi", "number" => 375, "price" => 165000, "like" => 8280, "image" => "phutung/210.jpg", "description" => "Dĩa tải CNC nhôm 7 siêu cứng, hàng cao cấp cho 38T cho Raider Fi, với các đường nét tiện cao cấp, chất liệu khá chắc chắn, bền nhưng vô cùng nhẹ, giúp xe vận hành khá êm ái.   Dĩa tải CNC vừa là món phụ tùng thay thế vừa là món đồ trang trí khá đẹp.  Dĩa tải nhôm 7 chất lượng hơn nhiều so với các loại nhôm 6 trên thị trường,  Dĩa tải CNC 38T gắn cho xe Raider Fi."],
            ["name" => "Bố thắng đĩa trước RCB chính hãng cho Vario, Click, AB, Vision, Lead...", "number" => 388, "price" => 90000, "like" => 1828, "image" => "phutung/211.jpg", "description" => "Bố thắng đĩa trước RCB chính hãng cho Click 125, Vario 125 2017 trở về trước, AB, Lead, Vision, SH Mode...chất lượng bố rất tốt, đảm bảo an toàn khi vận hành.  Bố thắng đĩa RCB gắn vừa xe Vario 125 - Click 125 2017 trở về trước, AB, Lead, Vision, SH Mode...."],
            ["name" => "Lọc gió Sum Racing (chính hãng) cho Vario, Click, AB...", "number" => 237, "price" => 450000, "like" => 808, "image" => "phutung/212.jpg", "description" => "Lọc gió Sum Racing (chính hãng) dành cho Vario,Click, AB - đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air.   Lọc gió Sum Racing gắn vừa cho Click, Vario, Air Blade mà không phải chế."],
            ["name" => "Baga 10ly tĩnh điện cho Raider, Satria Fi", "number" => 360, "price" => 200000, "like" => 7866, "image" => "phutung/213.jpg", "description" => "Baga 10ly sơn tĩnh điện cho Raider, Satria 150 Fi cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trầy xe. 
Baga 10ly tĩnh điện cho Raider, Satria 150 Fi được làm từ inox 10ly chuẩn khá dày và nước sơn tĩnh điện khá tốt, vẻ đẹp thẩm mỹ cao."],
            ["name" => "Ốp pô zin Vario, Click 2019 (chính hãng)", "number" => 401, "price" => 170000, "like" => 6804, "image" => "phutung/214.jpg", "description" => "Ốp pô zin hàng chính hãng Honda dành cho Vario, Click 2019, phụ tùng thay thế không thể thiếu khi xe bị va quẹt trày hoặc gãy ốp pô zin. 
Ốp pô zin Vario, Click 2019 hàng chính hãng Honda sản xuất tại Thái Lan."],
            ["name" => "Phuộc RCB M2 cho Exciter 135 (chính hãng)", "number" => 224, "price" => 1030000, "like" => 9236, "image" => "phutung/215.jpg", "description" => "Phuộc RCB M2 cho Exciter 135, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng 
Phuộc RCB M2 cao 203mm có 1 màu đỏ
- Ty phuộc 10mm
- Lò xo phuộc 10mm.
Phuộc RCB M2 hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Phuộc RCB M2 cho Exciter 150 (chính hãng)", "number" => 588, "price" => 1030000, "like" => 6779, "image" => "phutung/216.jpg", "description" => "Phuộc RCB M2 cho Exciter 150, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng 
Phuộc RCB M2 cao 208mm 
- Ty phuộc 10mm
- Lò xo phuộc 10mm. Màu vàng 
Phuộc RCB M2 hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng Zhi.Pat cho Vision 2018", "number" => 633, "price" => 350000, "like" => 852, "image" => "phutung/217.jpg", "description" => "- Ốp lọc gió (pô air) trong suốt chính hãng Zhi.pat nhiều màu dành cho Vision 2018 Với thiết kế thích hợp cho các bạn cá tính
 
- Ốp lọc gió trong suốt chính hãng Zhi.Pat dành cho Vision 2018 có độ dày cao, nhẹ & trong suốt hoàn toàn.
 
- Ốp lọc gió trong suốt sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.
 
- Bảo hành chính hãng 12 tháng."],
            ["name" => "Nhông Akei 15T chính hãng cho Winner, Sonic", "number" => 224, "price" => 60000, "like" => 4970, "image" => "phutung/218.jpg", "description" => "Nhông Akei 15T chính hãng mới dành cho các dòng xe Sonic, Winner 150, Winner X giá thành khá hợp lí và chất lượng được nhiều khách hàng đánh giá khá tốt.  Nhông Akei 15T chính hãng sản xuất tại Thái Lan."],
            ["name" => "Nhông Akei 14T chính hãng cho Raider", "number" => 244, "price" => 80000, "like" => 330, "image" => "phutung/219.jpg", "description" => "Nhông Akei 14T chính hãng mới dành cho các dòng xe Raider, giá thành khá hợp lí và chất lượng được nhiều khách hàng đánh giá khá tốt.  Nhông Akei 14T chính hãng sản xuất tại Thái Lan."],
            ["name" => "Nhông Akei 14T chính hãng cho Exciter", "number" => 464, "price" => 60000, "like" => 8388, "image" => "phutung/220.jpg", "description" => "Nhông Akei 14T chính hãng mới dành cho các dòng xe Exciter 135 và 150, giá thành khá hợp lí và chất lượng được nhiều khách hàng đánh giá khá tốt.  Nhông Akei 14T chính hãng sản xuất tại Thái Lan."],
            ["name" => "Dĩa tải Akei 42T chính hãng cho Exciter 150", "number" => 313, "price" => 160000, "like" => 2149, "image" => "phutung/221.jpg", "description" => "Dĩa tải Akei 42T dành cho Exciter 150 mẫu mới được nhiều anh em Biker ưa chuộng. Chất liệu cực bền, cứng cáp, thích hợp đi sên to.  Dĩa Akei 42T chính hãng sản xuất tại Thái Lan."],
            ["name" => "Phuộc RCB C Series (chính hãng) cho AB125, PCX...", "number" => 841, "price" => 1470000, "like" => 3617, "image" => "phutung/222.jpg", "description" => "- Phuộc RCB C Series cho AB125, PCX thiết kế mới vô cùng sắc xảo, loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành. 
- Phuộc sau RCB C Series cho AirBlade 125 là Hàng chính hãng Racing Boy bảo hành 12 tháng.  - Ty phuộc 10mm - Lò xo phuộc 4mm.
- Phuộc RCB C Series gắn được cho Air Blade 125, PCX...với chiều cao 320mm bằng với phuộc zin."],
            ["name" => "Mặt nạ Click Thái chính hãng cho Vario 2018", "number" => 814, "price" => 350000, "like" => 4912, "image" => "phutung/223.jpg", "description" => "Mặt nạ Click Thái (chính hãng) cho Vario 2018, mặt nạ không có cái pat gắn biển số trước, giúp cho xe Vario nhìn gọn, đẹp hơn.  mặt nạ Click Thái là hàng chính hãng từ Honda Thái Lan"],
            ["name" => "Cục kêu báo Xi nhan ting tong Toyota Denso", "number" => 296, "price" => 90000, "like" => 9518, "image" => "phutung/224.jpg", "description" => "Cục kêu báo xinhan Toyota ting tong nghe rất hay, dùng để báo hiệu xe đang mở xinhan và nhắc nhở người dùng tắt xinhan khi ra khỏi cua quẹo. 
Cục kêu xi nhan ting tong Toyota Denso có thể gắn được nhiều loại xe."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng Zhi.Pat dành cho SHVN 2013 - 2019", "number" => 681, "price" => 420000, "like" => 9449, "image" => "phutung/225.jpg", "description" => "- Ốp lọc gió (pô air) trong suốt chính hãng Zhi.pat nhiều màu dành cho SHVN 2013 - 2019 Với thiết kế thích hợp cho các bạn cá tính.  - Ốp lọc gió trong suốt hoàn toàn, có độ dày cao và siêu nhẹ.  - Ốp lọc gió sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.   - Bảo hành chính hãng 12 tháng."],
            ["name" => "Bình dầu Nissin nắp nhôm CNC", "number" => 517, "price" => 150000, "like" => 7057, "image" => "phutung/226.jpg", "description" => "Bình dầu Nissin nắp nhôm CNC, hàng gia công CNC kiểu dáng cực đẹp, thiết kế nhỏ gọn, trong suốt chất lượng. 
Bình dầu Nissin nắp nhôm CNC gắn được tất cả các loại xe thắng đĩa trước sau..."],
            ["name" => "Lọc gió BMC (chính hãng) cho Vario, Click, AB", "number" => 663, "price" => 1350000, "like" => 9758, "image" => "phutung/227.jpg", "description" => "Lọc gió BMC (chính hãng) dành cho Vario,Click, AB - đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp  lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air.   Lọc gió BMC cho Click, Vario, Air Blade được sản xuất tại Italy."],
            ["name" => "Lọc nhớt K&N 303 dành cho các dòng xe Kawasaki", "number" => 610, "price" => 350000, "like" => 5745, "image" => "phutung/228.jpg", "description" => "Lọc nhớt K&N 303 được thiết kế cãi tiến khả năng lọc nhanh và sạch hơn, giúp thay thế lọc zin cho các dòng xe moto kawasaki. Chịu đựng được điều kiện khắc nghiệt.Có ron chống rò rỉ nhớt trong điều kiện hoạt động liên tục trong thời gian dài, đai ốc 17mm giúp tháo lắp dễ dàng.
 Lọc nhớt k&n 303 có thể lắp cho nhiều dòng xe thuộc hãng Kawasaki như: Kawasaki Z1000, Z800, Zx-10R, Z650, Ninja 300,..
 Lọc nhớt K&N 303 hàng chính hãng K&N, made in USA"],
            ["name" => "Lọc nhớt K&N 204 dành cho các dòng xe Honda, Yamaha", "number" => 614, "price" => 350000, "like" => 5247, "image" => "phutung/229.jpg", "description" => "Lọc nhớt K&N204 được thiết kế cải tiến khả năng lọc nhanh và sạch hơn, giúp thay thế lọc zin cho các dòng xe moto kawasaki. Chịu đựng được điều kiện khắc nghiệt.Có ron chống rò rỉ nhớt trong điều kiện hoạt động liên tục trong thời gian dài, đai ốc 17mm giúp tháo lắp dễ dàng.
 Lọc nhớt K&N 204 có thể lắp cho nhiều dòng xe thuộc hãng Honda, Yamaha như: Honda CRB1000RR, CB1000R, CRB600, SH350i...Yamaha YZF-R1, Yamaha R6, MT-07, YZF-R3, MT-03.
 Lọc nhớt K&N 204 hàng chính hãng K&N, made in USA."],
            ["name" => "Phuộc RCB E2 cho Exciter 150, Exciter 155 chính hãng cao 208mm", "number" => 877, "price" => 1570000, "like" => 1493, "image" => "phutung/230.jpg", "description" => "Phuộc RCB E2 không tăng chỉnh cho Exciter 150/ 155, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin.  - Chiều dài phuộc: 208mm.   - Ty phuộc 13mm.   - Lò xo phuộc 10mm  Phuộc sau RCB E2 cho Exciter 150/155 hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Phuộc RCB E2 cho Exciter 135 chính hãng cao 203mm", "number" => 161, "price" => 1570000, "like" => 7000, "image" => "phutung/231.jpg", "description" => "Phuộc RCB E2 không tăng chỉnh cho Exciter 135, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin.  - Chiều dài phuộc: 203mm.  - Ty phuộc 13mm - Lò xo phuộc 10mm.  Phuộc sau RCB E2 cho Exciter 135 hàng chính hãng RCB được bảo hành 1 năm."],
            ["name" => "Nhông sên dĩa DID vàng cho Suzuki Axelo", "number" => 116, "price" => 360000, "like" => 2800, "image" => "phutung/232.jpg", "description" => "Trọn bộ nhông sên đĩa DID gia công theo công nghệ DID Thái dành cho Suzuki Axelo với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin.   Nhông sên dĩa Axelo, màu vàng DID vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Bộ vệ sinh lọc gió BMC (chính hãng)", "number" => 195, "price" => 550000, "like" => 8477, "image" => "phutung/233.jpg", "description" => "Bộ vệ sinh lọc gió BMC gồm 2 chai: 1 chai tẩy rửa và 1 chai phun xịt dầu phục hồi tấm lọc gió, có thể dùng cho tất cả các loại lọc gió lưới vĩnh viễn như: K&N, BMC, DNA.. giúp tẩy rửa lọc gió bẩn và phục hồi lại tính năng lọc gió như ban đầu. 
Bộ vệ sinh lọc gió BMC là hàng chính hãng của BMC."],
            ["name" => "Lọc gió K&N HA-1213 chính hãng cho Click, Vario, SH Mode, PCX", "number" => 577, "price" => 1350000, "like" => 3124, "image" => "phutung/234.jpg", "description" => "Lọc gió K&N cho Click, Vario, SH Mode, PCX (loại đèn led)... vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió K&N là loại lọc vĩnh cữu, có thể dễ dàng vệ sinh sử dụng lại 
Lọc gió K&N hàng chính hãng K&N USA. 
Lọc gió K&N cho Click, Vario, SH Mode, PCX (loại đèn led)...gắn như zin."],
            ["name" => "Lọc gió BMC (chính hãng) cho SHVN 2012-2017", "number" => 605, "price" => 1490000, "like" => 6378, "image" => "phutung/235.jpg", "description" => "Lọc gió BMC chính hãng dành cho Honda SHVN 2012 - 2019, đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air. 
 Lọc gió BMC dành cho Honda SHVN được sản xuất tại Italy."],
            ["name" => "Mâm RCB 5 cây (chính hãng) cho Exciter 150 bản 1.85-2.5", "number" => 266, "price" => 0, "like" => 6717, "image" => "phutung/236.jpg", "description" => "Mã: 280013 
 Mâm RCB  5 cây bản nhỏ cho Exciter 150 với bản trước 1.85 sau 2.5 lên xe cực chất.  Gắn lên xe như zin không cần chế cháo.  Mâm RCB 5 cây Exciter 150 bản 2.5 thích hợp anh em đi bánh nhỏ gọn, nhìn xe thanh thoát..  Hàng chính hãng RCB. Bảo hành 6 tháng.  Mâm Racingboy 5 cây cho Exciter 150 có 2 Màu: Đen/Vàng"],
            ["name" => "Cao su bọc Smartkey Honda", "number" => 388, "price" => 50000, "like" => 9823, "image" => "phutung/237.jpg", "description" => "Cao su bọc Smartkey dành cho các xe hãng Honda sử dụng Smartkey, đồ bền gần như tuyệt đối, bảo vệ tốt các chìa Smartkey khỏi va đạp hư hỏng, trầy xước."],
            ["name" => "Ổ khoá Smartkey Honda chính hãng cho AB, SHVN, SH Mode, Click, Vario", "number" => 333, "price" => 3200000, "like" => 3784, "image" => "phutung/238.jpg", "description" => "Ổ khoá Smartkey Honda chính hãng  dành cho AB, SHVN, SH Mode, Click, Vario, Winner X, PCX, Lead, Vision với khả năng chống trộm xe máy ưu việt, sử dụng công nghệ remote nhận dạng chủ xe. 
 Khóa thông minh Honda Smartkey cho AirBlade, SH, Vario, SH Mode, Winner X  có tích hợp chức năng báo động khi xe bị di chuyển hoặc có lực tác động vào xe và tính năng xác định vị trí xe (Remote Response). 
 Honda Smartkey cho Vario, Click, PCX, Vision  đi kèm thiết bị điều khiển FOB có tác dụng trong các trường hợp cần mở khóa khẩn cấp hay khi cần cấp Thiết bị điều khiển FOB mới. 
 Giá khoá Smartkey chính hãng Honda  cho  SH Việt, SH Mode, Air Blade, Click Thái, Vario, Winner X, PCX, Lead, Vision đã bao gồm công lắp đặt và được bảo hành 6 tháng. 
Ổ khoá Smartkey Honda chính hãng gắn lên xe Vario, Click (mẫu cũ), SH Mode, SHVN đời 2012 đến 2016, Vision, Winner X mà không cần chế cháo, riêng với dòng xe AB125, Lead, PCX (các đời cũ chưa có smartkey) có nút mở xăng phía trước thì phải lấy lại nút mở yên và xăng trong bộ ổ khoá zin cũ gắn qua."],
            ["name" => "Bộ NSD SSS chính hãng cho Sirius, Jupiter (không Fi)", "number" => 359, "price" => 580000, "like" => 3738, "image" => "phutung/239.jpg", "description" => "Bộ NSD SSS hàng chính hãng dành cho Sirius, Jupiter không Fi, được Malaysia sản xuất theo công nghệ của Nhật. Thương hiệu SSS này từ lâu đã được khách hàng tin dùng.  Bộ nhông sên dĩa SSS cho Sirius, Jupiter không Fi làm bằng hợp kim thép vô cùng bền và dùng sên 10ly."],
            ["name" => "Bộ NSD SSS chính hãng cho Honda Wave, Dream, Future", "number" => 640, "price" => 580000, "like" => 5815, "image" => "phutung/240.jpg", "description" => "Bộ NSD SSS hàng chính hãng dành cho Honda Wave, Dream, Future được Malaysia sản xuất theo công nghệ của Nhật. Thương hiệu SSS này từ lâu đã được khách hàng tin dùng.  Bộ nhông sên dĩa SSS cho Wave, Dream, Future làm bằng hợp kim thép vô cùng bền và dùng sên 10ly."],
            ["name" => "Bộ NSD SSS chính hãng cho Yamaha Exciter 135", "number" => 281, "price" => 590000, "like" => 3194, "image" => "phutung/241.jpg", "description" => "Bộ NSD SSS hàng chính hãng dành cho Exciter 135, được Malaysia sản xuất theo công nghệ của Nhật. Thương hiệu SSS này từ lâu đã được khách hàng tin dùng.  Bộ nhông sên dĩa SSS cho Exciter 135 làm bằng hợp kim thép vô cùng bền và dùng sên 10ly."],
            ["name" => "Bộ NSD SSS chính hãng cho Honda Winner 150", "number" => 427, "price" => 0, "like" => 3489, "image" => "phutung/242.jpg", "description" => "Bộ NSD SSS hàng chính hãng dành cho Winner 150, Winner X được Malaysia sản xuất theo công nghệ của Nhật. Thương hiệu SSS này từ lâu đã được khách hàng tin dùng.  Bộ nhông sên dĩa SSS Winner 150 làm bằng hợp kim thép vô cùng bền và dùng sên 10ly."],
            ["name" => "Bộ NSD SSS chính hãng cho Yamaha Exciter 150", "number" => 190, "price" => 680000, "like" => 4100, "image" => "phutung/243.jpg", "description" => "Bộ NSD SSS hàng chính hãng dành cho Exciter 150, được Malaysia sản xuất theo công nghệ của Nhật. Thương hiệu SSS này từ lâu đã được khách hàng tin dùng.  Bộ nhông sên dĩa SSS Ex 150 làm bằng hợp kim thép vô cùng bền và dùng sên 10ly."],
            ["name" => "Dĩa Recto (chính hãng) cho Exciter 135", "number" => 297, "price" => 160000, "like" => 3160, "image" => "phutung/244.jpg", "description" => "Dĩa Recto hàng chính hãng dành cho Exciter 135. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.  Dĩa Recto hàng chính hãng Thái Lan"],
            ["name" => "Dĩa Recto (chính hãng) cho Exciter 150", "number" => 189, "price" => 190000, "like" => 3273, "image" => "phutung/245.jpg", "description" => "Dĩa Recto hàng chính hãng dành cho Exciter 150. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.  Dĩa Recto hàng chính hãng Thái Lan"],
            ["name" => "Dĩa Recto (chính hãng) cho Honda Winner", "number" => 671, "price" => 190000, "like" => 8080, "image" => "phutung/246.jpg", "description" => "Dĩa Recto hàng chính hãng dành cho Honda Winner 150, Winner X. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng.  Dĩa Recto hàng chính hãng Thái Lan"],
            ["name" => "Nhông Recto chính hãng 14T cho Exciter", "number" => 125, "price" => 65000, "like" => 3961, "image" => "phutung/247.jpg", "description" => "Nhông Recto 14T dành cho Exciter 150, Exciter 155, Exciter 135   Nhông Recto chính hãng đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn.  Nhông Recto hàng chính hãng Thái Lan."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng ZHI.PAT Cho Vario, Click, AB, SH Mode,...", "number" => 772, "price" => 350000, "like" => 3755, "image" => "phutung/248.jpg", "description" => "- Ốp pô Air trong suốt chính hãng Zhi.pat dành cho AB 125, Vario, Click Thái, Sh Mode (2015 - 2020), PCX (2016 - 2017).
 
- Ốp bầu lọc gió có độ dày cao, nhẹ & trong suốt hoàn toàn. sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, chịu nhiệt cao.
 
- Sản phẩm có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong."],
            ["name" => "Nhông sên dĩa DID vàng cho Sirius, Jupiter (không Fi)", "number" => 732, "price" => 340000, "like" => 6058, "image" => "phutung/249.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Sirius, Jupiter không Fi với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Nhông sên dĩa DID vàng cho Sirius Fi, Jupiter Fi", "number" => 365, "price" => 360000, "like" => 6782, "image" => "phutung/250.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Sirius Fi, Jupiter Fi ới độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Lọc gió DNA (chính hãng) dành cho Honda SH300i", "number" => 605, "price" => 0, "like" => 4225, "image" => "phutung/251.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Honda SH300i, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió DNA cho SH300i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. 
Lọc gió SH300i hàng chính hãng DNA sản xuất tại Hy Lạp."],
            ["name" => "Phuộc YSS bình dầu dưới chính hãng cho Vario, Click, Lead, Vision.", "number" => 182, "price" => 2200000, "like" => 4594, "image" => "phutung/252.jpg", "description" => "Phuộc YSS bình dầu nằm dưới cho các dòng xe tay ga Vario, Click, SH mode...với thiết kế mới nhất với bình dầu nằm dưới khá đẹp, tính năng êm ái khi vận hành.  Phuộc YSS chính hãng sản xuất tại Thái Lan.  Phuộc YSS bình dầu dưới cho Vario, Click mà không cần chế, khách muốn gắn cho Lead và Vision thì chêm Pô Air (ốp lọc gió) ra ngoài bằng con tán 8ly.   Phuộc sau YSS được bảo hành chính hãng 6 tháng."],
            ["name" => "Phuộc YSS bình dầu trên chính hãng cho Click, Vario, Lead, Vision", "number" => 116, "price" => 2200000, "like" => 999, "image" => "phutung/253.jpg", "description" => "Phuộc YSS bình dầu trên cho các dòng xe tay ga Click, Vario...với thiết kế mới nhất vớii bình dầu nằm trên khá đẹp, tính năng êm ái khi vận hành. 
Phuộc YSS chính hãng sản xuất tại Thái Lan. 
Phuộc YSS bình dầu trên cho Vario, Click mà không cần chế, khách muốn gắn cho Lead và Vision thì chêm Pô Air (ốp lọc gió) ra ngoài bằng con tán 8ly.  
Phuộc sau YSS được bảo hành chính hãng 6 tháng."],
            ["name" => "Lọc gió DNA chính hãng dành cho Honda SH Ý", "number" => 250, "price" => 1200000, "like" => 8162, "image" => "phutung/254.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Honda SH Ý, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió DNA rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. 
Lọc gió DNA chính hãng sản xuất tại Hy Lạp."],
            ["name" => "Lọc gió DNA (chính hãng) dành cho Honda Air Blade 125, Click, Vario, PCX, SH Mode", "number" => 829, "price" => 0, "like" => 6277, "image" => "phutung/255.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Honda Air Blade 125, Click Vario, PCX, SH Mode, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió DNA rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. 
Lọc gió DNA chính hãng sản xuất tại Hy Lạp."],
            ["name" => "Lọc gió DNA (chính hãng) dành cho Exciter 150", "number" => 502, "price" => 950000, "like" => 9194, "image" => "phutung/256.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Exicter 150, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió DNA rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. 
Lọc gió DNA chính hãng sản xuất tại Hy Lạp."],
            ["name" => "Lọc gió DNA (chính hãng) dành cho Honda Winner, Sonic", "number" => 368, "price" => 0, "like" => 1145, "image" => "phutung/257.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Honda Winner, Sonic, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió DNA rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. 
Lọc gió DNA chính hãng sản xuất tại Hy Lạp."],
            ["name" => "Bố thắng đĩa sau RCB chính hãng cho Honda Winner", "number" => 601, "price" => 90000, "like" => 2770, "image" => "phutung/258.jpg", "description" => "Bố thắng đĩa sau RCB chính hãng cho Winner với lốp bố chất lượng, êm ái khi sử dụng, đảm bảo an toàn khi vận hành.  Bố thắng đĩa RCB khá an toàn, tránh làm tổn hại đĩa thắng một cách tối đa.  Bố thắng đĩa RCB sau gắn vừa xe Winner 150, Winner X."],
            ["name" => "Bố thắng đĩa trước RCB chính hãng cho Winner, Sonic, Wave 110,...", "number" => 879, "price" => 90000, "like" => 4957, "image" => "phutung/259.png", "description" => "Bố thắng đĩa trước RCB chính hãng cho Winner, Sonic, Wave 110,... với lốp bố chất lượng, êm ái khi sử dụng.  Bố thắng đĩa RCB khá an toàn, tránh làm tổn hại đĩa thắng một cách tối đa."],
            ["name" => "Ốp pô SH 300i ZHIPAT cho SH300i, SH 125i/150i 2017", "number" => 737, "price" => 680000, "like" => 6624, "image" => "phutung/260.jpg", "description" => "Ốp pô thay thế zin của xe SH300i thương hiệu ZHIPAT hoặc trang trí thêm cho SH 125i/150i 2017. Với chất liệu nhựa ABS kết hợp với inox chắc chắn sẽ bảo vệ phần pô gần như tuyệt đối. 
Ốp pô SH 300i ZHIPAT cho SH300i, SH 125i/150i 2017 được cho là món phụ tùng thay thế hoàn hảo cho ốp pô zin theo xe bị hư, cũ... 
Ốp pô zin SH300i ZHIPAT gắn được cho tất cả loại xe SH300i từ đới 2007 đến 2017 và SH 125i/150i 2017. Hàng chính hãng của thương hiệu ZHIPAT."],
            ["name" => "Dĩa Hodaka 39T cho Yamaha Exciter 135", "number" => 897, "price" => 160000, "like" => 9284, "image" => "phutung/261.jpg", "description" => "Dĩa Hodaka chính hãng dành cho Yamaha Exciter 135 có size 38T, 39T, độ bền của Hodaka rất tuyệt vời và đã được nhiều khách hàng kiểm chứng.  Dĩa Hodaka được sản xuất tại Malaysia."],
            ["name" => "Dĩa Hodaka cho Yamaha Exciter 150", "number" => 269, "price" => 220000, "like" => 5081, "image" => "phutung/262.jpg", "description" => "Dĩa Hodaka chính hãng dành cho Yamaha Exciter 150 size 42 - 43, độ bền của Hodaka rất tuyệt vời và đã được nhiều khách hàng kiểm chứng.  Dĩa Hodaka được sản xuất tại Malaysia."],
            ["name" => "Dĩa Hodaka cho Suzuki Raider", "number" => 878, "price" => 72000, "like" => 3386, "image" => "phutung/263.jpg", "description" => "Dĩa Hodaka chính hãng dành cho Suzuki Raider xăng cơ 4T, độ bền của Hodaka rất tuyệt vời và đã được nhiều khách hàng kiểm chứng.  Dĩa Hodaka được sản xuất tại Malaysia"],
            ["name" => "Dĩa Hodaka cho Honda Winner", "number" => 550, "price" => 240000, "like" => 641, "image" => "phutung/264.jpg", "description" => "Dĩa Hodaka chính hãng dành cho Honda Winner, độ bền của Hodaka rất tuyệt vời và đã được nhiều khách hàng kiểm chứng.  Dĩa Hodaka được sản xuất tại Malaysia"],
            ["name" => "Nhông Hodaka 14T cho Exciter", "number" => 368, "price" => 70000, "like" => 1098, "image" => "phutung/265.jpg", "description" => "Nhông Hodaka 14T dành cho các dòng xe Exciter, được sản xuất tại Malaysia, chất lượng đã được nhiều người tiêu dùng kiểm nghiệm rất chuẩn.  Nhông Hodaka 14T dành cho các dòng xe Exciter 150, Exciter 155, Exciter 135."],
            ["name" => "Cọ chà sên", "number" => 161, "price" => 50000, "like" => 8753, "image" => "phutung/266.jpg", "description" => "Cọ chà sên chuyên dùng, dùng để chà cho sên sạch hơn, cọ chà sên có 3 mặt giúp thao tác chà nhanh gọn hơn. thích hợp sử dụng chung với các dung dịch tẩy rửa vệ sinh sên."],
            ["name" => "Pô Leovince Corsa Carbon (chính hãng)", "number" => 623, "price" => 3600000, "like" => 4942, "image" => "phutung/267.jpg", "description" => "Pô Leovince Corsa Carbon, hàng chính hãng của thương hiệu Leovince, tiếng kêu trầm ấm, uy lực, mẫu mã đẹp, bắt mắt khi gắn lên xe. 
Pô Leovince Corsa Carbon với thân pô làm bằng Carbon siêu bền, chống nóng khi vận hành xa. 
Pô Leovince Corsa Carbon có full bộ cổ pát gắn cho xe Exciter."],
            ["name" => "Pô Leovince Corsa Evo (chính hãng)", "number" => 829, "price" => 0, "like" => 7074, "image" => "phutung/268.jpg", "description" => "Pô Leovince Corsa Evo, hàng chính hãng của thương hiệu Leovince, tiếng kêu trầm ấm, uy lực, mẫu mã đẹp, bắt mắt khi gắn lên xe. 
Pô Leovince Corsa Evo với thân pô làm bằng Carbon siêu bền, chống nóng khi vận hành xa. 
Pô Leovince Corsa Evo có full bộ cổ pát gắn cho xe Exciter và có thể chế gắn nhiều loại xe khác."],
            ["name" => "Dĩa tải DID vàng cho Exciter 150", "number" => 653, "price" => 57000, "like" => 2358, "image" => "phutung/269.jpg", "description" => "Đĩa tải DID xoáy vàng  cho Exciter 150, hàng gia công theo công nghệ DID Thái Lan, độ bền chuẩn và màu váng khá đẹp."],
            ["name" => "Lá bố Redleo cho Exciter 135", "number" => 474, "price" => 230000, "like" => 8192, "image" => "phutung/270.JPG", "description" => "Bộ lá bố Redleo cho Exciter 135 với độ dày hơn lá bố zin, giúp nồi bắt, xe vận hành nhẹ nhàng hơn rất nhiều.  Bộ lá bố Redleo dùng cho Exciter 135."],
            ["name" => "Phuộc RCB C Series chính hãng cho Sirius, Jupiter, Taurus,...", "number" => 475, "price" => 1470000, "like" => 5944, "image" => "phutung/271.jpg", "description" => "- Phuộc RCB C Series thiết kế vô cùng sắc xảo, loxo phuộc to, chắc chắn.  - Hàng chính hãng Racing Boy bảo hành 12 tháng. - Ty phuộc 10mm - Lò xo phuộc 4mm. - Phuộc sau RCB C Series gắn được cho Sirius, Jupiter, Taurus...."],
            ["name" => "Phuộc RCB C Series chính hãng cho Wave, Dream, Future, Axelo,...", "number" => 659, "price" => 1470000, "like" => 6583, "image" => "phutung/272.jpg", "description" => "- Phuộc RCB C Series thiết kế vô cùng sắc xảo, loxo phuộc to, chắc chắn.  - Hàng chính hãng Racing Boy bảo hành 12 tháng.  - Ty phuộc 10mm - Lò xo phuộc 4mm. - Phuộc sau RCB C Series gắn được cho Wave, Dream, Future, Axelo...."],
            ["name" => "Nhông sên dĩa DID vàng cho Wave, Dream", "number" => 636, "price" => 340000, "like" => 5786, "image" => "phutung/273.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Wave/Dream với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin.   Nhông sên dĩa Wave, Dream màu vàng DID vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Nhông sên dĩa DID vàng cho Honda Winner 150, Winner X", "number" => 852, "price" => 510000, "like" => 4081, "image" => "phutung/274.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Honda Winner 150, Winner X với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin.   Nhông sên dĩa Winner màu vàng DID vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Nhông sên dĩa DID vàng cho Wave RS, Future", "number" => 629, "price" => 360000, "like" => 8240, "image" => "phutung/275.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Wave RS, Future với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Nhông sên dĩa DID vàng cho Exciter 150", "number" => 618, "price" => 460000, "like" => 6596, "image" => "phutung/276.jpg", "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Exciter 150 với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin.  Nhông sên dĩa Exciter 150 màu vàng DID vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Nhông sên dĩa DID vàng cho Exciter 135", "number" => 103, "price" => 360000, "like" => 7219, "image" => "phutung/277.jpg", "description" => "Trọn bộ nhông sên đĩa DID gia công theo công nghệ DID Thái dành cho Exciter 135 với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin.   Nhông sên dĩa Exciter 135, màu vàng DID vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."],
            ["name" => "Ốp pô Click Thái", "number" => 659, "price" => 90000, "like" => 1493, "image" => "phutung/278.JPG", "description" => "Ốp pô Click Thái"],
            ["name" => "Lọc nhớt chính hãng SUZUKI AXELO 125", "number" => 642, "price" => 60000, "like" => 4008, "image" => "phutung/279.jpg", "description" => "Lọc nhớt SUZUKI AXELO 125, hàng chính hãng Suzuki Indonesia."],
            ["name" => "Sên vàng DID 9 ly 428D (chính hãng) 130 mắc", "number" => 240, "price" => 0, "like" => 5984, "image" => "phutung/280.jpg", "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay."],
            ["name" => "Sên vàng DID 10 ly 428HD (chính hãng) 130 mắc", "number" => 159, "price" => 640000, "like" => 736, "image" => "phutung/281.jpg", "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay."],
            ["name" => "Lọc nhớt chính hãng Suzuki Raider 150/ Satria F 150/ Belang 150/ FX 125/ VIVA 110", "number" => 400, "price" => 55000, "like" => 4991, "image" => "phutung/282.jpg", "description" => "Lọc nhớt chính hãng Suzuki Raider 150/ Satria F 150/ Belang 150/ FX 125/ VIVA 110, hàng chính hãng Indonesia"],
            ["name" => "Nhông Hodaka 15T cho Winner", "number" => 410, "price" => 0, "like" => 6570, "image" => "phutung/283.jpg", "description" => "Mã: 060011   Nhông Hodaka 15T dành cho các dòng xe Winner, được sản xuất tại Malaysia, chất lượng đã được nhiều người tiêu dùng kiểm nghiệm rất chuẩn.  Nhông Hodaka 15T dành cho các dòng xe Winner 150, Winner X, Sonic 150"],
            ["name" => "Lọc gió BMC (chính hãng) cho Yamaha NVX", "number" => 732, "price" => 0, "like" => 3399, "image" => "phutung/284.jpg", "description" => "Lọc gió BMC (chính hãng) dành cho Yamaha NVX, đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp  lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air. 
 Lọc gió BMC được sản xuất tại Italy."],
            ["name" => "Pô STB giả zin cho Winner, Winner X", "number" => 157, "price" => 0, "like" => 3453, "image" => "phutung/285.jpg", "description" => "Pô STB giả zin cho Winner, Winner X, với kiểu giống y chang pô zin Winner X, dành cho các anh em Winner cũ muốn gắn pô Winner X với âm thanh hay hơn và đặc biệt ít bị chú ý khi lưu thông. 
Pô STB giả zin Winner X gồm cổ và pô gắn vừa khít cho Winner và WInner X mà không cần chế cháo thêm. 
Pô STB giả zin Winner X có xuất xứ từ Đài Loan."],
            ["name" => "Heo dầu Anchor Billet 2pis (chính hãng)", "number" => 804, "price" => 0, "like" => 7509, "image" => "phutung/286.jpg", "description" => "Heo dầu Anchor Billet 2 Piston đối xứng được gia công CNC sắc sảo tường chi tiết, thiết kế rất đẹp kết hợp với 2 Piston 34mm tăng thêm lực thắng đảm bảo an toàn khi xe đang vận hành với tốc độ cao. 
Heo dầu Anchor có thể chế pát gắn tất cả loại xe. 
Heo dầu Anchor Billet  2pis chính hãng, made in Taiwan."],
            ["name" => "Lọc gió K&N (chính hãng) cho SH300i", "number" => 619, "price" => 1300000, "like" => 2936, "image" => "phutung/287.jpg", "description" => "Lọc gió K&N chính hãng dành cho SH300i vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió K&N là loại lọc vĩnh cữu, có thể dễ dàng vệ sinh sử dụng lại 
Lọc gió K&N là hàng chính hãng K&N USA. 
Lọc gió K&N dùng cho SH300i gắn như zin không chế cháo."],
            ["name" => "Mâm Chemco Penta chính hãng cho Vario, Click", "number" => 461, "price" => 0, "like" => 3945, "image" => "phutung/288.jpg", "description" => "Mâm Chemco Penta chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. 
Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. 
Mâm nhôm với đường nét CNC sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. 
Mâm Chemco Penta chính hãng cho Vario, Click kích thước 14 inch, bản mâm 2.15 - 2.5, được sản xuất tại Indonesia."],
            ["name" => "Lọc gió K&N (chính hãng) cho SHVN", "number" => 752, "price" => 1350000, "like" => 6687, "image" => "phutung/289.jpg", "description" => "Lọc gió K&N chính hãng dành cho SHVN vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió K&N là loại lọc vĩnh cữu, có thể dễ dàng vệ sinh sử dụng lại 
Lọc gió K&N là hàng chính hãng K&N USA. 
Lọc gió K&N dùng cho SHVN gắn như zin không chế cháo."],
            ["name" => "Mâm Chemco Evo chính hãng cho Vario, Click", "number" => 461, "price" => 0, "like" => 1180, "image" => "phutung/290.jpg", "description" => "Mâm Chemco Evo chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. 
Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. 
Mâm nhôm với đường nét CNC sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. 
Mâm Chemco Evo chính hãng cho Vario, Click kích thước 14 inch, bản mâm 2.15 - 2.5, được sản xuất tại Indonesia."],
            ["name" => "Áo trùm K&N (chính hãng)", "number" => 833, "price" => 0, "like" => 6160, "image" => "phutung/291.jpg", "description" => "Áo trùm K&N chính hãng, sản phẩm không thể thiếu dành cho các Biker đi lọc gió độ hình trụ rời, chức năng chống nước cực tốt, đảm bảo vận hành an toàn trong điều kiện mưa gió hoặc rửa xe lỡ xịt nước văng vào lọc gió. 
Áo trùm K&N hàng chính hãng K&N USA, gắn được các loại lọc gió độ hình trụ."],
            ["name" => "Mâm Power Evo chính hãng cho Vario, Click", "number" => 511, "price" => 0, "like" => 6218, "image" => "phutung/292.jpeg", "description" => "Mâm Power Evo chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm nhiều chi tiết với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. 
Mâm Power Evo chính hãng cho Vario, Click được sản xuất tại Indonesia."],
            ["name" => "Mâm Power Star chính hãng cho Vario, Click", "number" => 555, "price" => 0, "like" => 1929, "image" => "phutung/293.jpg", "description" => "Mâm Power Star chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm hình sao với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. 
Mâm Power Star chính hãng cho Vario, Click được sản xuất tại Indonesia."],
            ["name" => "Mâm Power Millenium chính hãng cho Vario, Click", "number" => 424, "price" => 0, "like" => 7187, "image" => "phutung/294.jpg", "description" => "Mâm Power Millenium chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm hình chữ Y dày với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. 
Mâm Power Millenium chính hãng cho Vario, Click được sản xuất tại Indonesia."],
            ["name" => "Pô 4road 2009 hàng chuẩn full cổ pát cho SHVN 2020", "number" => 580, "price" => 0, "like" => 5102, "image" => "phutung/295.jpg", "description" => "Pô 4road 2009 hàng chuẩn 1:1 full cổ pát inox loại xịn cho SHVN 2020...âm thanh êm, chuẩn tiếng 4road, dàn ngoài như zin không cần bàn cải về vẻ đẹp. 
Pô 4road 2009 hàng 1:1 full bộ cổ pát inox loại xịn gắn lên SHVN 2020 mà không cần chế cháo."],
            ["name" => "Mâm RCB 5 cây (chính hãng) cho Exciter 150 bản lớn", "number" => 720, "price" => 0, "like" => 566, "image" => "phutung/296.jpg", "description" => "Mâm RCB  5 cây bản lớn cho Exciter 150 với bản trước 2.5 và sau 3.5 lên xe cực chất.
 Gắn lên xe như zin không cần chế cháo.
 Mâm RCB 5 cây Exciter 150 bản 2.5 và 3.5 thích hợp anh em đi bánh to trước sau, làm cho xe trở nên cứng cáp, vận hành ổn định khi chạy tốc độ, bánh to khá phù hợp với vóc dáng Exciter 150
 Hàng chính hãng RCB. Bảo hành 6 tháng.
 Mâm Racingboy 5 cây cho Exciter 150 có 2 Màu: Đen/Vàng"],
            ["name" => "Lọc gió K&N HA-1416 chính hãng cho Winner, Sonic", "number" => 686, "price" => 0, "like" => 1429, "image" => "phutung/297.jpg", "description" => "Lọc gió K&N HA-1416 cho Winner, Sonic vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió K&N là loại lọc vĩnh cữu, có thể dễ dàng vệ sinh sử dụng lại 
Lọc gió K&N HA-1416 hàng chính hãng K&N USA. 
Lọc gió K&N HA-1416 dùng cho Sonic, Winner 150, Winner X gắn như zin."],
            ["name" => "Dây dầu Adelin trước 750mm chính hãng", "number" => 708, "price" => 0, "like" => 185, "image" => "phutung/298.png", "description" => "Dây dầu Adelin chính hãng  giúp xe bạn thật nổi bật với nhiều màu sắc và bền chắc hơn dây dầu zin nguyên bản, nhiều lõi kim loại bên trong có khả năng chống cắt dây trộm heo dầu.  Hàng chính hãng Adelin, dây dầu có thể gắn tất cả loại xe đi thắng đĩa. Chiều dài 750mm, phù hợp cho khách hàng thích ngắn gọn."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng Zhi.Pat dành cho Honda ADV, PCX mới", "number" => 132, "price" => 0, "like" => 7106, "image" => "phutung/299.jpg", "description" => "- Ốp lọc gió (pô air) trong suốt chính hãng Zhi.Pat nhiều màu dành cho Honda ADV và PCX mới Với thiết kế thích hợp cho các bạn cá tính, nhìn trong suốt cực độc lạ. Ốp lọc gió trong suốt chính hãng Zhi.Pat có độ dày cao, chắc chắn, nhưng cũng rất nhẹ nhàng.
 
- Ốp lọc gió trong suốt Zhipat sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.
 
- Ốp lọc gió trong suốt cho Honda ADV, PCX mới hàng chính hãng Zhi.Pat được bảo hành chính hãng 12 tháng."],
            ["name" => "Ống nước RCB (chính hãng) cho Exciter 150", "number" => 407, "price" => 135000, "like" => 3525, "image" => "phutung/300.jpg", "description" => "Ống nước RCB chính hãng, sản phẩm mới được làm bằng 2 lớp: 
Phía bên trong là sợi chịu nhiệt cho độ bền cao hơn, ổn định khi sử dụng và tăng khả năng chịu áp lực nước qua ống tốt hơn. 
Phía bên ngoài là sợi Silicon cao cấp cho khả năng tách nhiệt tốt hơn không bị nóng khi chạm vào và chịu được tác động từ các chất tẩy rửa, nhiệt độ cao ở bộ phận động cơ cũng như thời tiết khắc nghiệt ở nước ta. 
Ống nước RCB chính hãng gắn được cho Exciter 150, và có 3 màu: xanh dương, xanh lá và đỏ."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng Zhi.Pat cho SH ý, @, Dylan, PS", "number" => 744, "price" => 0, "like" => 4254, "image" => "phutung/301.jpg", "description" => "- Ốp lọc gió (pô air) trong suốt chính hãng Zhi.Pat nhiều màu dành cho Honda SH Ý, PS, Dylan, @ mới, với thiết kế thích hợp cho các bạn cá tính, nhìn trong suốt cực độc lạ. Ốp lọc gió trong suốt chính hãng Zhi.Pat có độ dày cao, chắc chắn, nhưng cũng rất nhẹ nhàng.
 
- Ốp lọc gió trong suốt Zhipat sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.
 
- Ốp lọc gió trong suốt cho Honda SH Ý, PS, Dylan, @ mới hàng chính hãng Zhi.Pat được bảo hành chính hãng 12 tháng."],
            ["name" => "Mica đèn pha trước (chính hãng) cho Honda Vario, Click", "number" => 440, "price" => 500000, "like" => 5230, "image" => "phutung/302.jpg", "description" => "Mica đèn pha trước dành cho Honda Vario/Click, món phụ tùng thay thế cho xe bạn khi va quẹt nức, bể choá mà không cần thay nguyên cụm. 
Mica đèn pha trước là hàng chính hãng Honda Thái Lan."],
            ["name" => "Mica đèn hậu màu khói cho Honda Vario, Click", "number" => 332, "price" => 0, "like" => 3604, "image" => "phutung/303.jpg", "description" => "Mica đèn hậu màu khói cho Honda Vario, Click, sản phẩm cực đẹp, dùng để thay thế cho choá đèn zin bị nức, bể hoặc cho khách hàng thích xe mình ngầu hơn, cứng cáp hơn."],
            ["name" => "Phuộc Ohlins HO 817 chính hãng cho SH350i, SH300i", "number" => 518, "price" => 0, "like" => 3121, "image" => "phutung/304.jpg", "description" => "Phuộc Ohlins HO 817 chính hãng cho Honda SH300i, SH350i có đầy đủ núm rebound vs Compression tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường. 
Thương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế. 
Phuộc Ohlins HO 817 chính hãng cho Honda SH300i, SH350i được bảo hành chính hãng 2 năm. 
Phuộc Ohlins HO 817 chính hãng gắn vừa khít cho Honda SH300i, SH350i."],
            ["name" => "Phuộc RCB DB-2 Line (G-TI) chính hãng cho Raider, Satria", "number" => 167, "price" => 0, "like" => 1175, "image" => "phutung/305.jpg", "description" => "Mã: 070612  Phuộc RCB DB-2 Line (G-TI) chính hãng mẫu mới nhất dành cho Suzuki Raider, Satria có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó.  Phuộc RCB DB-2 Line (G-TI) cho Raider, Satria có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau..  Phuộc sau RCB DB-2 Line (G-TI) cho Raider, Satria cao 285mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."],
            ["name" => "Mâm RCB 6 cây chính hãng bản 1.6 cho Honda Winner", "number" => 279, "price" => 0, "like" => 478, "image" => "phutung/306.jpg", "description" => "Mâm RCB chính hãng 6 cây 2 đĩa bản nhỏ 1.6-1.6 dành cho Honda Winner, bản mâm nhỏ, làm xe thanh thoát hơn, phù hợp cho Biker thích đi xe nhỏ gọn. 
Mâm RCB Winner kích thước bản mâm bánh trước 1.6 và bánh sau 1.6. 
Mâm RCB 6 cây hàng chính hãng RCB gắn vừa Honda Winner, Winner X mà không cần chế cháo thêm."],
            ["name" => "Phuộc Ohlins HO 743 chính hãng cho Air Blade 2020", "number" => 138, "price" => 0, "like" => 8964, "image" => "phutung/307.jpg", "description" => "Phuộc Ohlins HO 743 dành cho Honda Air Blade 2020 chính hãng có đầy đủ núm rebound tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường. 
Thương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế. 
Phuộc Ohlins HO 743 chính hãng được bảo hành chính hãng 2 năm. 
Phuộc Ohlins HO 743 chính hãng cao 328mm gắn vừa khít cho Honda Air Blade từ 2020 trở lên, AB160."],
            ["name" => "Lọc gió K&N YA-1515 cho Exciter 150", "number" => 401, "price" => 0, "like" => 5137, "image" => "phutung/308.jpg", "description" => "Lọc gió K&N YA-1515 cho Exciter 150 vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường.  
Lọc gió K&N YA-1515 hàng chính hãng K&N USA. 
Lọc gió K&N YA-1515 dùng cho lọc gió Exciter 150."],
            ["name" => "Sên RK vàng 428SB - 132L chính hãng", "number" => 704, "price" => 0, "like" => 1450, "image" => "phutung/309.jpg", "description" => "Sên RK vàng 428SB - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. 
Sên RK vàng 428SB - 132L là loại sên 9ly không phốt, dài 132 mắc, sên vàng có lớp mạ rất đẹp, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường. 
Sên RK vàng 428SB - 132L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số, moto PKN"],
            ["name" => "Pô 4road 2009 hàng chuẩn full cổ pát cho Vario, Click, SHVN, SH Ý...", "number" => 273, "price" => 0, "like" => 9480, "image" => "phutung/310.jpg", "description" => "Pô 4road 2009 hàng chuẩn 1:1 full cổ pát cho Vario/Click, SHVN, SH Ý...âm thanh êm, chuẩn tiếng 4road, dàn ngoài như zin không cần bàn cải về vẻ đẹp. 
Pô 4road 2009 hàng 1:1 full bộ gắn lên Vario/Click, SHVN, SH Ý, mà không cần phải chế."],
            ["name" => "Phuộc RCB VE ty vàng 335mm cho AB 2020 chính hãng", "number" => 160, "price" => 0, "like" => 9755, "image" => "phutung/311.jpg", "description" => "Mã: 070855 

Phuộc RCB VE ty vàng chính hãng mẫu mới 2020 dành cho xe AB 2020 (Air Blade 2020) và AB 160...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu. Đặc biệt, phuộc có tặng kèm 2 loxo thay thế và được thiết kế ty phuộc mạ vàng rất đẹp.
 Phuộc RCB VE ty vàng cho AB 2020 và AB160 có chiều cao 335mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Lọc gió BMC chính hãng cho SH Ý", "number" => 654, "price" => 0, "like" => 3241, "image" => "phutung/312.jpg", "description" => "Lọc gió BMC chính hãng dành cho Honda SH Ý, Dylan, PS, đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air.   Lọc gió BMC dành cho Honda SH Ý được sản xuất tại Italy."],
            ["name" => "Phuộc RCB MB2 (chính hãng) cho Sirius, Jupiter, ...", "number" => 307, "price" => 0, "like" => 2439, "image" => "phutung/313.jpg", "description" => "Mã SP: 070500    Phuộc RCB MB2 bình dầu mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Phuộc Racingboy MB2 có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành  Phuộc sau RCB MB2 hàng chính hãng RACINGBOY. Thời gian bảo hành : 12 tháng.  Phuộc RCB MB2 cao 275mm gắn được cho Sirius, Jupiter... Phuộc có 3 màu: đỏ, vàng, đen."],
            ["name" => "Phuộc RCB (chính hãng) DB-2+ bình dầu cao cấp cho Exciter 150", "number" => 283, "price" => 0, "like" => 1117, "image" => "phutung/314.jpg", "description" => "Phuộc RCB DB-2+ chính hãng bình dầu loại cao cấp cho Exciter 150, với thiết kế hoàn toàn mới theo di chuyển sản xuất từ Châu Âu, các chi tiết làm khá tinh tế, phuộc có nút tăng chỉnh độ nhún nằm bên ngoài bình dầu và dưới chân phuộc dễ dàng canh chỉnh khi vận hành phù hợp cho mọi cung đường. 
Phuộc sau RCB DB-2+ cho Exciter 150 có tặng kèm thêm loxo phụ để sẵn sàng thay thế hoặc để sơn lại màu khác cho tiện thay đổi rất tiện lợi. 
Phuộc RCB DB-2+ cho Exciter 150 có chiều cao 208mm, được bảo hành chính hãng 12 tháng."],
            ["name" => "Phuộc RCB VS ty vàng chính hãng cho AB 2020, AB160", "number" => 876, "price" => 0, "like" => 7620, "image" => "phutung/315.jpg", "description" => "Mã: 070508  
Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe AB 2020 mới, AB 160 mới, PCX...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.
 Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình.
 Phuộc RCB VS cho Air Blade  2020 và AB 160 cao 335mm và được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VS (chính hãng) cho Sirius, Jupiter", "number" => 822, "price" => 0, "like" => 7101, "image" => "phutung/316.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Sirius, Jupiter...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế rất tiện lợi.
 Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình. Phuộc RCB VS có màu: đỏ, vàng, titan.
 Phuộc RCB VS cho Sirius, Jupiter có chiều cao 275mm. Bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB VS (chính hãng) cho SHVN", "number" => 399, "price" => 0, "like" => 3731, "image" => "phutung/317.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe SHVN (2012-2020)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm 2 loxo để thay thế rất tiện lợi.
 Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình. Phuộc RCB VS có màu: đỏ, vàng, titan đen.
 Phuộc RCB VS cho SHVN có chiều cao 380mm. Bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB C Series ty vàng chính hãng cho Yamaha Sirius, Jupiter", "number" => 137, "price" => 0, "like" => 6239, "image" => "phutung/318.jpg", "description" => "Mã: 070627   - Phuộc RCB C Series ty vàng cho Sirius, Jupiter thiết kế mới vô cùng sắc xảo cùng với ty phuộc được mạ vàng tạo điểm nhấn, loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành.  - Phuộc sau RCB C Series ty vàng cho Sirius, Jupiter là Hàng chính hãng Racing Boy bảo hành 12 tháng.  - Phuộc RCB C Series ty vàng chính hãng gắn được cho Sirius, Jupiter...với chiều cao 275mm bằng với phuộc zin."],
            ["name" => "Phuộc Ohlins HO 813 chính hãng cho SH Ý", "number" => 766, "price" => 0, "like" => 2460, "image" => "phutung/319.jpg", "description" => "Mã: 070859 
Phuộc Ohlins HO 813 dành cho Honda SH Ý chính hãng có đầy đủ núm rebound tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường. 
Thương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế. 
Phuộc Ohlins HO813 cho SH Ý Việt Nam được bảo hành chính hãng 2 năm, sản phẩm có thêm 2 loxo phụ để thay thế khi cần. 
Phuộc Ohlins HO 813 chính hãng gắn vừa khít cho Honda SH Ý."],
            ["name" => "Phuộc RCB VS (chính hãng) cho AB, PCX mẫu cũ", "number" => 480, "price" => 0, "like" => 3539, "image" => "phutung/320.jpg", "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe AB, PCX mẫu cũ và cho SH Ý (cao hơn 1cm so với zin)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm 2 loxo để thay thế rất tiện lợi.
 Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình. Phuộc RCB VS có màu: đỏ, vàng, titan đen.
 Phuộc RCB VS cho AB cao 320mm, được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB C Series ty vàng chính hãng cho Honda Vario, Click", "number" => 122, "price" => 0, "like" => 1205, "image" => "phutung/321.jpg", "description" => "Mã: 070633  - Phuộc RCB C Series ty vàng cho Vario/Click thiết kế mới vô cùng sắc xảo cùng với ty phuộc được mạ vàng tạo điểm nhấn, loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành.  - Phuộc sau RCB C Series ty vàng cho Vario/CLick là Hàng chính hãng Racing Boy bảo hành 12 tháng.  - Phuộc RCB C Series ty vàng chính hãng gắn được cho Honda Vario, Click...với chiều cao 330mm bằng với phuộc zin."],
            ["name" => "Phuộc RCB VD chính hãng cho SHVN", "number" => 329, "price" => 0, "like" => 3171, "image" => "phutung/322.jpg", "description" => "Mã: 070504  Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe SHVN 2012-2020...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế.  Phuộc sau RCB VD bình dầu dành cho SHVN có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc. Phuộc VD có màu: đỏ, vàng, đen  Phuộc RCB VD cho SHVN có chiều cao 380mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB S2 ty vàng chính hãng cho Exciter 135", "number" => 105, "price" => 0, "like" => 1676, "image" => "phutung/323.jpg", "description" => "Phuộc RCB S2 ty vàng dành cho Exciter 135, hàng chính hãng Racing Boy, thiết kế mới nhìn khá đẹp với ty phuộc mạ vàng nổi bật, phuộc khá chắc chắn, cứng cáp hơn rất nhiều so với phuộc zin. 
Phuộc RCB S2 cho Exciter có nút tăng chỉnh độ nhún nhanh hoặc chậm dưới chân phuộc , thích hợp với mọi nhu cầu vận hành. 
Phuộc RCB S2 ty vàng cho Exciter 135 có chiều cao 203mm, được bảo hành 12 tháng chính hãng RCB."],
            ["name" => "Bộ phuộc trước X1R chính hãng ty vàng cho Exciter 150-155", "number" => 251, "price" => 0, "like" => 3367, "image" => "phutung/324.jpg", "description" => "Phuộc trước X1R chính hãng ty vàng mang thiết kế với ngoại hình to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter, ty phuộc được mạ vàng nổi bật, Phuộc trước X1R chính hãng ty vàng nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter. 
Phuộc trước X1R chính hãng ty vàng quan trọng nhất là ráp như zin cho Exciter 150 - 155 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc X1R full bộ gồm: phuộc, chảng 3 bằng sắt, pát, bạc đạn, cốt, cục canh... 
Phuộc trước X1R chính hãng ty vàng được bảo hành 12 tháng."],
            ["name" => "Phuộc RCB S2 ty vàng  chính hãng cho Honda Winner (229mm)", "number" => 156, "price" => 0, "like" => 6121, "image" => "phutung/325.jpg", "description" => "Phuộc RCB S2 ty vàng dành cho Honda Winner, hàng chính hãng Racing Boy, thiết kế mới nhìn khá đẹp với ty phuộc mạ vàng nổi bật, phuộc khá chắc chắn, cứng cáp hơn rất nhiều so với phuộc zin. 
Phuộc RCB S2 cho Honda Winner có nút tăng chỉnh độ nhún nhanh hoặc chậm dưới chân phuộc , thích hợp với mọi nhu cầu vận hành. 
Phuộc RCB S2 ty vàng cho Honda Winner 150, Winner X có chiều cao 229mm, được bảo hành 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB S2 ty vàng chính hãng cho Raider, Satria", "number" => 620, "price" => 0, "like" => 9819, "image" => "phutung/326.jpg", "description" => "Phuộc RCB S2 ty vàng dành cho Suzuki Raider, Satria, hàng chính hãng Racing Boy, thiết kế mới nhìn khá đẹp với ty phuộc mạ vàng nổi bật, phuộc khá chắc chắn, cứng cáp hơn rất nhiều so với phuộc zin. 
Phuộc RCB S2 cho Suzuki Raider, Satria có nút tăng chỉnh độ nhún nhanh hoặc chậm dưới chân phuộc , thích hợp với mọi nhu cầu vận hành. 
Phuộc RCB S2 ty vàng cho Suzuki Raider, Satria có chiều cao 285mm, được bảo hành 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB chính hãng DB-2+ ty vàng cao cấp cho Exciter 150", "number" => 346, "price" => 0, "like" => 6813, "image" => "phutung/327.jpg", "description" => "Phuộc RCB DB-2+ ty vàng chính hãng bình dầu loại cao cấp cho Exciter 150, Exciter 155, với thiết kế hoàn toàn mới theo di chuyển sản xuất từ Châu Âu, các chi tiết làm khá tinh tế, ty được mạ vàng quá đẹp, phuộc có nút tăng chỉnh độ nhún nằm bên ngoài bình dầu và dưới chân phuộc dễ dàng canh chỉnh khi vận hành phù hợp cho mọi cung đường. 
Phuộc sau RCB DB-2+ ty vàng  cho Exciter 150 có tặng kèm thêm loxo phụ để sẵn sàng thay thế hoặc để sơn lại màu khác cho tiện thay đổi rất tiện lợi. 
Phuộc RCB DB-2+ ty vàng cho Exciter 150, Exciter 155 có chiều cao 208mm, được bảo hành chính hãng 12 tháng."],
            ["name" => "Phuộc RCB chính hãng DB-2+ ty vàng cao cấp cho Exciter 135", "number" => 803, "price" => 0, "like" => 7451, "image" => "phutung/328.jpg", "description" => "Phuộc RCB DB-2+ ty vàng chính hãng bình dầu loại cao cấp cho Exciter 135, với thiết kế hoàn toàn mới theo di chuyển sản xuất từ Châu Âu, các chi tiết làm khá tinh tế, ty được mạ vàng quá đẹp, phuộc có nút tăng chỉnh độ nhún nằm bên ngoài bình dầu và dưới chân phuộc dễ dàng canh chỉnh khi vận hành phù hợp cho mọi cung đường. 
Phuộc sau RCB DB-2+ ty vàng  cho Exciter 135 có tặng kèm thêm loxo phụ để sẵn sàng thay thế hoặc để sơn lại màu khác cho tiện thay đổi rất tiện lợi. 
Phuộc RCB DB-2+ ty vàng cho Exciter 135 có chiều cao 203mm, được bảo hành chính hãng 12 tháng."],
            ["name" => "Mâm RCB 5 cây chính hãng cho Exciter 150 bản 1.6-1.6", "number" => 658, "price" => 0, "like" => 3599, "image" => "phutung/329.jpg", "description" => "Mâm RCB  5 cây bản siêu nhỏ cho Exciter 150 với bản trước 1.6 sau 1.6 lên xe cực chất, dành cho Biker thích phong cách racing, nhìn xe gọn nhưng rất chất. Gắn lên xe như zin không cần chế cháo.
 Mâm RCB Racingboy 5 cây cho Exciter 150 bản 1.6-1.6 có 2 Màu: Đen/Vàng. Hàng chính hãng RCB được bảo hành 6 tháng."],
            ["name" => "Phuộc YSS G-Sport (chính hãng) cho Winner, Sonic", "number" => 338, "price" => 0, "like" => 8049, "image" => "phutung/330.jpg", "description" => "Mã: 070515  
Phuộc YSS G-Sport dòng cao cấp cho dòng xe Winner, Sonic...thiết kế mới nhất với bình dầu rời rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh nặng nhẹ, nhún rất êm ái khi vận hành. 
Phuộc YSS G-Sport đang là sản phẩm hot với giá thành hợp lí cho phân loại phuộc tăng chỉnh cao cấp. 
Phuộc YSS G-Sport cho Honda Winner, Sonic có 2 màu đỏ và vàng được bảo hành chính hãng 6 tháng, Phuộc YSS sản xuất tại Thái Lan."],
            ["name" => "Phuộc YSS G-Sport (chính hãng) cho Raider, Satria", "number" => 260, "price" => 0, "like" => 9254, "image" => "phutung/331.jpg", "description" => "Phuộc YSS G-Sport dòng cao cấp cho dòng xe Raider, Satria F... thiết kế mới nhất với bình dầu rời rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh nặng nhẹ, nhún rất êm ái khi vận hành. 
Phuộc YSS G-Sport đang là sản phẩm hot với giá thành hợp lí cho phân loại phuộc tăng chỉnh cao cấp. 
Phuộc YSS G-Sport cho Suzuki Raider, Satria F có 2 màu đỏ và vàng được bảo hành chính hãng 6 tháng, Phuộc YSS sản xuất tại Thái Lan."],
            ["name" => "Lọc gió trụ K&N 1280", "number" => 256, "price" => 1000000, "like" => 6678, "image" => "phutung/332.jpg", "description" => "Lọc gió trụ K&N 1280 tăng lưu lượng gió nạp vào bình xăng, cải thiện hiệu suất hòa trộn nhiên liệu, giúp xe hoạt động mạnh mẽ hơn. Xuất xứ: K&N - Mỹ Loại bình xăng áp dụng: Các loại bình có họng xăng từ 28 trở xuống"],
            ["name" => "Phuộc RCB chính hãng DB-2+ ty vàng cao cấp cho Honda Winner", "number" => 460, "price" => 0, "like" => 569, "image" => "phutung/333.jpg", "description" => "Phuộc RCB DB-2+ ty vàng chính hãng bình dầu loại cao cấp cho Winner, với thiết kế hoàn toàn mới theo di chuyển sản xuất từ Châu Âu, các chi tiết làm khá tinh tế, ty được mạ vàng quá đẹp, phuộc có nút tăng chỉnh độ nhún nằm bên ngoài bình dầu và dưới chân phuộc dễ dàng canh chỉnh khi vận hành phù hợp cho mọi cung đường. 
Phuộc sau RCB DB-2+ ty vàng  cho Winner có tặng kèm thêm loxo phụ để sẵn sàng thay thế hoặc để sơn lại màu khác cho tiện thay đổi rất tiện lợi. 
Phuộc RCB DB-2+ ty vàng cho Honda Winner có chiều cao 229mm, được bảo hành chính hãng 12 tháng."],
            ["name" => "Phuộc RCB chính hãng DB-2+ bình dầu cao cấp cho Exciter 135", "number" => 878, "price" => 0, "like" => 6554, "image" => "phutung/334.jpg", "description" => "Phuộc RCB DB-2+ chính hãng bình dầu loại cao cấp cho Exciter 135, với thiết kế hoàn toàn mới theo di chuyển sản xuất từ Châu Âu, các chi tiết làm khá tinh tế, phuộc có nút tăng chỉnh độ nhún nằm bên ngoài bình dầu và dưới chân phuộc dễ dàng canh chỉnh khi vận hành phù hợp cho mọi cung đường. 
Phuộc sau RCB DB-2+ cho Exciter 135 có tặng kèm thêm loxo phụ để sẵn sàng thay thế hoặc để sơn lại màu khác cho tiện thay đổi rất tiện lợi. 
Phuộc RCB DB-2+ cho Exciter 135 có chiều cao 203mm, được bảo hành chính hãng 12 tháng."],
            ["name" => "Dĩa tải Akei 43T chính hãng cho Sonic, Winner", "number" => 162, "price" => 0, "like" => 5228, "image" => "phutung/335.jpg", "description" => "Mã: 350005   Dĩa tải Akei 43T dành cho Sonic, Winner 150, Winner X mẫu mới được nhiều anh em Biker ưa chuộng. Chất liệu cực bền, cứng cáp, thích hợp đi sên to.  Dĩa Akei 43T chính hãng sản xuất tại Thái Lan."],
            ["name" => "Lọc gió trụ K&N 1750", "number" => 246, "price" => 0, "like" => 1184, "image" => "phutung/336.jpg", "description" => "Lọc gió trụ K&N 1750 Tăng lưu lượng gió nạp vào bình xăng, cải thiện hiệu suất hòa trộn nhiên liệu, giúp xe hoạt động mạnh mẽ hơn.
Xuất xứ: K&N - Mỹ
Loại bình xăng áp dụng: Các loại bình xăng con có họng xăng từ 33 trở xuống"],
            ["name" => "Phuộc RCB MB2 ty vàng chính hãng cho Vario, Click", "number" => 350, "price" => 0, "like" => 6663, "image" => "phutung/337.jpg", "description" => "Mã: 070639   Phuộc RCB MB2 ty vàng chính hãng bình dầu cho Vario, Click...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung,với ty phuộc được mạ vàng rất độc đáo. Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành  Phuộc RCB MB2 ty vàng hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng.  Phuộc RCB MB2 cao 330mm gắn được cho Vario, Click hoặc Vision, Lead cần khoét nhựa ngay bình dầu..."],
            ["name" => "Gác chân trước X1R chính hãng cho Winner X", "number" => 108, "price" => 0, "like" => 9442, "image" => "phutung/338.jpg", "description" => "Gác chân trước X1R chính hãng dành cho Winner X, thiết kế đẹp, to bự nên chân gác lên chắc chắn hơn, tạo cảm giác an toàn khi chạy xe. Gác chân trước X1R vừa là món phụ kiện trang trí, vừa dùng để thay thế gác chân zin bị va quẹt, hư hỏng với giá thành hợp lí."],
            ["name" => "Phuộc RCB MB2 ty vàng chính hãng cho Sirius, Jupiter", "number" => 502, "price" => 0, "like" => 30, "image" => "phutung/339.jpg", "description" => "Phuộc RCB MB2 ty vàng chính hãng bình dầu cho Sirius, Jupiter, Taurus...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung,với ty phuộc được mạ vàng rất độc đáo. Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành  Phuộc RCB MB2 ty vàng hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng.  Phuộc RCB MB2 cao 275mm gắn được cho SIrius, Jupiter, Taurus..."],
            ["name" => "Phuộc RCB MB2 ty vàng chính hãng cho SHVN", "number" => 701, "price" => 0, "like" => 1132, "image" => "phutung/340.jpg", "description" => "Mã: 070644 
Phuộc RCB MB2 ty vàng chính hãng bình dầu cho SHVN, mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung,với ty phuộc được mạ vàng rất độc đáo. Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành 
Phuộc RCB MB2 ty vàng hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng. 
Phuộc RCB MB2 cao 380mm gắn được cho SHVN"],
            ["name" => "Lọc gió K&N YA-1306", "number" => 204, "price" => 0, "like" => 4825, "image" => "phutung/341.JPG", "description" => "Lọc gió K&N YA-1306 dùng cho các đời exciter 2006, 2007, 2008, 2009, 2010 với động cơ 135cc 
Tăng lưu lượng gió nạp vào bình xăng, cải thiện hiệu suất hòa trộn nhiên liệu, giúp xe hoạt động mạnh mẽ hơn.
Xuất xứ: K&N - Mỹ"],
            ["name" => "Dĩa nhôm 7075 xịn 36T cho Wave RS, Future Led", "number" => 433, "price" => 0, "like" => 2226, "image" => "phutung/342.jpg", "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp.  Dĩa tải nhôm 7075 36T dùng để gắn Wave RS, RSX, Future Led"],
            ["name" => "Phuộc RCB S2 Series ty vàng chính hãng cho SHVN", "number" => 856, "price" => 0, "like" => 7697, "image" => "phutung/343.jpg", "description" => "Phuộc RCB S Series ty vàng chính hãng cho SHVN, mẫu mới nhất của RCB, thiết kế phuộc đơn giản, loxo phuộc và ty phuộc mạ vàng được làm to chắc, Phuộc RCB S Series có nút tăng chỉnh độ nhún ngay chân phuộc phù hợp với nhiều cung đường xấu đẹp hoặc chở nặng nhẹ.
 Phuộc RCB S Series ty vàng chính hãng cho SHVN có chiều cao 380mm bằng với phuộc zin.
 Phuộc sau RCB S Series ty vàng cho SHVN bảo hành 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB S2 Series ty vàng chính hãng cho Wave, Dream, Future", "number" => 178, "price" => 0, "like" => 1125, "image" => "phutung/344.jpg", "description" => "Mã: 070640  Phuộc RCB S2 Series ty vàng chính hãng cho Wave, Dream, Future, Blade, Axelo... mẫu mới nhất của RCB, thiết kế phuộc đơn giản, loxo phuộc và ty phuộc mạ vàng được làm to chắc, Phuộc RCB S2 Series có nút tăng chỉnh độ nhún ngay chân phuộc phù hợp với nhiều cung đường xấu đẹp hoặc chở nặng nhẹ.  Phuộc RCB S2 Series ty vàng chính hãng cho Wave, Dream, Future, Blade, Axelo có chiều cao 335mm bằng với phuộc zin.  Phuộc sau RCB S2 Series ty vàng cho Wave, Dream, Future, Blade, Axelo  bảo hành 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB S2 Series ty vàng chính hãng cho Sirius, Jupiter", "number" => 448, "price" => 0, "like" => 6086, "image" => "phutung/345.jpg", "description" => "Mã: 070641 
Phuộc RCB S2 Series ty vàng chính hãng cho Sirius, Jupiter, Taurus, mẫu mới nhất của RCB, thiết kế phuộc đơn giản, loxo phuộc và ty phuộc mạ vàng được làm to chắc, Phuộc RCB S2 Series có nút tăng chỉnh độ nhún ngay chân phuộc phù hợp với nhiều cung đường xấu đẹp hoặc chở nặng nhẹ.
 Phuộc RCB S2 Series ty vàng chính hãng cho Sirius, Jupiter có chiều cao 275mm bằng với phuộc zin.
 Phuộc sau RCB S2 Series ty vàng cho Sirius, Jupiter bảo hành 12 tháng chính hãng RCB."],
            ["name" => "Phuộc RCB DB-2 Line (G-BK) ty vàng cho Exciter 135", "number" => 263, "price" => 0, "like" => 7421, "image" => "phutung/346.jpg", "description" => "Mã: 070643   Phuộc RCB DB-2 Line (G-BK) ty vàng chính hãng mẫu mới nhất dành cho Exciter 135 có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó, đặc biệt thiết kế màu đen ty phuộc được mạ vàng rất sang trọng.  Phuộc RCB DB-2 Line (G-BK) ty vàng cho Exciter 135 có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau..  Phuộc sau RCB DB-2 Line (G-BK) ty vàng cho Exciter 135 cao 203mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."],
            ["name" => "Phuộc RCB DB-2 Line (G-BK) ty vàng cho Honda Winner, Sonic", "number" => 362, "price" => 0, "like" => 3556, "image" => "phutung/347.jpg", "description" => "Phuộc RCB DB-2 Line (G-BK) ty vàng chính hãng mẫu mới nhất dành cho Honda Winner 150, Winner X, Sonic có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó, đặc biệt thiết kế màu đen ty phuộc được mạ vàng rất sang trọng. 
Phuộc RCB DB-2 Line (G-BK) ty vàng cho Honda Winner, Sonic có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. 
Phuộc sau RCB DB-2 Line (G-BK) ty vàng cho Honda Winner cao 229mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."],
            ["name" => "Ốp lọc gió trong suốt chính hãng Zhi.Pat dành cho Yamaha NVX", "number" => 815, "price" => 0, "like" => 5207, "image" => "phutung/348.jpg", "description" => "- Ốp lọc gió (pô air) trong suốt chính hãng Zhi.pat nhiều màu dành cho Yamaha NVX Với thiết kế thích hợp cho các bạn cá tính
 
- Ốp lọc gió trong suốt chính hãng Zhi.Pat dành cho Yamaha NVX có độ dày cao, nhẹ & trong suốt hoàn toàn.
 
- Ốp lọc gió trong suốt sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.
 
- Bảo hành chính hãng 12 tháng."],
            ["name" => "Phuộc RCB VS ty vàng chính hãng cho Sirius, Jupiter", "number" => 569, "price" => 0, "like" => 800, "image" => "phutung/349.jpg", "description" => "Mã: 070534   Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Sirius, Jupiter, Taurus...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.  Phuộc sau RCB VS bình dầu có nút tăng chỉnh Rebound ngay chân phuộc phù hợp cho mọi địa hình.  Phuộc RCB VS cho Sirius, Jupiter cao 275mm và được bảo hành: 12 tháng chính hãng RCB."],
            ["name" => "Áo trùm lọc gió trụ STB chính hãng", "number" => 766, "price" => 0, "like" => 8863, "image" => "phutung/350.jpg", "description" => "Áo trùm lọc gió trụ STB chính hãng, made in Taiwan.  
Lưới vải chất lượng cao cản bụi tối đa nhưng vẫn đảm bảo lượng gió tốt."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Vario, Click", "number" => 814, "price" => 0, "like" => 7478, "image" => "phutung/351.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron chính hãng Việt Nam cho Vario, Click được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Vario, Click cao 330mm, phuộc được bảo hành 12 tháng,  1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Raider, Satria", "number" => 881, "price" => 0, "like" => 2269, "image" => "phutung/352.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron chính hãng Việt Nam cho Raider, Satria được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Raider, Satria  cao 285mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Pô 4road 2008 chính hãng cho SH350i", "number" => 459, "price" => 0, "like" => 1525, "image" => "phutung/353.jpg", "description" => "Pô 4road 2008 chính hãng cho SH350i gồm fullset đầy đủ phụ kiện: cổ, pát, lon pô...tất cả chính hãng gắn lên vừa khít SH350i mà không cần chế cháo thêm, sản phẩm đã quá nổi tiếng với thị trường Việt Nam."],
            ["name" => "Phuộc RCB VE ty vàng chính hãng cho AB 2020", "number" => 451, "price" => 0, "like" => 7642, "image" => "phutung/354.jpg", "description" => "Mã: 070808 

Phuộc RCB VE ty vàng chính hãng mẫu mới 2020 dành cho xe AB 2020 (Air Blade 2020)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu. Đặc biệt, phuộc có tặng kèm 2 loxo thay thế và được thiết kế ty phuộc mạ vàng rất đẹp.
 Phuộc RCB VE ty vàng cho AB 2020  có chiều cao 320mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Bộ căm RCB 1.84 chính hãng", "number" => 435, "price" => 0, "like" => 9779, "image" => "phutung/355.jpg", "description" => "Bộ căm RCB 1.84 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo RCB vô cùng sắc sảo. 
Bộ căm RCB 1.84 chính hãng gắn bánh trước các dòng xe thắng đĩa: Exciter, Winner, Sonic, Satria, Wave..."],
            ["name" => "Bộ căm RCB 1.49 chính hãng", "number" => 478, "price" => 0, "like" => 7955, "image" => "phutung/356.jpg", "description" => "Mã: 070543   Căm RCB 1.49 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo RCB vô cùng sắc sảo.  Bộ căm RCB 1.49 chính hãng gắn bánh sau xe Winner."],
            ["name" => "Lọc gió K&N 1517 chính hãng cho Suzuki Satria, Raider", "number" => 844, "price" => 0, "like" => 3179, "image" => "phutung/357.jpg", "description" => "Lọc gió K&N chính hãng dành cho Suzuki Satria, Raider vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió K&N là loại lọc vĩnh cữu, có thể dễ dàng vệ sinh sử dụng lại  Lọc gió K&N là hàng chính hãng K&N USA.  Lọc gió K&N 1517 chính hãng dùng cho Suzuki Raider, Satria gắn như zin không chế cháo."],
            ["name" => "Phuộc Nitron Bình Dầu chính hãng Việt Nam cho Vario, Click mẫu mới", "number" => 135, "price" => 0, "like" => 1751, "image" => "phutung/358.jpg", "description" => "Mã: 070812   Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron bình dầu chính hãng Việt Nam cho Vario, Click được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron Bình Dầu chính hãng Việt Nam cho Vario, Click cao 330mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Bộ căm X1R 1.84 chính hãng", "number" => 503, "price" => 0, "like" => 1821, "image" => "phutung/359.jpg", "description" => "Bộ căm X1R 1.84 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo X1R vô cùng sắc sảo. 
Bộ căm X1R 1.84 chính hãng gắn bánh trước các dòng xe thắng đĩa: Exciter, Winner, Sonic, Satria, Wave..."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Future", "number" => 263, "price" => 0, "like" => 2978, "image" => "phutung/360.jpg", "description" => "Mã: 070811  Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron không bình dầu chính hãng Việt Nam cho Future được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Future cao 335mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Dream", "number" => 183, "price" => 0, "like" => 228, "image" => "phutung/361.jpg", "description" => "Mã: 070815  Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron không bình dầu chính hãng Việt Nam cho Dream được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Dream cao 330mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Bộ căm X1R 1.57 chính hãng", "number" => 576, "price" => 0, "like" => 6964, "image" => "phutung/362.jpg", "description" => "Bộ căm X1R 1.57 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo X1R vô cùng sắc sảo. 
Bộ căm X1R 1.57 chính hãng gắn bánh sau xe Exciter150 và các loại xe Wave/Dream thắng đùm."],
            ["name" => "Niềng nhôm RCB 1.4 chinh hãng", "number" => 256, "price" => 0, "like" => 9859, "image" => "phutung/363.jpg", "description" => "Niềng nhôm RCB bản 1.4 chính hãng, thương hiệu RCB đã quá nổi tiếng trên thị trường xe độ, niềng RCB tuy giá thành khá hợp lí nhưng vẫn đảm bảo chất lượng tuyệt đối. 
Niềng nhôm RCB là hàng chính hãng từ thương hiệu Racing Boy Malaysia. 
Niềng nhôm RCB 1.4 có thể gắn được tất cả loại xe phổ thông PKN."],
            ["name" => "Niềng nhôm RCB 1.6 chính hãng", "number" => 758, "price" => 0, "like" => 6871, "image" => "phutung/364.jpg", "description" => "Niềng nhôm RCB bản 1.6 chính hãng, thương hiệu RCB đã quá nổi tiếng trên thị trường xe độ, niềng RCB tuy giá thành khá hợp lí nhưng vẫn đảm bảo chất lượng tuyệt đối. 
Niềng nhôm RCB là hàng chính hãng từ thương hiệu Racing Boy Malaysia. 
Niềng nhôm RCB 1.6 có thể gắn được tất cả loại xe phổ thông PKN."],
            ["name" => "Đùm US chính hãng cho Exciter150", "number" => 463, "price" => 0, "like" => 9658, "image" => "phutung/365.jpg", "description" => "Đùm trước sau US chính hãng cho Exciter 150, hàng chính hãng yên tâm cho các bạn lên căm đùm niềng cực an toàn, với xu hướng mới đơn giản, không còn hot những cặp đùm khá rờm rà thì đùm US chính hãng nổi lên là lựa chọn hàng đầu. 
Đùm US chính hãng gắn được cho Exciter150."],
            ["name" => "Đùm US chính hãng cho Winner (luôn lòng đĩa CNC)", "number" => 303, "price" => 0, "like" => 5317, "image" => "phutung/366.jpg", "description" => "Đùm trước sau US chính hãng cho Winner, hàng chính hãng yên tâm cho các bạn lên căm đùm niềng cực an toàn, với xu hướng mới đơn giản, không còn hot những cặp đùm khá rờm rà thì đùm US chính hãng nổi lên là lựa chọn hàng đầu. 
Đùm US chính hãng cho Winner có luôn lòng đĩa CNC để gắn đĩa thắng vào đùm mà không cần chế cháo thêm."],
            ["name" => "Lọc gió DNA chính hãng dành cho Honda SHVN 2012 - 2019", "number" => 815, "price" => 0, "like" => 9756, "image" => "phutung/367.jpg", "description" => "Mã: 070235  
Lọc gió DNA chính hãng dành riêng cho Honda SHVN 2012 - 2019, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió DNA rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. 
Lọc gió DNA chính hãng sản xuất tại Hy Lạp."],
            ["name" => "Phuộc Nitron bình dầu chính hãng Việt Nam cho SH350i, SH300i", "number" => 860, "price" => 0, "like" => 2565, "image" => "phutung/368.jpg", "description" => "Mã: 070876   Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron bình dầu chính hãng Việt Nam cho SH350i, SH300i được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron bình dầu chính hãng Việt Nam cho SH350i, SH300i có chiều cao 403mm, được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Sên RK vàng đen 428HSBT - 124L chính hãng", "number" => 605, "price" => 0, "like" => 6856, "image" => "phutung/369.jpg", "description" => "Sên RK vàng đen 428HSBT - 124L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. 
Sên RK vàng đen 428HSBT - 124L là loại sên 10ly không phốt, dài 124 mắc, sên vàng có lớp mạ ngoài đen, nhìn nổi bật đồng thời cũng giúp màu sắc sên bền hơn so với loại vàng nguyên sợi. 
Sên RK vàng đen 428HSBT - 124L chính hãng được sản xuất tại Nhật."],
            ["name" => "Mâm RCB 8 cây chính hãng cho Exciter 150-155", "number" => 218, "price" => 0, "like" => 273, "image" => "phutung/370.jpg", "description" => "Mâm RCB  8 cây bản nhỏ cho Exciter 150-155 với bản trước 1.6 sau 1.85 lên xe cực chất, dành cho Biker thích phong cách racing, nhìn xe gọn nhưng rất chất. Gắn lên xe như zin không cần chế cháo. Mẫu mâm 8 cây rất được ưa chuộng nay đã có cho Exciter 150-155.
 Mâm RCB Racingboy 8 cây gắn vừa khít cho Exciter 150-155 có 3 Màu: Đen/Vàng/Trắng. Hàng chính hãng RCB được bảo hành 6 tháng."],
            ["name" => "Mâm RCB 10 cây chính hãng cho Raider, Satria", "number" => 106, "price" => 0, "like" => 8719, "image" => "phutung/371.jpg", "description" => "Mâm RCB 10 cây chính hãng cho Raider, Satria với bản trước 1.6 sau 2.15 lên xe cực chất, dành cho Biker thích phong cách racing, thiết kế nhiều nhánh (10 cây) rất độc đáo, lên xe nhìn khá cứng cáp 
 Mâm RCB  chính hãng cho Satria, Raider gắn lên xe như zin không cần chế cháo.
 Mâm RCB 10 cây sho Raider, Satria có 3 Màu: Đen/Vàng/Trắng."],
            ["name" => "Phuộc YSS G-Plus chính hãng cho AB2020", "number" => 532, "price" => 0, "like" => 3011, "image" => "phutung/372.jpg", "description" => "Mã: 070673. 

Phuộc YSS G-Plus chính hãng cho AB 2020 với thiết kế mới nhất, bình dầu khá đẹp, tính năng êm ái khi vận hành, tem chữ YSS khắc rất đẹp. 
Phuộc YSS G-Plus bình dầu hàng chính hãng sản xuất tại Thái Lan 
Phuộc sau YSS G-Plus chính hãng cho Honda AB 2020 Chiều cao: 335mm gắn như zin không cần chế 
Phuộc YSS được bảo hành chính hãng 6 tháng"],
            ["name" => "Mâm RCB (chính hãng) 6 cây cho Honda Winner", "number" => 532, "price" => 0, "like" => 2815, "image" => "phutung/373.jpg", "description" => "Mã: 070493  Mâm RCB chính hãng 6 cây 2 đĩa dành cho Honda Winner, thiết kế khí động học, thể thao mạnh mẽ. Khi gắn mâm 6 cây cho Winner 150. Winner X lên xe làm cho xe đi đầm hơn, an toàn hơn.  Mâm RCB Winner kích thước bản mâm bánh trước 1.85 và bánh sau 2.5.  Mâm RCB 6 cây hàng chính hãng."],
            ["name" => "Lọc gió DNA chính hãng dành cho Honda PCX, ADV mới", "number" => 884, "price" => 0, "like" => 9166, "image" => "phutung/374.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Honda PCX, ADV đời mới 2020, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió DNA cho PCX, ADV rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. 
Lọc gió DNA cho Honda PCX, ADV mới hàng chính hãng DNA sản xuất tại Hy Lạp."],
            ["name" => "Mâm RCB (chính hãng) LC135 cho Exciter 135", "number" => 595, "price" => 0, "like" => 9560, "image" => "phutung/375.jpg", "description" => "Mâm RCB  chính hãng 5 cây 1 đĩa dành cho Yamaha Exciter 135 (4 số) không cần chế cháo, thiết kế khí động học, thể thao mạnh mẽ. Khi gắn lên xe Ex 135 (4 số) làm cho xe đi đầm hơn, an toàn hơn. 
Mâm RCB 5 cây cho Exciter 135 (4 số) hàng chính hãng Racingboy được bảo hành 6 tháng."],
            ["name" => "Mâm RCB 6 cây chính hãng cho Honda Sonic", "number" => 611, "price" => 0, "like" => 9691, "image" => "phutung/376.jpg", "description" => "Mâm RCB chính hãng 6 cây dành cho Honda Sonic, mâm thiết kế bản nhỏ, 6 cây thanh thoát phù hợp với dáng gọn của Sonic, chất lượng mâm RCB thì đã được nhiều Biker tin dùng 
Mâm 6 cây RCB chính hãng cho Sonic kích thước bản mâm bánh trước 1.6 và bánh sau 1.6. 
Mâm 6 cây RCB gắn vừa Sonic mà không cần chế cháo, hàng chính hãng Racingboy thương hiệu đến từ Malaysia."],
            ["name" => "Lọc gió DNA chính hãng cho Honda SHVN 2020 - 2021 - 2022", "number" => 855, "price" => 0, "like" => 8757, "image" => "phutung/377.jpg", "description" => "Lọc gió DNA chính hãng dành riêng cho Honda SHVN 2020, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe.  Lọc gió DNA rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ.  Lọc gió DNA chính hãng cho SHVN 2020 sản xuất tại Hy Lạp."],
            ["name" => "Phuộc Nitron chính hãng Việt Nam cho Exciter 135", "number" => 221, "price" => 0, "like" => 6508, "image" => "phutung/378.jpg", "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí.  Phuộc Nitron chính hãng Việt Nam cho Exciter 135 được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý.  Phuộc Nitron chính hãng Việt Nam cho Exciter 135 cao 200mm. Bảo hành 12 tháng, 1 đổi 1 chính hãng Nitron Việt Nam."],
            ["name" => "Phuộc trước LCM V1 ty vàng cho Exciter 150, Exciter 155", "number" => 178, "price" => 0, "like" => 6721, "image" => "phutung/379.jpg", "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter 150, Exciter 155, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter 150, Exciter 155.  Phuộc LCM V1 ty vàng  có thiết kế ty phuộc màu vàng rất đẹp, quan trọng nhất là ráp như zin cho Exciter 150, Exciter 155 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, chảng 3 bằng sắt, pát, bạc đạn...  Phuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."],
            ["name" => "Phuộc YSS G Series cho Suzuki Satria F150, Raider", "number" => 526, "price" => 0, "like" => 4155, "image" => "phutung/380.jpg", "description" => "Mã: 070426   Phuộc YSS G Series bình dầu cho Suzuki Satria F150, Raider với thiết kế mới nhất, bình dầu khá đẹp, tính năng êm ái khi vận hành.  Phuộc YSS bình dầu hàng chính hãng sản xuất tại Thái Lan.  Phuộc sau YSS G Series chính hãng bình dầu cho Satria, Raider cao 285mm gắn như zin không cần chế.  Phuộc YSS G Series chính hãng cho Satria, Raider, Raider Fi được bảo hành chính hãng 6 tháng chính hãng YSS."],
            ["name" => "Lọc gió trụ DNA họng 51 chính hãng", "number" => 478, "price" => 0, "like" => 7450, "image" => "phutung/381.jpg", "description" => "Lọc gió trụ DNA họng 51 chính hãng dành riêng cho các dòng xe zin muốn đi nhẹ do lọc gió dạng trụ lấy gió nhiều hơn tạo nên hỗn hợp xăng gió lớn giúp xe chạy bốc, đồng thời phát ra tiếng hú uy lực, thương hiệu DNA nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. 
Lọc gió trụ DNA họng 51hàng chính hãng DNA sản xuất tại Hy Lạp."],
            ["name" => "Ốp Lọc Gió Trong Suốt Chính Hãng Zhi.pat (màu hồng, xanh, tím)", "number" => 480, "price" => 0, "like" => 6631, "image" => "phutung/382.jpg", "description" => "Mã: 240021  - Ốp pô E trong suốt chính hãng Zhi.pat màu Hồng, Xanh, tím dành cho AB 125, Vario, Click Thái, Sh Mode, PCX. Với thiết kế thích hợp cho các bạn cá tính   - Ốp lọc gió trong suốt chính hãng Zhi.Pat màu Hồng, Xanh có độ dày cao, nhẹ & trong suốt hoàn toàn.   - Ốp Pô Air trong suốt sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao.   - Ốp lọc gió màu hồng, xanh, tím trong suốt có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.   - Bảo hành 12 tháng theo hình thức 1 đổi 1."],
            ["name" => "Lọc gió trụ DNA họng 54 chính hãng", "number" => 455, "price" => 0, "like" => 2694, "image" => "phutung/383.jpg", "description" => "Lọc gió trụ DNA họng 54 chính hãng dành riêng cho các dòng xe đã làm máy, dạng trụ cùng họng xăng lớn giúp lấy gió nhiều hơn để chuẩn với tỉ lệ xăng xuống nhiều giúp xe chạy bốc, đồng thời phát ra tiếng hú uy lực, thương hiệu DNA nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe.  Lọc gió trụ DNA họng 54 hàng chính hãng DNA sản xuất tại Hy Lạp."],
            ["name" => "Pô 4road 2008 hàng chuẩn full cổ pát cho Vario, Click, SHVN, SH Ý...", "number" => 418, "price" => 0, "like" => 1181, "image" => "phutung/384.jpg", "description" => "Mã: 070433 

Pô 4road hàng chuẩn 1:1 full cổ pát cho Vario/Click, SHVN, SH Ý...âm thanh êm, chuẩn tiếng 4road, dàn ngoài như zin không cần bàn cải về vẻ đẹp. 
Pô 4road 1:1 full bộ gắn lên Vario/Click, SHVN, SH Ý, mà không cần phải chế."],
            ["name" => "Phuộc YSS G-Sport chính hãng cho Honda AB, PCX mẫu cũ", "number" => 674, "price" => 0, "like" => 3427, "image" => "phutung/385.jpg", "description" => "Phuộc YSS G-Sport chính hãng cho Honda AB, PCX mẫu cũ...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. 
Phuộc YSS G-Sport chính hãng gắn cho Honda AB, PCX mẫu cũ mà không cần chế, phuộc có chiều cao 310mm.
Phuộc YSS G-Sport chính hãng cho AB, PCX mẫu cũ được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Phuộc YSS G-Sport chính hãng cho Honda PCX 2020", "number" => 768, "price" => 0, "like" => 7515, "image" => "phutung/386.jpg", "description" => "Mã: 070693  
Phuộc YSS G-Sport chính hãng cho Honda PCX mẫu mới 2020...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. 
Phuộc YSS G-Sport chính hãng gắn cho Honda PCX 2020 mà không cần chế, phuộc có chiều cao 350mm.
Phuộc YSS G-Sport chính hãng cho PCX 2020 được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Phuộc RCB VD chính hãng cho Sirius, Jupiter (ty vàng)", "number" => 446, "price" => 0, "like" => 2139, "image" => "phutung/387.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Sirius, Jupiter, Taurus...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.
 Phuộc sau RCB VD bình dầu dành cho Sirius, Jupiter có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.
 Phuộc RCB VD cho Sirius, Jupiter có chiều cao 275mm. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc YSS G-Sport chính hãng cho Honda SH300i, SH350i", "number" => 815, "price" => 0, "like" => 729, "image" => "phutung/388.jpg", "description" => "Phuộc YSS G-Sport chính hãng cho Honda SH300i...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. 
Phuộc YSS G-Sport chính hãng gắn cho Honda SH300i mà không cần chế, phuộc có chiều cao 395mm. 
Phuộc YSS G-Sport chính hãng cho Honda SH300i được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."],
            ["name" => "Mâm X1R 6 cây chính hãng cho Vario, Click", "number" => 194, "price" => 0, "like" => 76, "image" => "phutung/389.jpg", "description" => "Mâm X1R  6 cây chính hãng cho Vario, Click, hàng khá hot trên thị trường, thiết kế 6 cây mảnh to rất phù hợp với dáng xe hầm hố, thể thao như Vario, Click. Hàng X1R chất lượng tốt đã được nhiều biker tin dùng.  Mâm X1R 6 cây  chính hãng cho Vario, Click có bản mâm là: 1.6 - 1.85  Mâm X1R 6 cây là hàng chính hãng X1R."],
            ["name" => "Phuộc YSS G Series chính hãng cho Exciter 150, Exciter 155", "number" => 368, "price" => 0, "like" => 8582, "image" => "phutung/390.jpg", "description" => "Phuộc YSS G Series chính hãng cho Exciter 155, Exciter 150, phuộc bình dầu  với thiết kế mới nhất, tính năng êm ái khi vận hành, chất lượng YSS đã quá nổi tiếng trong thị trường phuộc nhún. 
Phuộc YSS G Series bình dầu hàng chính hãng sản xuất tại Thái Lan và được bảo hành 6 tháng. 
Phuộc YSS G Series chính hãng cho Exciter 150-155 có chiều cao 205mm gắn như zin không cần chế."],
            ["name" => "Phuộc YSS G Series chính hãng cho Honda Winner, Sonic", "number" => 190, "price" => 0, "like" => 8458, "image" => "phutung/391.jpg", "description" => "Mã: 070696   Phuộc YSS G Series chính hãng cho Honda Winner, Sonic, phuộc bình dầu với thiết kế mới nhất, tính năng êm ái khi vận hành, chất lượng YSS đã quá nổi tiếng trong thị trường phuộc nhún.  Phuộc YSS G Series bình dầu hàng chính hãng sản xuất tại Thái Lan và được bảo hành 6 tháng.  Phuộc YSS G Series chính hãng cho Honda Winner, Sonic có chiều cao 229mm gắn như zin không cần chế."],
            ["name" => "Lọc gió lưới thép độ dành cho Honda ADV, PCX mới", "number" => 626, "price" => 0, "like" => 1263, "image" => "phutung/392.jpg", "description" => "Lọc gió lưới thép độ dành riêng cho Honda ADV, PCX mới , với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. 
Lọc gió lưới thép độ gắn vừa khít cho Honda ADV, PCX mới, rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."],
            ["name" => "Mâm X1R chính hãng 8 cây cho Exciter 150", "number" => 387, "price" => 0, "like" => 8974, "image" => "phutung/393.jpg", "description" => "Mâm X1R chính hãng 8 cây cho Exciter 150, thiết kế 8 cây huyền thoại được rất nhiều anh em biker ưa chuộng, khi trang bị lên xe nhìn rất đẹp với mâm 8 cây không quá to, làm xe trở nên rất thanh thoát, còn về chất lượng X1R đã được nhiều anh em trải nghiệm đánh giá khá tốt cùng với giá cả hợp lí. 
Mâm X1R chính hãng 8 cây gắn vừa y Exciter 150 mà không cần chế cháo với bản mâm 1.6 - 1.85"],
            ["name" => "Phuộc YSS Z Sport chính hãng cho Honda Vario, Click", "number" => 569, "price" => 0, "like" => 4050, "image" => "phutung/394.jpg", "description" => "Phuộc YSS Z Sport chính hãng cho các dòng xe tay ga Vario, Click, SH mode, Lead...với thiết kế Black Series mới nhất , tính năng êm ái khi vận hành trên mọi cung đường bởi nút tăng chỉnh độ năng nhẹ ngay chân phuộc, chất lượng phuộc YSS chính hãng đã được nhiều khách hàng tin dùng. 
Phuộc YSS chính hãng sản xuất tại Thái Lan. 
Phuộc YSS Z Sport cho Vario, Click mà không cần chế cháo, có thể gắn cho Lead, SH Mode, Vision... 
Phuộc YSS Z Sport chính hãng cho Vario, Click được bảo hành chính hãng 6 tháng."],
            ["name" => "Phuộc RCB VD chính hãng cho Yamaha NVX (ty vàng)", "number" => 683, "price" => 0, "like" => 6128, "image" => "phutung/395.jpg", "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Yamaha NVX, có thể gắn SH Ý, AB110...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.
 Phuộc sau RCB VD bình dầu dành cho NVX có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.
 Phuộc RCB VD cho NVX có chiều cao 305mm, vừa cho SH Ý và AB110 luôn. Bảo hành : 12 tháng chính hãng RCB."],
            ["name" => "Phuộc YSS G-Sport chính hãng cho NVX, PCX 2014", "number" => 793, "price" => 0, "like" => 9767, "image" => "phutung/396.jpg", "description" => "Phuộc YSS G-Sport chính hãng cho Yamaha NVX, Honda PCX 2014 hoặc SH ý...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. 
Phuộc YSS G-Sport chính hãng gắn cho Yamaha NVX, Honda PCX mà không cần chế, phuộc có chiều cao 310mm. 
Phuộc YSS G-Sport chính hãng cho Yamaha NVX, PCX 2014 được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."]
        ]);

        Category::where('name', 'nhớt')->first()->products()->createMany([

            [
                "name" => "Nhớt Motul H-Tech 100 4T 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul H-Tech 100 4T 10W40 nhớt xe số chất lượng cao, bôi trơn động cơ xe hiệu quả giúp động cơ xe vận hành êm ái và bảo vệ động cơ tốt nhất, bền bỉ nhất theo thời gian. Nhớt được nhiều tập đoàn xe máy uy tín như Honda, Yamaha, ... khuyên dùng"
            ],
            [
                "name" => "Nhớt Motul 300V Factory Line 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul 300V Factory Line 10W40 1L nhớt chất lượng cao dành cho xe mô tô phân khối lớn như: Exciter 150, Winner 150, Ex135, MSX 125, Raider 150, Fz150i, TFX 150, kawasaki z1000, Ducati, Cbr150, Cb1100...  \r\nNhớt Motul 300V 10W40 1L tối ưu hóa công suất động cơ và bảo vệ động cơ một cách hoàn hảo"
            ],
            [
                "name" => "Nhớt Fuchs Silkolene Scoot Sport 4 5W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Fuchs Sillkolene Scoot Sport 4 5W40 với công nghệ tổng hợp đã được chứng minh cung cấp khả năng đặc biệt chống mài mòn và hiệu năng chống ma sát dưới tất cả các điều kiện khắc nghiệt của nhiệt độ. \r\nNhớt Fuchs Sillkolene Scoot Sport 4 5W40 có đặc tính êm, mát máy phù hợp với các loại xe tay ga hiện nay như: AB, Click, Vario, Sh, Vision, Grande, NVX, Hayate... \r\nNhớt Fuchs Silkolene Scoot Sport 4 5W40 sản xuất tại Anh."
            ],
            [
                "name" => "Nhớt Repsol Smarter Scooter 4T 5W-40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Repsol Smarter Scooter 4T 5W-40 0,8 lít, sản phẩm nhớt cho xe tay ga lý tưởng của tập đoàn nhớt Repsol.  \r\nNhớt Repsol Smarter Scooter 4T Bảo vệ động cơ vượt trội, ổn định về độ nhớt, chống sự mài mòn trong điều kiện động cơ hoạt động trong quãng đường dài và liên tục."
            ],
            [
                "name" => "Nhớt Liqui Moly Molygen 5W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Moly Molygen 5W30 chính hãng chất lượng cao dành cho xe tay ga cao cấp. Bảo vệ động cơ trong điều kiện vận hành cao, tiết kiệm nhiên liệu, vận hành êm ái, kéo dài thời gian thay nhớt tốt nhất."
            ],
            [
                "name" => "Nhớt Liqui Moly Molygen 5W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Moly Molygen 5W40 chính hãng chất lượng cao  dành cho xe oto cao cấp có thể thay cho các dòng tay ga cao cấp. Bảo vệ động cơ trong điều kiện vận hành cao, tiết kiệm nhiên liệu, vận hành êm ái, kéo dài thời gian thay nhớt tốt nhất. \r\nLiqui Moly Molygen 5w40 là nhớt tổng hợp cao cấp với cấp nhớt API SP tốt nhất hiện nay"
            ],
            [
                "name" => "Nhớt Motul Scooter Power LE 5W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul Scooter Power LE 5W40 0.8L nhớt xe tay ga đời mới của tập đoàn nhớt Motul. Nhớt kiểm soát tốt cặn trong piston, chống mài mòn, chống ăn mòn cực kỳ hiệu quả với khả năng tẩy rửa tuyệt hảo giúp động cơ luôn được giữ sạch"
            ],
            [
                "name" => "Nhớt Amsoil 10W40 Performance 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "- Nhớt Amsoil 10W40 Performance chuyên dụng dành cho xe máy, kể cả xe moto, PKL  \r\n- Nhớt tổng hợp 100% Synthese  \r\n- API SG, JASO MA / MA2   \r\n- Độ nhớt SAE: 10W40  \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Nhớt Liqui Moly 4T Synth 10W40 Street Race", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Dầu nhớt động cơ Liqui Moly 4T Synth 10W40 Street Race đạt hiệu suất cao đươc tổng hợp hoàn toàn. Đảm bảo hiệu suất tối đa và bảo vệ động cơ trong mọi điều kiện hoạt động. Bôi trơn tối ưu,làm sạch động cơ, ma sát tuyệt vời. Tạo ra sự khác biệt lớn khi lái xe. Thử nghiệm trên động cơ với bộ chuyển đổi xúc tác. \r\nNhớt Liqui Moly 4T Synth 10W40 Street Race có những tính năng như: Độ sạch động cơ vượt trội, đảm bảo tiêu thụ dầu thấp, bảo vệ chống mài mòn cao, tăng hiệu quả bôi trơn. \r\nNhớt Liqui Moly 4T Synth 10W40 Street Race dùng được cho tất cả loại xe PKL và xe số."
            ],
            [
                "name" => "Nhớt Liqui Moly Scooter Race 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Liqui Moly Scooter Race 10W40 là sản phẩm nhớt cao cấp nhất của Liqui chuyên dụng dành cho các dòng xe tay ga hiện đại mới nhất hiện nay. \r\nNhớt Liqui Moly Scooter Race 10W40 thích hơp với các dòng xe tay ga đời mới hiện nay tại Việt Nam như: Lead, Vision, SH, AB, NVX... \r\nThời gian thay nhớt Liqui Moly Scooter Race 10W40 sẽ từ 2500-3000km \r\nThông số kĩ thuật: \r\n- Nhớt tổng hợp hoàn toàn cho xe tay ga. Độ nhớt SAE 10W40 - API SN - Jaso MA2 \r\n- Dung tích nhớt: 1 lít"
            ],
            [
                "name" => "Nhớt Motul 7100 10W50 4T 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "- Nhớt Motul 7100 10W50 4T 1L phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam. \r\n- Nhớt tổng hợp 100% Synthese \r\n- API SN ; JASO MA2 \r\n- Độ nhớt 10W50"
            ],
            [
                "name" => "Shell Advance Ultra 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance Ultra 10W40 1L nhớt cao cấp dành cho xe côn tay và xe mô tô 4 thì đời mới hiện nay như Exciter 150, msx 125, raider 150, fz 150i,...Bảo vệ tối ưu và khả năng vận hành đáng tin cậy, tăng độ ổn định trượt cao giúp giảm rung động và giảm tiếng ồn"
            ],
            [
                "name" => "Nhớt Wolver Racing Synthetic 10W40 1lit", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Wolver Racing Synthetic 10W40 là loại dầu nhớt bôi trơn tổng hợp đặc biệt dành riêng cho động cơ xe máy 4 thì được nhập khẩu chính hãng từ Đức. Wolver Racing được biết đến là dòng nhớt được ứng dụng đặc biệt cho các loại xe máy phân khối lớn, bên cạnh đó còn có thể dùng tốt cho tất cả các loại xe máy có bộ ly hợp khô và ướt (xe số và xe tay ga)."
            ],
            [
                "name" => "Nhớt Repsol Racing 10W40 1lit", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Repsol Racing 10W40 là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nRepsol Racing 10w40 khả năng thích nghi cao, độc đáo, phù hợp với hầu hết các loại xe và các loại động cơ 4 thì. Nhớt giúp giảm nhiệt tốt, cải thiện tốt sức mạnh và độ bền của động cơ. Loại nhớt này mang lại khả năng kiểm soát tốt hơn với sự sang số êm hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động."
            ],
            [
                "name" => "Nhớt Liqui Moly 4T Synth 5W40 Motorbike", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Moly 4T Synth 5W40 Motorbike là nhớt cao cấp với chất lượng tuyệt hảo dành cho các dòng xe số, đặc biệt là các dòng xe côn tay, xe mô tô và xe phân khối lớn hiện đại"
            ],
            [
                "name" => "Nhớt Fuchs Silkolene Pro 4 10W40 XP", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Fuchs Silkolene Pro 4 10W40 XP luôn tối ưu hóa công nghệ tổng hợp ester, có nguồn gốc từ công nghệ bôi trơn hàng không vũ trụ, để đem đến tính chất chống mài mòn xuất sắc trong một phạm vi nhiệt độ hoạt động trải dài từ thời tiết nóng tới lạnh. Khả năng hoạt động bảo vệ bề mặt tiên tiến cung cấp sự bảo vệ cần thiết cho piston, lòng piston, trục cam và các vòng bi bạc đạn, ngay cả trong giai đoạn bắt đầu khởi động máy cho đến khi dòng chảy nhớt được ổn định. \r\nNhớt Fuchs Silkolene có đặc tính chạy êm mát máy, phù hợp với tất cả các loại xe số và xe tay côn hiện nay như: Wave, Sirius, Winner, Exciter, Raider, Sonic, Satria... \r\nNhớt Fuchs Silkolene Pro 4 10W40 XP sản xuất tại Anh."
            ],
            [
                "name" => "Nhớt chiết lẻ Repsol Smarter Synthetic 4T 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Repsol Smarter Synthetic 4T 10W40 (100ml) là sản phẩm dầu nhớt chính hãng của tập đoàn dầu nhớt Repsol danh tiếng trên toàn thế giới dành cho các thế hệ xe số 4 thì tiên tiến hiện nay. \r\nNhớt Repsol Smarter Synthetic 4T 10W40 giúp bảo vệ động cơ chống mài mòn, ma sát, kéo dài tuổi thọ động cơ, cải thiện khả năng tiết kiệm nhiên liệu xăng tối ưu. \r\nNhớt chiết lẻ Repsol Racing 10W40 (100ml) dành cho các dòng xe dung tích nhớt trên 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt Ipone Stroke 4 Racing 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE Stroke 4 Racing 10W40 là nhớt động cơ gốc Ester tổng hợp 100% được phát triển với sự hợp tác của các đội kỹ thuật của Red Bull MotoGP, dành cho các cuộc đua xe mô tô 4 thì, đường đua và địa hình có yêu cầu rất cao trong thi đấu. Dòng nhớt cao cấp nhất của thương hiệu ipone Giảm 15% ma sát, tăng 3% mô men xoắn và  tăng 2% hiệu suất động cơ. \r\nNhớt IPONE Stroke 4 Racing 10W40 chuyên dùng trong các giải đua xe PKL và dành cho các Biker thích vận hành  tốc độ cao, nhớt xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone Katana Full Power 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE Katana Full Power 10W40 là nhớt tổng hợp 100% với công nghệ Ester, được thiết kế giúp tối ưu cho trải nghiệm lái xe và hệ phụ gia tiên tiến giúp mang đến tính năng “Dễ sang số và bứt tốc nhanh” độc quyền. Tính năng này giúp bạn có cảm giác tuyệt vời tăng tốc nhanh, khám phá nhiều hơn niềm vui khi lái xe. \r\nNhớt IPONE Katana Full Power 10W40 thích hợp cho các dòng xe thể thao, PKL... xuất xứ từ Pháp"
            ],
            [
                "name" => "Nhớt Ipone Katana Full Power 10W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE Katana Full Power 10W30 là nhớt tổng hợp 100% với công nghệ Ester, được thiết kế giúp tối ưu cho trải nghiệm lái xe và hệ phụ gia tiên tiến giúp mang đến tính năng “Dễ sang số và bứt tốc nhanh” độc quyền. Tính năng này giúp bạn có cảm giác tuyệt vời tăng tốc nhanh, khám phá nhiều hơn niềm vui khi lái xe. \r\nNhớt IPONE Katana Full Power 10W30 xuất xứ từ Pháp"
            ],
            [
                "name" => "Nhớt Ipone Katana Scoot 5W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE Katana Scoot 5W40 là nhớt  động cơ tổng hợp 100% dành cho xe tay ga. Dầu có độ ma sát thấp với độ ổn định trượt ca giúp giảm lượng tiêu thụ nhiên liệu hiệu quả và đảm bảo hiệu suất của động cơ. Tính năng này còn giúp xe tăng tốc mượt mà và nhanh, giảm độ trễ, rung lắc khi thốc ga. Sự kết hợp đặc biệt giữa dầu gốc và phụ gia cao cấp giúp ngăn ngừa sự hình thành cặn bẩn và bảo vệ chống mài mòn tối ưu.\r\nNhớt IPONE Katana Scoot 5W40 có xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone Katana Scoot 0W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE Katana Scoot 0W30 là nhớt  động cơ tổng hợp 100% dành cho xe tay ga. Dầu có độ ma sát thấp với độ ổn định trượt ca giúp giảm lượng tiêu thụ nhiên liệu hiệu quả và đảm bảo hiệu suất của động cơ. Tính năng này còn giúp xe tăng tốc mượt mà và nhanh, giảm độ trễ, rung lắc khi thốc ga. Sự kết hợp đặc biệt giữa dầu gốc và phụ gia cao cấp giúp ngăn ngừa sự hình thành cặn bẩn và bảo vệ chống mài mòn tối ưu. \r\nNhớt IPONE Katana Scoot 0W30 có xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone Scoot 4 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE Scoot 4 10W40 là nhớt bán tổng hợp được tối ưu cho các dòng xe tay ga thông dụng, có tính năng tiết kiệm nhiên liệu, thành phần nhớt  có độ ma sát thấp giúp giảm lượng tiêu thụ nhiên liệu hiệu quả và đảm bảo hiệu suất của động cơ. Tính năng này còn giúp bảo vệ động cơ tuyệt vời khi xe thường xuyên “chạy-dừng” trong đô thị. \nNhớt IPONE Scoot  4 10W40 1L thích hợp cho các loại xe tay ga, sản phẩm xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone R4000RS 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE R4000 RS 10W40 được sản xuất từ Dầu gốc Tổng hợp với Ester và hệ phụ gia tiên tiến với tính năng bảo vệ động cơ cực cao. Sản phẩm đảm bảo tính năng bôi trơn hiệu quả, hộp số và bộ ly hợp, giữ động cơ tránh quá nhiệt, tăng tuổi thọ nhớt và động cơ cục tốt. \r\nNhớt IPONE R4000RS 10W40 thích hợp cho các loại xe số, côn tay, xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone 10.4 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt IPONE 10.4 10W40 được sản xuất từ Dầu gốc Bán tổng hợp với hệ phụ gia cao cấp, thích hợp cho các điều kiện hoạt động trong đô thị. Sản phẩm đảm bảo tính năng bôi trơn hiệu quả, cung cấp tính năng bảo vệ cho động cơ, hộp số và bộ ly hợp, giữ động cơ tránh quá nhiệt, tăng tuổi thọ nhớt và động cơ cục tốt. \r\nNhớt IPONE 10.4 10W40 thích hợp cho các loại xe số, côn tay, xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Repsol Smarter Scooter 4T 5W-40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Repsol Smarter Scooter 4T 5W-40 1L sản phẩm nhớt cho xe tay ga lý tưởng của tập đoàn nhớt Repsol.  \r\nBảo vệ động cơ vượt trội, ổn định về độ nhớt, chống sự mài mòn trong điều kiện động cơ hoạt động trong quãng đường dài và liên tục."
            ],
            [
                "name" => "Nhớt Repsol Smarter Synthetic 4T 10W-40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Repsol Smarter Synthetic 4T 10W-40 1L là sản phẩm dầu nhớt chính hãng của tập đoàn dầu nhớt Repsol danh tiếng trên toàn thế giới dành cho các thế hệ xe số 4 thì tiên tiến hiện nay.   \r\nBảo vệ động cơ chống mài mòn, ma sát, kéo dài tuổi thọ động cơ, cải thiện khả năng tiết kiệm nhiên liệu xăng tối ưu."
            ],
            [
                "name" => "Dịch vụ vệ sinh nhông sên dĩa", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Dịch vụ vệ sinh nhông sên dĩa là việc bảo dưỡng định kỳ giúp làm sạch những bụi bẩn, tạp chất bám trên nhông sên dĩa xe máy khi vận hành trong thời gian dài \r\nDịch vụ vệ sinh nhông sên dĩa bằng dung dịch Goracing giúp xe số, xe côn tay vận hành êm ái, mượt mà gia tăng được tuổi thọ NSD của xe. \r\nDịch vụ Vệ sinh nhông sên dĩa bằng dung dịch Goracing cho các loại xe máy số, xe côn tay Honda, Yamaha, Suzuki: Exciter 150, Exciter 155, Winner 150, Winner X, Sonic 150, Satria, Raider 150, Wave, Futute, Sirius, Jupiter...."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Scooter 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance Xe công nghệ Scooter 10W40 0,8L là dầu nhớt cao cấp công nghệ tổng hợp cho động cơ xe tay ga của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe ga 10W40 0,8L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Scooter 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance Xe công nghệ Scooter 10W40 1L là dầu nhớt cao cấp công nghệ tổng hợp cho động cơ xe tay ga của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe ga 10W40 1L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Motorcycle 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance Xe công nghệ Motorcycle 10W40 1L là loại nhớt xe máy chuyên dụng cho xe số 4 thì của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe số 10W40 1L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Motorcycle 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance Xe công nghệ Motorcycle 10W40 0.8L là loại nhớt xe máy chuyên dụng cho xe số 4 thì của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe số 10W40 0.8L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Chai dưỡng bóng dàn áo GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Chai dưỡng bóng dàn áo GoRacing (GoRacing Quick Spray Wax) là dung dịch tạo 1 lớp film mỏng, trong suốt bao phủ lên bề mặt sơn làm tăng độ sáng bóng, bảo vệ bề mặt sơn khỏi ánh nắng trực tiếp, đồng thời tạo hiệu ứng lá sen để chống bám nước, bụi bẩn.  \r\nChai xịt bóng dàn áo xe máy GoRacing là sản phẩm chính hãng của thương hiệu GoRacing đang rất được ưa chuộng tại Việt Nam. \r\nChai dưỡng bóng dàn áo GoRacing có 3 tính năng nổi bật: SÁNG BÓNG - BẢO VỆ MÀU SƠN - CHỐNG THẤM NƯỚC BẨN. \r\nHướng dẫn sử dụng chai dưỡng bóng dàn áo GoRacing: \r\n1/ Làm sạch, khô bề mặt dàn áo màu bóng. \r\n2/ Lắc đều chai – xịt đều lên bề mặt sơn. \r\n3/ Lau khô, đều tay bằng khăn sạch, mềm. \r\nLưu ý sử dụng: \r\n- Chỉ sử dụng trên bề mặt sơn bóng, không xịt lên nhựa đen, gỗ, thuỷ tinh. \r\n- Không xịt lên bề mặt sơn dưới ánh nắng trực tiếp. \r\n- Không được xịt vào mắt miệng. \r\n- Tránh xa tầm tay trẻ em. \r\n- Sản phẩm có chứa chất tạo áp suất nên không được đâm thủng hay làm hay đốt cháy, không để dưới nắng trực tiếp và khu vực có nhiệt độ trên 50 độ C."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Scooter Race 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Liqui Moly Scooter Race 10W40 là sản phẩm nhớt cao cấp nhất của Liqui chuyên dụng dành cho các dòng xe tay ga hiện đại mới nhất hiện nay. \nNhớt Liqui Moly Scooter Race 10W40 thích hơp với các dòng xe tay ga đời mới hiện nay tại Việt Nam như: Lead, Vision, SH, AB, NVX... \nThời gian thay nhớt Liqui Moly Scooter Race 10W40 sẽ từ 2500-3000km \nThông số kĩ thuật: \n- Nhớt tổng hợp hoàn toàn cho xe tay ga. Độ nhớt SAE 10W40 - API SN - Jaso MA2 \n- Dung tích nhớt: 100ml dùng mua thêm cho các dòng xe tay ga máy lớn như: SH300i, Forza, Vespa..."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Molygen 5W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Liqui Moly Molygen 5W40 chính hãng chất lượng cao  dành cho xe oto cao cấp có thể thay cho các dòng tay ga cao cấp. Bảo vệ động cơ trong điều kiện vận hành cao, tiết kiệm nhiên liệu, vận hành êm ái, kéo dài thời gian thay nhớt tốt nhất. \r\nNhớt Liqui Moly Molygen 5w40 là nhớt tổng hợp cao cấp với cấp nhớt API SP tốt nhất hiện nay. \r\nNhớt Liqui Moly Molygen 5W40 100ml dùng để mua thêm thay vào các dòng xe tay ga máy lớn như: SH300i, Vespa..."
            ],
            [
                "name" => "Thay chén cổ Honda Sonic 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Thay chén cổ Sonic 150 giúp khắc phục tình trạng đầu tay lái phát ra tiếng kêu lụp cụp khi di chuyển trên các đoạn đường gồ ghề, tay lái điều khiển cứng, nặng, khó xoay hoặc đầu xe bị rung lắc mạnh khi chạy với tốc độ cao. \r\nDịch vụ Thay chén cổ xe máy Honda Sonic 150 chuyên nghiệp."
            ],
            [
                "name" => "Thay chén cổ xe máy Yamaha", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Thay chén cổ xe máy Yamaha giúp khắc phục tình trạng đầu tay lái phát ra tiếng kêu lụp cụp khi di chuyển trên các đoạn đường gồ ghề, tay lái điều khiển cứng, nặng, khó xoay hoặc đầu xe bị rung lắc mạnh khi chạy với tốc độ cao. \r\nDịch vụ Thay chén cổ xe máy Yamaha Exciter 150, Exciter 135, R15, NVX, Sirius, Jupiter, Grande, Janus, Freego, Nouvo, Luvias..."
            ],
            [
                "name" => "Thay chén cổ xe máy Honda", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Thay chén cổ xe máy Honda giúp khắc phục tình trạng đầu tay lái phát ra tiếng kêu lụp cụp khi di chuyển trên các đoạn đường gồ ghề, tay lái điều khiển cứng, nặng, khó xoay hoặc đầu xe bị rung lắc mạnh khi chạy với tốc độ cao. \r\nDịch vụ Thay chén cổ xe máy Honda Winner 150, Winner X, Air Blade, Vision, Lead, SH, SH Mode, PCX, Vario, Click Thái, Wave Alpha/ RSX 110, Future, Dream, Dylan, PS.."
            ],
            [
                "name" => "Vệ sinh kim phun xăng điện tử Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vệ sinh kim phun xăng điện tử Fi là việc bảo dưỡng định kỳ giúp làm sạch những bụi bẩn, tạp chất được hình thành, làm bẩn hệ thống phun xăng điện tử FI xe máy trong thời gian dài. \r\nVệ sinh kim phun xăng Fi giúp xe máy tăng tốc mượt mà, tiết kiệm được nhiên liệu, gia tăng được tuổi thọ của động cơ. \r\nDịch vụ Vệ sinh kim phun xăng điện tử Fi cho các loại xe máy Honda, Yamaha: Exciter 150, Winner 150, Winner X, Air Blade, Vario, Click, SH, SH Mode, Vision, Lead, PCX, NVX, Janus,...."
            ],
            [
                "name" => "Khắc phục lỗi vô nước đồng hồ Vario", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lỗi đồng hồ Vario bị nước vào mà nguyên nhân thường do đi trời mưa, rửa xe.  \r\nViệc khắc phục lỗi vô nước đồng hồ Vario giúp ngăn ngừa nguy cơ nước vào đồng hồ Vario 125/150 làm hư hỏng mạch điện tử bên trong,"
            ],
            [
                "name" => "Gói bảo dưỡng xe máy số, xe côn tay", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Bảo dưỡng xe số, xe côn tay định kỳ giúp tăng độ bền, loại bỏ sớm nguy cơ gây hỏng hóc nghiêm trọng. \r\nBảo dưỡng xe máy số, xe côn tay giúp phát hiện và sửa chữa kịp thời những hư hỏng của xe, để xe máy luôn bền bỉ và tiết kiệm được nhiều chi phí sửa chữa. \r\nDịch vụ bảo dưỡng xe số, xe côn tay Winner 150, Winner X, Exciter 135, Exciter 150, Sonic, Wave Alpha, Wave RSX, Future, Dream, Sirius, Jupiter..."
            ],
            [
                "name" => "Gói bảo dưỡng xe tay ga", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Bảo dưỡng xe tay ga định kỳ giúp tăng độ bền, loại bỏ sớm nguy cơ gây hỏng hóc nghiêm trọng. \r\nCombo Bảo dưỡng xe ga giúp phát hiện và sửa chữa kịp thời những hư hỏng của xe, để xe luôn bền bỉ và tiết kiệm được nhiều chi phí sửa chữa. \r\nDịch vụ bảo dưỡng xe tay ga Air Blade, Vario, Click, Vision, Lead, SHVN, SH Ý, SH Mode, PCX, NVX, Janus..."
            ],
            [
                "name" => "Vệ sinh nồi xe tay ga", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vệ sinh nồi xe tay ga là việc bảo dưỡng cơ bản giúp làm sạch những bụi bẩn được hình thành từ quá trình vận hành xe ga trong thời gian dài.  \r\nVệ sinh nồi xe ga giúp khắc phục một số lỗi do bộ nồi dơ như: Xe đi không êm, không bốc, ì máy, hao xăng, rung đầu khi lên ga ...  \r\nVệ sinh nồi tay ga sẽ làm sạch và kiểm tra được những chi tiết hư hỏng để hạn những tổn thất chi phí về về sau.\r\nVệ sinh nồi xe tay ga Air Blade, SH, SH Mode, Vision, PCX, NVX, Janus, Nouvo, Janus, Luvias..."
            ],
            [
                "name" => "Nhớt Repsol MXR Platium 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Repsol MXR Platium 10W40 - sản phẩm dành riêng cho các dòng xe số ở thị trường Châu Á, là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nNhớt Repsol MXR Platium 10W40 có độ nhớt với chỉ số 160, chỉ số khá cao, gần như ngang ngửa với các dòng cao cấp như Repsol Racing."
            ],
            [
                "name" => "Nhớt Repsol MXR Platium 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Repsol MXR Platium 10W40 - sản phẩm dành riêng cho các dòng xe số ở thị trường Châu Á, là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nNhớt Repsol MXR Platium 10W40 có độ nhớt với chỉ số 160, chỉ số khá cao, gần như ngang ngửa với các dòng cao cấp như Repsol Racing."
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Premium Scooter 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Gulf Western Oil SYN-M 4T Premium Scooter là loại dầu tổng hợp được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ xe tay ga 4 thì hiện đại, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu xe tay ga 4T thông thường khác. \nNhớt Gulf Western SYN-M 4T Premium Scooter 10W40 có thể sử dụng được cho tất cả loại xe tay ga hiện đại như: SH, AB, Vario, Click, Lead, ADV, PCX, NVX, Vespa ..., được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Premium 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Gulf Western Oil SYN-M 4T Premium là loại dầu tổng hợp được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ 4 thì hiện đại, đặc biệt là những động cơ dùng để đua, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu 4T thông thường khác. \r\nNhớt Gulf Western Oil SYN-M 4T Premium 10W40 có thể sử dụng được cho tất cả loại xe số, côn tay thể thao như: Exciter, Winner, Sonic, Satria, R15, Wave/Dream, Future..., được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Premium 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Gulf Western Oil SYN-M 4T Premium là loại dầu tổng hợp được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ 4 thì hiện đại, đặc biệt là những động cơ dùng để đua, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu 4T thông thường khác. \nNhớt Gulf Western Oil SYN-M 4T Premium 10W40 có thể sử dụng được cho tất cả loại xe số, côn tay thể thao như: Exciter, Winner, Sonic, Satria, R15, Wave/Dream, Future..., được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Nước làm mát GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nước làm mát GoRacing với nguồn nguyên liệu nhập khẩu từ Châu Âu, cùng với công nghệ giảm tối đa ăn mòn động cơ (OAT) Carboxylate, giúp động cơ hoạt động ổn định hơn, duy trì dung dịch tốt hơn, cho phép thời gian sử dụng dài hơn mà không bị đóng cặn so với nước làm mát thông thường. Tính năng đặc biệt nhất của nước làm mát GoRacing là giải nhiệt cực nhanh, được nghiên cứu sử dụng ở điều kiện khí hậu nóng như Việt Nam \r\nNước làm mát GoRacing là dung dịch đã pha sẵn, có thể sử dụng liền mà không phải pha thêm bất kì dung dịch khác. \r\nNước làm mát GoRacing với 3 tính năng vượt trội: độ sôi cao - giải nhiệt nhanh - chống đóng cặn. Thương hiệu GoRacing đã có uy tín trong các sản phẩm chăm sóc xe máy."
            ],
            [
                "name" => "Nhớt chiết lẻ Fuchs Silkolene Pro 4 10W40 XP (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 320012  \r\nNhớt chiết lẻ Fuchs Silkolene Pro 4 10W40 XP luôn tối ưu hóa công nghệ tổng hợp ester, có nguồn gốc từ công nghệ bôi trơn hàng không vũ trụ, để đem đến tính chất chống mài mòn xuất sắc trong một phạm vi nhiệt độ hoạt động trải dài từ thời tiết nóng tới lạnh. Khả năng hoạt động bảo vệ bề mặt tiên tiến cung cấp sự bảo vệ cần thiết cho piston, lòng piston, trục cam và các vòng bi bạc đạn, ngay cả trong giai đoạn bắt đầu khởi động máy cho đến khi dòng chảy nhớt được ổn định. \r\nNhớt Fuchs Silkolene có đặc tính chạy êm mát máy, phù hợp với tất cả các loại xe số và xe tay côn hiện nay như: Wave, Sirius, Winner, Exciter, Raider, Sonic, Satria... \r\nNhớt Fuchs Silkolene Pro 4 10W40 XP sản xuất tại Anh. Dung tích 100ml dành cho xe có dung tích nhớt hơn 1 lít."
            ],
            [
                "name" => "Chai xịt làm sạch dàn nhựa nhám, vỏ lốp xe GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Chai xịt làm sạch dàn nhựa nhám, vỏ lốp xe GoRacing giúp duy trì, bảo dưỡng độ bóng, tẩy rửa làm sạch mốc trắng, phục hồi lại màu sắc ban đầu của các chi tiết dàn nhựa, vỏ xe một cách tuyệt vời. Xế iu của các bạn lúc nào cũng sạch bóng như zin, lại hạn chế bám bụi cực tốt. \r\nƯu điểm của chai xịt làm sạch dàn nhựa nhám, vỏ xe GoRacing: \r\n+ Giúp tẩy sạch chất bẩn, tăng độ bóng, tái tạo độ sáng tự nhiên ban đầu, bảo vệ bề mặt nhựa, da và sao su. \r\n+ Sử dụng dung dịch tạo lớp phủ bảo vệ bề mặt sản phẩm trong thời gian dài chống khô, nứt do tác động môi trường gây nên. Chống ánh nắng mặt trời. \r\n+ Ít bám bụi.  \r\n+ Sử dụng được trên bất kì trang trí bằng nhựa đen/vỏ xe. Không hư hại màu sơn xe. \r\nGoracing thương hiệu đã quá quen thuộc với các bạn với những SP: \r\n- Chai xịt vệ sinh sên Goracing \r\n- Chai xịt bôi trơn sên GoRacing (đang có khuyến mãi tặng cọ chà sên chuyên dụng). \r\nChai xịt làm sạch nhựa dàn nhựa nhám, vỏ xe GoRacing có dung tích 250ml."
            ],
            [
                "name" => "Chai xịt vệ sinh sên GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Chai xịt vệ sinh sên GoRacing (chain cleaner) là dung dịch tẩy rửa, làm sạch bề mặt sên, khô nhanh, giúp cho bề mặt kim loại sáng bóng. Rút ngắn thời gian vệ sinh với mọi bề mặt kim loại. Chai vệ sinh sên GoRacing còn có thể dùng để vệ sinh hệ thống thắng đĩa. \nChai xịt vệ sinh sên GoRacing với những ưu điểm vượt trội như: \n- Tẩy rửa sạch. \n- Bảo vệ màu sên tốt. \n- Chống rỉ sét. \n- Dùng cho sên có phốt và sên không phốt. \n* Dung tích: 400ml. \n* Chai xịt vệ sinh sên GoRacing được phân phối độc quyền bởi Shop2banh."
            ],
            [
                "name" => "Chai xịt bôi trơn sên GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Chai xịt bôi trơn sên GoRacing (Chain Lube) là hỗn hợp dầu bôi trơn, chất hòa tan, khí hóa lỏng. Giúp tạo một lớp phủ lên bề mặt sên, giảm tiếng ồn, chống rỉ sét tận bên trong lõi sên, hạn chế bám bụi, giữ sạch sên lâu hơn. \r\nChai bôi trơn sên GoRacing với 3 tính năng chính: \r\n- Bôi Trơn Lâu: Dung dịch có khả năng bám tốt trên sên từ 7 đến 10 ngày, ít văng ra ngoài khi vận hành. \r\n- Sên Chạy Êm: Khả năng bôi trơn tốt giúp giảm tiếng kêu khi sên khô, làm xe chạy êm, nhanh hơn. \r\n- Ít Bám Bụi: Bảo vệ sên tốt, ít bám cát, đất khi vận hành, dễ dàng vệ sinh sau thời gian sử dụng. \r\n* Dung tích: 400ml. \r\n* Chai xịt bôi trơn sên GoRacing là sản phẩm độc quyền của shop2banh, dùng được cho tất cả loại xe vận hành bằng sên và đang được rất nhiều khách hàng phản hồi là sản phẩm có chất lượng tốt."
            ],
            [
                "name" => "Nước làm mát Liqui Moly (loại pha sẵn)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nước làm mát Liqui Moly đỏ cao cấp cho hệ thống làm mát động cơ, máy móc. Giải nhiệt động cơ, chống đông, chống ăn mòn, chống hình thành rong rêu cặn bẩn trong hệ thống. Nhiệt độ sôi trên 160°C. Nước làm mát đỏ loại này là loại đã pha sẵn, dùng trực tiếp. \r\nNước làm mát hàng chính hãng Liqui Moly nhập khẩu từ Đức. \r\nSử dụng cho tất cả các dòng xe sử dụng hệ thống làm mát bằng dung dịch."
            ],
            [
                "name" => "Nhớt Mobil 1 Gold 5W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mobil 1 Gold 5W30 nhập khẩu U.S.A .Dầu tổng hợp 100% Đáp ứng yêu cầu  khắt khe nhất của các nhà sản xuất.Phù hợp với các dòng xe tay ga hiện đại. Đặc biệt chuẩn cho các dòng xe tay ga của Honda sử dụng chuẩn cấp nhớt 30. \r\nThay mới sau 3000km sử dụng."
            ],
            [
                "name" => "Nước rửa xe bảo vệ màu sơn Sumo", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nước rửa xe Sumo bảo vệ màu sơn với công thức độc đáo dùng dễ tẩy rửa các vết bẩn bám trên bề mặt của lớp sơn, kim loại, không gây hư hỏng, rỉ sét, không làm đổi màu, bạc màu của lớp sơn và các chi tiết lốc máy. Giúp nước sơn luôn bóng loáng như mới và đặc biệt không hại da tay, sức khoẻ người sử dụng"
            ],
            [
                "name" => "Shell Advance Ultra Scooter 5W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance Ultra Scooter 5W40 0,8L, dầu nhớt tổng hợp cao cấp dành cho tất cả các loại xe tay ga 4 thì đời mới hiện nay như Honda SH, Air Blade, Click, Vario, Yamaha NVX, Nouvo,...Bảo vệ tối ưu và khả năng vận hành đáng tin cậy, tăng độ ổn định trượt cao giúp giảm rung động và giảm tiếng ồn. \r\nThông số kỹ thuật: nhớt tổng hợp 100% \r\nAPI SN, Jaso MB, dung tích 0,8 lít."
            ],
            [
                "name" => "Shell Advance Ultra Scooter 5W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance Ultra Scooter 5W40 1L, dầu nhớt tổng hợp cao cấp dành cho tất cả các loại xe tay ga 4 thì đời mới hiện nay như Honda SH, Air Blade, Click, Vario, Yamaha NVX, Nouvo,...Bảo vệ tối ưu và khả năng vận hành đáng tin cậy, tăng độ ổn định trượt cao giúp giảm rung động và giảm tiếng ồn. \r\nThông số kỹ thuật: nhớt tổng hợp 100% \r\nAPI SN, Jaso MB, dung tích 1 lít."
            ],
            [
                "name" => "Phụ gia pha nhớt Liqui Moly MO S2", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Phụ gia pha nhớt động cơ MOS2 Liqui Moly Oil Additiv Là loại phụ gia đặc biệt, chứa thành phần chính là dầu MoS2 loại hoạt chất bôi trơn cực mạnh, giúp dầu nhớt tăng hiệu quả bôi trơn và nâng cao tuổi thọ của nhớt, từ đó động cơ hoạt động trơn tru và êm hơn. \r\n- Sản phẩm đặc biệt thích hợp cho các dòng xe độ, nâng cấp động cơ cũng như các động cơ cũ nằm bãi lâu ngày hay cả với động cơ xe mới. \r\nPhụ gia pha nhớt Liqui Moly MO S2 nhập khẩu từ Đức, pha với nhớt với tỉ lệ 2% (20ml pha với 1 lít nhớt)."
            ],
            [
                "name" => "Chai xịt sên GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Chai xịt sên Goracing là 1 sản phẩm sản xuất theo công nghệ mới với thương hiệu đã được nhiều anh em biker đánh giá tốt trong thời gian gần đây. \r\n Với các xe đi sên trần và đặc biệt là sên vàng thì việc chăm sóc sên là rất cần thiết để đảm bảo xe vận hành được trơn tru êm ái, giữ được vẻ đẹp của sên vàng theo thời gian giúp xe sạch hơn đẹp hơn thì sản phẩm chai xịt sên GoRacing sẽ đáp ứng tốt yêu cầu đó. \r\nChai xịt giúp tạo một lớp mỏng bám dính vào bề mặt dây sên xe máy, bảo vệ chống mòn dây xích và bánh răng. \r\nChai xịt bảo dưỡng sên Goracing 400ml dùng để bảo vệ sên trần cho xe motor, giảm tiếng ồn khi chạy, chịu được áp lực cao trong quá trình vận hành của xe máy. Sản phẩm mang đặc tính hiệu quả mạnh mẽ khi bôi trơn sên ngay và tạo độ bám dính tốt nhất cho xích sên xe máy của bạn. Ngoài ra, chai xịt sên Goracing còn giúp hạn chế bụi bẩn, có thể kéo dài tuổi thọ dây sên, bánh răng."
            ],
            [
                "name" => "Nhớt Liqui Moly 4T Synth 10W50", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Liqui Moly Motorbike Synth 4T 10W50 làm tốt nhiệm vụ bôi trơn giảm thiểu ma sát giữ các chi tiết trong động cơ. Giảm thiểu khả năng tụ tập căn bẩn trong động cơ, giúp bạn dễ dàng vệ sinh động cơ khi bảo dưỡng. \nLiqui Moly Motorbike Synth 4T 10W50 giúp xe máy của bạn khởi động dễ dàng, và tăng tốc nhanh chóng, giúp xe vận hành êm ái và mượt mà hơn. Khi sử dụng Liqui Moly Motorbike Synth 4T 10W50, xe máy của bạn sẽ giảm rung động, giảm tiếng ồn ngay cả khi vận hành ở vận tốc cao."
            ],
            [
                "name" => "Phụ gia tăng tốc Liqui Moly Speed Additive", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Phụ gia tăng tốc Liqui Moly Speed Additive giúp tăng chỉ số Octan, tối ưu quy trình cháy nổ, giảm tiêu hao nhiên liệu, ngăn chặn hình thành cặn bã, nâng cao hiệu xuất động cơ. \r\nPhụ gia tăng tốc Liqui Moly Speed Additive sử dụng cho tất cả loại xe 2 thì, 4 thì, phun xăng điện tử hoặc xăng cơ..."
            ],
            [
                "name" => "Dầu súc động cơ Liqui Moly Engine Flush", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Dầu súc rửa động cơ Liqui Moly Engine Flush, làm sạch động cơ bên trong xe của bạn. Tẩy rửa các chất bẩn bám lâu ngày trong động cơ mà quá trình thay dầu không thể sạch hết. \r\nDầu súc rửa động cơ Liqui Moly Engine Flush sử dụng cho tất cả loại xe."
            ],
            [
                "name" => "Shell Advance 4T AX7 10W40 Synthetic Based 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance 4T AX7 10W40 Synthetic Based là loại nhớt xe máy chuyên dụng dành cho xe số 4 thì của tập đoàn nhớt Shell. Shell Advance 4T AX7 10W40 Synthetic Based được ứng dụng nhiều công nghệ nhớt tiên tiến hiện đại giúp bảo vệ động cơ xe số tốt nhất trong điều kiện đường xá và khí hậu tại Việt Nam."
            ],
            [
                "name" => "Shell Advance 4T AX7 10W40 Synthetic Based 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance 4T AX7 10W40 Synthetic Based 1L là loại nhớt xe máy chuyên dụng dành cho xe số 4 thì của tập đoàn nhớt Shell. Shell Advance 4T AX7 10W40 Synthetic Based 1L được ứng dụng nhiều công nghệ nhớt tiên tiến hiện đại giúp bảo vệ động cơ xe số tốt nhất trong điều kiện đường xá và khí hậu tại Việt Nam."
            ],
            [
                "name" => "Nhớt Amsoil 10W40 Scooter 4 Stroke 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "- Nhớt Amsoil 10W40 Scooter 4 Stroke chuyên dùng cho xe tay ga cao cấp. \r\n- Nhớt tổng hợp  \r\n- API SG, SL / CF, JASO MA / MA2  \r\n- Độ nhớt SAE: 10W40  \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Nhớt Amsoil 10W40 Synthetic Metric 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "- Nhớt Amsol 10W40 Synthetic Metric phù hợp với các dòng xe số tại Việt Nam, đặc biệt là các xe moto PKL.  \r\n- Nhớt tổng hợp 100% Synthese  \r\n- GL-1 • API SG, SL / CF • JASO MA / MA2  \r\n- Độ nhớt SAE 10W40 \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Liqui Moly 4T Additive Shooter, Dung dịch vệ sinh buồng đốt Cacbon Cleaner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "- 4T Additive Shooter là dung dịch vệ sinh buồng đốt Liqui Moly Cacbon Cleaner \r\n- Sản phẩm hỗ trợ của Liqui Moly.  \r\n- Dung tích 80 ml"
            ],
            [
                "name" => "Nhớt Liqui Motorbike 10W40 Formula", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Moly chính hãng chất lượng cao dành cho xe số 4 thì hiện đại. Khả năng chịu nhiệt tốt, bảo vệ động cơ tối ưu, giúp xe vận hành ổn định nhất."
            ],
            [
                "name" => "Nhớt Liqui Moly Motorbike Scooter 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Moly chính hãng chất lượng cao dành cho xe tay ga. Nhớt có độ bền cao, ổn định, giúp xe vận hành tối ưu, tiết kiệm nhiên liệu"
            ],
            [
                "name" => "Nhớt hộp số Liqui Moly Racing Scooter Gear Oil 150ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Giúp động cơ xe có khả năng chịu áp lực cao, giảm tiếng ổn khi vận hành xe, độ nhớt ổn định, chống mài mòn bánh răng hiệu quả nhất."
            ],
            [
                "name" => "Motul Scooter Gear Plus, Nhớt lap (nhớt hộp số) 120ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul Scooter Gear Plus nhớt láp xe tay ga - nhớt hộp số chất lượng cao của hãng Motul. Motul Scooter Gear Plus chống mài mòn bánh răng, giảm độ ma sát tốt hơn cho xe tay ga đời mới, giúp xe chạy êm ái và mạnh mẽ, chống rỉ và chống ăn mòn tốt nhất trên động cơ xe"
            ],
            [
                "name" => "Nhớt Motul Scooter Expert LE 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul Scooter Expert LE 10W40 0.8L nhớt chất lượng cho xe tay ga 4 thì. Motul Scooter Expert LE 10W40 0.8L kiểm soát cặn piston, chống mài mòn hiệu quả giúp tăng tuổi thọ động cơ. Khả năng chống quá nhiệt hoàn hảo phù hợp với chế độ dừng chạy liên tục khi giao thông ở thành phố"
            ],
            [
                "name" => "Nhớt Motul Scooter Expert LE 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul Scooter Expert LE 10W40 1L nhớt chất lượng vượt trội dành cho xe tay ga 4 thì. Nhớt chống quá nhiệt hoàn hảo, tiết kiệm nhiên liệu, tăng tốc nhanh và có độ bền oxy hóa cao"
            ],
            [
                "name" => "Nhớt Motul Scooter Power LE 5W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul Scooter Power LE 5W40 1L nhớt cao cấp dành cho xe tay ga đời mới của hãng nhớt Motul. Nhớt kiểm soát cặn piston, chống mài mòn, chống ăn mòn cực kỳ hiệu quả với khả năng tẩy rửa tuyệt hảo giúp động cơ luôn được giữ sạch. Tiêu chuẩn: API SN, JASO MB"
            ],
            [
                "name" => "Shell Advance AX7 Scooter 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance AX7 Scooter 10W40 0.8L là nhớt xe tay ga cao cấp dành cho xe tay ga 4 thì đời mới. Nhớt mang lại khả năng kiểm soát tốt hơn với sự sang số, tăng tốc êm ái hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động."
            ],
            [
                "name" => "Shell Advance AX7 Scooter 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Shell Advance AX7 Scooter 10W40 1L Nhớt cao cấp chuyên dụng cho xe tay ga 4 thì đời mới. Nhớt mạnh mẽ trọng việc loại bỏ cặn bùn và cặn cứng trong động cơ, chống ăn mòn hiệu quả giúp tăng tuổi thọ động cơ xe tay ga"
            ],
            [
                "name" => "Nhớt Motul 3100 Silver 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul 3100 Silver 0.8L nhớt xe số chất lượng cao của tập đoàn nhớt Motul. Motul 3100 Silver 0.8L có khả năng bôi trơn hiệu quả và giảm ma sát tối đa giúp tiết kiệm nhiên liệu và chống oxy hóa ngăn hiện tượng đặc dầu do tác động của nhiệt giúp kéo dài thời gian sử dụng"
            ],
            [
                "name" => "Nhớt Motul 3100 Silver 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Motul 3100 Silver 1L là loại nhớt chuyên dụng dành cho xe số. Motul 3100 Silver 1L có tính năng bôi trơn hiệu quả và giảm ma sát tối đa giúp tiết kiệm nhiên liệu, chống oxy hóa ngăn hiện tượng đặc dầu do tác động của nhiệt giúp kéo dài thời gian sử dụng"
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Ester Pao 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 380004  \n\nNhớt Gulf Western Oil SYN-M 4T Ester Pao là loại dầu tổng hợp hoàn toàn được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ 4 thì hiện đại, đặc biệt là những động cơ dùng để đua, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu 4T thông thường khác. \nNhớt Gulf Western Oil SYN-M 4T Ester Pao 10W40 là dầu tổng hợp với công nghệ cao nhất PAO và Ester, sản phẩm có màu nhớt là cam phản quang rất độc đáo. \nNhớt Gulf Western Oil SYN-M 4T Ester Pao 10W40 có thể sử dụng được cho tất cả loại xe thể thao từ PKN đến PKL, được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Mobil 1 Racing 4T 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mobil 1 Racing 4T 10W40  là loại nhớt cao cấp đặc biệt chuyên dụng cho các dòng mô tô phân khối lớn hiện đại mới nhất như: Exciter 150, msx 125, raider 150, fz 150i,... Nhớt tiết kiệm nhiên liệu tối ưu nhất, kết hợp với khả năng tăng tốc xe dễ dàng và vượt trội"
            ],
            [
                "name" => "Nhớt Mobil 1 0W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 930012  \nNhớt Mobil 1 0W40 là dầu nhớt tổng hợp hoàn toàn (fully synthetic), đạt và vượt các cấp chất lượng quốc tế API SN. \nDầu nhớt 100% tổng hợp giúp tăng cường lớp màng dầu bảo vệ động cơ ở nhiệt độ cao và vận tốc lớn. Chỉ sử dụng cho xe tay ga đời mới có bộ ly hợp khô."
            ],
            [
                "name" => "Nhớt Liqui Moly Motorbike Street 4T 10W40 1lit", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Moly chính hãng chất lượng cao dành cho xe số 4 thì hiện đại. Khả năng chịu nhiệt tốt, bảo vệ động cơ tối ưu, giúp xe vận hành ổn định nhất."
            ],
            [
                "name" => "Nhớt Maxima Full Syn 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Maxima Full Syn 10W40 là dòng nhớt hoàn toàn mới của Maxima, với nhiều công nghệ như chống mài mòn các chi tiết máy cực tốt, dòng nhớt cho xe có khả năng tăng tốc khá bốc tuy nhiên vẫn giữ độ êm của máy, cùng với đó là chỉ số độ nhớt cao 161. \nNhớt Maxima Full Syn 10W40 phù hợp cho các dòng xe số trên thị trường, nhớt được sản xuất tại Mỹ."
            ],
            [
                "name" => "Nhớt láp Gulf Western Oil MoS2 80W90 120ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt láp Gulf Western Oil MoS2  80W90 dành cho xe tay ga được sản xuất chính hãng bởi tập đoàn dầu nhớt Gulf Western Oil. Alpha Gear Oil MoS2 là sản phẩm được Gulf Western Oil nghiên cứu và sản xuất dành riêng cho các dòng xe tay ga, với tính năng bôi trơn hộp số xe tay ga hiệu quảm đặc biệt khả năng chống hú cực tốt mang đến cho các bạn cảm giác vận hàng êm ái, bảo vệ các chi tiết bên trong hộp số được an toàn và hoạt động ổn định nhất. \nNhớt láp Gulf Western Oil MoS2 80W90 120ml đặc biệt có màu đen với nguyên liệu nhập khẩu từ Châu Âu, cấp nhớt GL5 cực cao dành cho mọi loại xe tay ga cao cấp."
            ],
            [
                "name" => "Nhớt Liqui Scooter Formula 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Scooter Formula 10W40 (0.8L) là dầu bán tổng hợp với công thức hoàn toàn mới dành riêng cho xe tay ga, đảm bảo bôi trơn liên tục, độ hao hụt dầu thấp, giảm tiếng ồn vận hành trong mọi điều kiện hoạt động. \nNhớt Liqui Scooter Formula 10W40  phù hợp cho các dòng xe tay ga, được nhập khẩu 100% chính hãng Liqui Moly Đức."
            ],
            [
                "name" => "Nhớt chiết lẻ Motul 300V Factory Line 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Motul 300V Factory Line 10W40 được người dùng Việt Nam đánh giá là một trong những sản phẩm nhớt xe máy chất lượng cao cấp dành cho xe mô tô phân khối lớn tốt nhất hiện nay.  \r\n\r\nMotul 300V 10W40 cũng là sản phẩm duy nhất trên thế giới đạt đến công nghệ ESTER Core, một công nghệ độc quyền của hãng dầu nhớt Motul, nâng tầm cải tiến và đáp ứng các yêu cầu kỹ thuật của những thế hệ động cơ đời mới nhất với tính năng bảo vệ chống mài mòn, chống giảm áp suất dầu và chống hiện tượng oxy hóa ở nhiệt độ cao, tối ưu hóa công suất và độ tin cậy cực cao. \r\n\r\nNhớt chiết lẻ Motul 300V Factory Line 10W40 dung tích 100ml dành cho các xe dung tích hơn 1 lít nhưng đỡ phải mua 2 chai."
            ],
            [
                "name" => "Nhớt chiết lẻ Motul H-Tech 100 4T 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Motul H-Tech 100 4T 10W40 (100ml) là loại nhớt xe số chất lượng cao dành cho xe máy động cơ 4 thì. Đây là sản phẩm nhớt của tập đoàn Motul – nhà sản xuất dầu nhớt hàng đầu của Pháp. Motul H-Tech 100 4T 10W40 đã được nhiều hãng xe máy uy tín tín nhiệm và khuyên dùng trong thời gian qua. Motul H-Tech 100 4T 10W40 tích hợp đồng thời nhiều tính năng tuyệt hảo của một sản phẩm nhớt xe máy chất lượng như: chống oxy hóa tuyệt vời giúp ngăn ngừa tình trạng dầu bị đặc lại do tác động của nhiệt độ; khả năng bôi trơn tốt làm giảm ma sát hiệu quả và chống mài mòn. \r\n\r\nNhớt Motul H-Tech 100ml dùng cho các dòng xe dung tich trên 1 lít, tiện cho khách đỡ phải mua 2 chai 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W30 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 320002  \nNhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W30 (100ml) ứng dụng các công nghệ tổng hợp tiên tiến của hãng nhớt Liqui Moly đặc chế cho xe số 4 thì. Sức mạnh tổng hợp các chất phụ gia cao cấp đã làm nên chất lượng vượt trội của nhớt Liqui Moly Motorbike Street 4T 10W30, công nghệ tổng hợp này giúp cho nhớt giảm thiểu khả năng tiêu hao nhiên liệu, và thân thiện với môi trường. \n\nLưu ý: Theo như nhà sản xuất Liqui Moly Motorbike Street 4T 10W30 có thể kéo dài thời gian thay nhớt khi xe đi được 3000km. Nhưng theo khuyến cao của các chuyên gia dầu nhớt, các bạn nên thay nhớt khi xe đi được từ 2000 - 2500 km. \nNhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W30 (100ml) thích hợp cho xe có dung tích nhớt trên 1 lít muốn mua lẻ."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W40 (100ml) là loại nhớt chuyên dùng cho các dòng xe số 4 thì hiện đại hiện nay trên thị trường Việt Nam. Liqui Moly Motorbike Street 4T 10W40 luôn mang lại sự tin cậy cho động cơ xe số 4 thì của bạn, nhớt có khả năng chịu nhiệt tốt và bảo vệ động cơ tối ưu. Bạn sẽ thật sự hài lòng khi chọn Liqui Moly Motorbike Street 4T 10W40 bởi lẽ đây là loại nhớt chất lượng cao cho xe số 4 thì và luôn đảm bảo đầy đủ các tiêu chuẩn mà động cơ của các loại xe số 4 thì đòi hỏi. \r\n\r\nNhớt Liqui Moly Motorbike Street 4T 10W40 dung tích 100ml dùng cho các dòng xe dung tich trên 1 lít, tiện cho khách đỡ phải mua 2 chai 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ... \r\n\r\nLưu ý: Theo như nhà sản xuất Liqui Moly Motorbike Street 4T 10W40 có thể kéo dài thời gian thay nhớt khi xe đi được 3000km. Nhưng theo khuyến cao của các chuyên gia dầu nhớt, các bạn nên thay nhớt khi xe đi được từ 2000 - 2500 km"
            ],
            [
                "name" => "Nhớt chiết lẻ Repsol Racing 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Repsol Racing 10W40 (100ml) là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nNhớt Repsol Racing 10w40 khả năng thích nghi cao, độc đáo, phù hợp với hầu hết các loại xe và các loại động cơ 4 thì. Nhớt giúp giảm nhiệt tốt, cải thiện tốt sức mạnh và độ bền của động cơ. Loại nhớt này mang lại khả năng kiểm soát tốt hơn với sự sang số êm hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động. \r\n\r\nNhớt Repsol Racing 10W40 (100ml) dành cho các dòng xe dung tích nhớt trên 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Wolver Racing Synthetic 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Wolver Racing Synthetic 10W40 (100ml) là loại dầu nhớt bôi trơn tổng hợp đặc biệt dành riêng cho động cơ xe máy 4 thì được nhập khẩu chính hãng từ Đức. Wolver Racing được biết đến là dòng nhớt được ứng dụng đặc biệt cho các loại xe máy phân khối lớn, bên cạnh đó còn có thể dùng tốt cho tất cả các loại xe máy có bộ ly hợp khô và ướt (xe số và xe tay ga). \nNhớt Wolver Racing Synthetic 10W40 (100ml) thích hợp mua thêm cho các xe có dung tích nhớt trên 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Motul 7100 10W50 4T (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Motul 7100 10W50 4T (100ml) là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất, Motul 7100 4T 10W50 1L luôn bảo vệ động cơ xe máy tốt nhất và kéo dài thời gian thay nhớt tốt hơn các sản phẩm nhớt xe máy khác.  \r\nThời gian sử dụng nhớt Motul 7100 10W50 khi xe đi được khoảng 2000 - 2.500km các bạn nên thay nhớt. \r\nNhớt Motul 7100 10W50 4T 100ml thích hợp mua thêm cho các dòng xe có dung tích nhớt hơn 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 .."
            ],
            [
                "name" => "Nhớt chiết lẻ Shell Advance Ultra 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Shell Advance Ultra 10W40 (100ml) là nhớt xe máy chất lượng được thiết kế đặc biệt dành riêng cho phân khúc xe mô tô phân khối lớn, các loại xe côn tay. Shell Advance Ultra 10W40 1L được phát triển nhằm mang lại sự bảo vệ và vận hành tối ưu của hãng nhớt Shell, giúp kéo dài tuổi thọ động cơ.  \r\nNhớt Shell Advance Ultra 10W40 là sự kết hợp hoàn hảo từ công nghệ R.C.E và thực tế dựa trên sự hợp tác và nghiên cứu kĩ thuật của tập đoàn dầu nhớt Shell và các đội đua xe mô tô trứ danh nhằm mang lại sự bảo vệ và vận hành tối ưu giúp kéo dài tuổi thọ động cơ, tăng khả năng kiểm soát tốt hơn với sự sang số êm hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động. \r\nNhớt Shell Advance Ultra 10W40 (100ml) thích hợp mua thêm cho xe có dung tích nhớt trên 1 lít như:  Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Amsoil 10W40 Performance (150ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Amsoil 10W40 Performance (150ml) là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất, Nhớt Amsoil 10W40 Performance  giúp giảm thiểu ma sát trong quá trình vận hành của động cơ một cách tối đa, hạn chế việc ăn mòn các chi tiết trong động cơ. Giúp cho động cơ luôn vận hành trơn tru, mượt mà trong mọi điều kiện thời tiết khắc nghiệt. \n\nNhớt Amsoil 10W40 Performance (150ml) phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam có dung tích nhớt hơn 1lit như : Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Amsoil 10W40 Synthetic Metric (150ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Amsol 10W40 Synthetic Metric (150ml) là nhãn hiệu dầu nhớt Amsoil danh tiếng đến từ Mỹ, là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất. \r\nNhớt Amsol 10W40 Synthetic Metric luôn bảo vệ động cơ xe máy tốt nhất và kéo dài thời gian thay nhớt tốt hơn các sản phẩm nhớt xe máy khác. \r\nNhớt Amsol 10W40 Synthetic Metric (150ml) phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam có dung tích nhớt hơn 1lit như : Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Amsoil 10W30 Synthetic Metric (150ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt chiết lẻ Nhớt Amsol 10W30 Synthetic Metric (150ml) là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất.  \nNhớt Amsol 10W30 Synthetic Metric luôn bảo vệ động cơ xe máy tốt nhất và kéo dài thời gian thay nhớt tốt hơn các sản phẩm nhớt xe máy khác.  \nNhớt Amsol 10W30 Synthetic Metric 150ml phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam có dung tích nhớt hơn 1lit như : Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt Motul Scooter LE 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Motul Scooter LE 10W40 0.8L nhớt chất lượng cho xe tay ga 4 thì, kiểm soát cặn piston, chống mài mòn hiệu quả giúp tăng tuổi thọ động cơ. Khả năng chống quá nhiệt hoàn hảo phù hợp với chế độ dừng chạy liên tục khi giao thông ở thành phố. \nNhớt Motul Scooter LE 10W40 được sản xuất bới chính hãng Motul VN."
            ],
            [
                "name" => "Nhớt Amsoil 10W30 Synthetic Metric 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "- Nhớt Amsol 10W30 Synthetic Metric phù hợp với các dòng xe số tại Việt Nam, đặc biệt là các xe moto PKL.  \r\n- Nhớt tổng hợp 100% Synthese  \r\n- GL-1 • API SG, SL / CF • JASO MA / MA2  \r\n- Độ nhớt SAE: 10W30 \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Nhớt Fuchs Comp 4 10W40 XP", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Fuchs Silkolene Comp 4 10w40 XP được chế tạo để đáp ứng nhu cầu của cả động cơ 4 thì làm mát bằng không khí và nước. Khả năng năng bám chặt và bề mặt giúp Comp 4 trở thành sản phẩm lý tưởng cho tất cả các linh kiện hiệu suất cao trong động cơ và hộp số . \nCông nghệ Tổng hợp hoàn toàn đã được chứng minh cung cấp khả năng đặc biệt chống mài mòn và hiệu năng chống ma sát dưới tất cả các điều kiện khắc nghiệt của nhiệt độ. \nTối ưu hóa công nghệ tổng hợp ester để đem đến tính chất chống mài mòn xuất sắc trong một phạm vi nhiệt độ hoạt động trải dài từ thời tiết nóng tới lạnh. \nNhớt Fuchs Silkolene Comp 4 10w40 XP có khả năng hoạt động bảo vệ bề mặt tiên tiến cung cấp sự bảo vệ cần thiết cho piston, lòng piston, trục cam và các vòng bi bạc đạn, ngay cả trong giai đoạn bắt đầu khởi động máy cho đến khi dòng chảy nhớt được ổn định."
            ],
            [
                "name" => "Nhớt Liqui Molygen Scooter 5W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Liqui Moly Molygen Scooter 5W30 mang những công thức đặc biệt đúng như tên gọi của nó, là sản phẩm nhớt dành riêng cho xe tay ga hiện đại rất chất lượng và được ưa chuộng trên nhiều nước bởi tín năng bảo vệ động cơ cực tốt. \r\nNhớt Liqui Moly Molygen Scooter 5W30 được hãng Liqui Moly sản xuất đặc biệt dành cho các dòng xe tay ga hiện đại hiện nay trên thị trường Việt, có thể kể đến những chiếc xe tay ga thông dụng và đắt tiền. \r\nNhớt Liqui Moly Molygen Scooter 5W30 có thể kéo dài thời gian thay nhớt lên rất lâu, có thể đến 2500 - 3000km."
            ],
            [
                "name" => "Nhớt Liqui Molygen Scooter 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Liqui Moly Molygen Scooter 10W40 mang những công thức đặc biệt đúng như tên gọi của nó, là sản phẩm nhớt dành riêng cho xe tay ga hiện đại rất chất lượng và được ưa chuộng trên nhiều nước bởi tín năng bảo vệ động cơ cực tốt. \r\nNhớt Liqui Moly Molygen Scooter 10W40 được hãng Liqui Moly sản xuất đặc biệt dành cho các dòng xe tay ga hiện đại hiện nay trên thị trường Việt, có thể kể đến những chiếc xe tay ga thông dụng và đắt tiền. \r\nNhớt Liqui Moly Molygen Scooter 10W40 có thể kéo dài thời gian thay nhớt lên rất lâu, có thể đến 2500 - 3000km."
            ],
            [
                "name" => "Nhớt Liqui Moly Motorbike Street 4T 10W30 1l", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Nhớt Liqui Moly Motorbike Street 4T 10W30 được tập đoàn dầu nhớt Liqui Moly nghiên cứu và chế tạo để trở thành một sản phẩm nhớt chuyên dụng dành cho các dòng xe máy 4 thì hiện nay. Độ nhớt an toàn, chất lượng cao đã giúp cho nhớt Liqui Moly Motorbike Street 4T 10W30 được nhiều biker Việt tin dùng và lựa chọn"
            ]

        ]);
        Category::where('name', 'vỏ xe')->first()->products()->createMany([
            [
                "name" => "Lốp Aspira Sportivo (110/80-14 - 140/70-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Sportivo 110/80-14 - 140/70-14 chính hãng Indonesia dành cho xe Yamaha NVX các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức.  \r\nLốp Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 với ưu điểm là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng.",

            ],


            [
                "name" => "Lốp Maxxis 3D gai kim cương (80/90-17 - 110/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Maxxis 3D gai kim cương 80/90-17 - 110/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155... các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 80/90-17 - 110/70-17 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Vỏ xe Aspira Urbano 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Urbano 120/70-17 gắn được cho xe số như Exciter, Winner, FZ150i...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Urbano thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Urbano 120/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Sportivo (80/90-17 - 110/80-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Sportivo 80/90-17 - 110/80-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155... các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. \r\nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 80/90-17 - 110/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Dunlop D102A (70/90-17 - 120/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop D102A 70/90-17 - 120/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155... các đời. \r\nvới thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt. \r\nVỏ xe Dunlop D102A 70/90-17 - 120/70-17 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Timsun TS823 (80/90-17 - 110/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Timsun TS823 80/90-17 - 110/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155, Exciter 135... các đời. \r\nLốp Timsun TS823 là dòng lốp xe máy đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (90/80-17 - 120/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Pirelli Diablo Rosso Sport 90/80-17 - 120/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155, Fz150i... các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 90/80-17 - 120/70-17, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (90/80-17 - 120/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Street 2 90/80-17 - 120/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155, Fz150i... các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nLốp Michelin Pilot Street 2 90/80-17 - 120/70-17 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Dunlop D307 (90/90-12 - 100/90-10)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop D307 90/90-12 - 100/90-10 dành cho xe Honda Lead 125, SCR 110, Yamaha Latte, Azuro, Attila Alizabeth các đời. \r\nLốp Dunlop D307 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt. \r\nVỏ Dunlop D307 90/90-12 - 100/90-10 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin City Grip (90/90-12 - 100/90-10)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin City Grip 90/90-12 - 100/90-10 dành cho xe Honda Lead 125, SCR 110, Yamaha Latte, Azuro, Attila Alizabeth các đời. \r\nLốp Michelin City Grip rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, giúp thoát nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 90/90-12 - 100/90-10 được sản xuất tại Thái Lan, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn."
            ],
            [
                "name" => "Lốp Aspira Sportivo (110/80-14 - 140/70-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Sportivo 110/80-14 - 140/70-14 chính hãng Indonesia dành cho xe Yamaha NVX các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức.  \r\nLốp Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 với ưu điểm là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Dunlop Scoot Smart (110/80-14 - 140/70-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop Scoot Smart 110/80-14 - 140/70-14 chính hãng Indonesia dành cho xe Yamaha NVX các đời. \r\nLốp Dunlop Scoot Smart 110/80-14 - 140/70-14 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm xử lý mượt mà hơn khi vào cua, đồng thời mang lại cảm giác thoải mái cho người lái."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 130/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 130/70-12 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 130/70-12 dành cho các dòng xe: MSX, Vespa Sprint, Vespa GTS, Primavera..."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (90/80-17 - 100/80-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Moto GP 90/80-17 - 100/80-17 dành cho xe Winner 150 V1, Winner X, Exciter 135, Exciter 150, Exciter 155... các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\nVỏ Michelin Moto GP 90/80-17 - 100/80-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Aspira Sportivo (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Sportivo 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 70/90-17 - 80/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Pirelli Diablo Rosso Sport 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 70/90-17 - 80/90-17, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Maxxis 3D gai kim cương (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Maxxis 3D gai kim cương 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 70/90-17 - 80/90-17 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Lốp Dunlop TT902 (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop TT902 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Dunlop TT902 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt. \r\nVỏ xe Dunlop TT902 70/90-17 - 80/90-17 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Timsun TS692 (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Timsun TS692 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Timsun TS692 là dòng lốp xe máy đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối."
            ],
            [
                "name" => "Lốp Champion SHR85 (IZ 01) (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Champion SHR85 (IZ 01) 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Champion SHR85 (IZ 01) với thiết kế gai thể thao chạy được đường city lẫn đường trường. Gai lốp Champion SHR85 tạo cho người lái cảm giác xe chạy có trớn và lướt trên mặt đường. \r\nVỏ xe Champion SHR85 (IZ 01) 70/90-17 - 80/90-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION  đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR85  (IZ 01) chính hãng 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR85 (IZ 01) chính hãng 80/90-17. \r\nThiết kế gai thể thao chạy được đường city lẫn đường trường. Gai lốp sẽ cho người lái cảm giác xe chạy có trớn và lướt trên mặt đường. \r\nVỏ xe Champion sản xuất tại Thailand. CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất vỏ xe từ hạng nặng cho đến hạng nhẹ. \r\nVỏ xe Champion SHR85 (IZ 01) chính hãng 80/90-17 gắn được các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo....hoặc bánh trước Winner, Exciter 150 mới."
            ],
            [
                "name" => "Vỏ xe Champion SHR85 (IZ 01) chính hãng 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR85 (IZ 01) chính hãng 70/90-17. \r\nThiết kế gai thể thao chạy được đường city lẫn đường trường. Gai lốp sẽ cho người lái cảm giác xe chạy có trớn và lướt trên mặt đường. \r\nVỏ xe Champion sản xuất tại Thailand. CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất vỏ xe từ hạng nặng cho đến hạng nhẹ. \r\nVỏ xe Champion SHR85 (IZ 01) chính hãng 70/90-17 gắn được các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo..."
            ],
            [
                "name" => "Lốp Champion SHR86 (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Champion SHR86 (100/80-16 - 120/80-16) dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nLốp Champion SHR86 có kiểu gai như Dunlop SH Ý lúc trước nhìn sang và đẹp, có thể gắn vừa xe Honda SH. \r\nVỏ xe Champion SHR86 100/80-16 - 120/80-16 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR86 chính hãng 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR86 chính hãng 100/80-16 có kiểu gai như Dunlop SH Ý lúc trước nhìn sang và đẹp, có thể gắn vừa xe Honda SH. \r\nVỏ xe Champion SHR86 chính hãng 100/80-16 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR86 chính hãng 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR86 chính hãng 120/80-16 có kiểu gai như Dunlop SH Ý lúc trước nhìn sang và đẹp, có thể gắn vừa xe Honda SH. \r\nVỏ xe Champion SHR86 chính hãng 120/80-16 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất vỏ Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Moto GP 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n \r\nVỏ Michelin Moto GP 70/90-17 - 80/90-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Street 2 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nLốp Michelin Pilot Street 2 70/90-17 - 80/90-17 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Michelin City Extra (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin City Extra 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nVỏ Michelin City Extra, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 70/90-17 - 80/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra chính hãng được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Maxxis 3D gai kim cương (80/90-16 - 100/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Maxxis 3D gai kim cương 80/90-16 - 100/90-14 dành cho xe SH Mode 125 các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 80/90-16 - 100/90-14 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (80/90-16 - 100/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Street 2 80/90-16 - 100/90-14 dành cho xe SH Mode 125 các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nLốp Michelin Pilot Street 2 80/90-16 - 100/90-14 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Dunlop D307 (80/90-16 - 100/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop D307 80/90-16 - 100/90-14 dành cho xe SH Mode 125 các đời. \r\nDunlop thương hiệu lốp xe nổi tiếng được sản xuất tại Indonesia. \r\nLốp Dunlop D307 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt."
            ],
            [
                "name" => "Lốp Champion SHR79 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Champion SHR79 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Champion SHR79 chính hãng có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, lốp được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế.  \r\nCHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp...  \r\nChất lượng vỏ Champion đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Lốp Champion SHR78 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Champion SHR78 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Champion SHR78 chính hãng có kiểu gai Rosso thể thao tuyệt đẹp, được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế.  \r\nCHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp...  \r\nChất lượng vỏ Champion đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Lốp Aspira Stretto (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Stretto 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Aspira Stretto với gai vỏ hoàn toàn mới, nhìn rất hiện đại, được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Stretto 90/80-14 - 100/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Stretto (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Stretto 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Aspira Stretto với gai vỏ hoàn toàn mới, nhìn rất hiện đại, được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Stretto 80/90-14 - 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Sportivo (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Sportivo 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 80/90-14 - 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Sportivo (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Sportivo 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 80/90-14 - 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Timsun TS692 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Timsun TS692 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Timsun TS692 là dòng lốp xe máy đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối."
            ],
            [
                "name" => "Lốp Maxxis 3D gai kim cương (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Maxxis 3D gai kim cương 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 80/90-14 - 90/90-14 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Lốp Pirelli Angel Scooter (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Pirelli Angel Scooter 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nChất lượng lốp Pirelli Angel Scooter đã được nhiều anh em trải nghiệm và đánh giá khá cao \r\nVỏ Pirelli Angel Scooter được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Angel Scooter 90/80-14 - 100/80-14, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Pirelli Diablo Rosso Sport 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 90/80-14 - 100/80-14, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Pirelli Diablo Rosso Sport 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 80/90-14 - 90/90-14, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Moto GP 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao.  \r\nVỏ Michelin Moto GP 90/80-14 - 100/80-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Aspira Sportivo (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Aspira Sportivo 100/80-16 - 120/80-16 dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nVỏ xe Aspira Sportivo với ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nLốp Aspira Sportivo 100/80-16 - 120/80-16 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Michelin Anakee Street (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Anakee Street 80/90-14 - 90/90-14 dành cho xe  Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Michelin Anakee Street là sản phẩm lốp mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nLốp Michelin Anakee Street 80/90-14 - 90/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Anakee Street (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Anakee Street 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Michelin Anakee Street là sản phẩm lốp mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nLốp Michelin Anakee Street 90/80-14 - 100/80-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Moto GP 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao.  \r\nVỏ Michelin Moto GP 80/90-14 - 90/90-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Michelin City Extra (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin City Extra 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nVỏ Michelin City Extra, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 80/90-14 - 90/90-14 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra chính hãng được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin Pilot Street 2 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nLốp Michelin Pilot Street 2 80/90-14 - 90/90-14 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Dunlop D115 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop D115 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nDunlop thương hiệu lốp xe nổi tiếng được sản xuất tại Indonesia. \r\nLốp Dunlop D115 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt."
            ],
            [
                "name" => "Lốp Pirelli Angel Scooter (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Pirelli Angel Scooter 100/80-16 - 120/80-16 dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nPirelli thương hiệu lốp xe nổi tiếng đến từ Italy được sản xuất tại Indonesia. \r\nVỏ Pirelli Angel Scooter được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt."
            ],
            [
                "name" => "Lốp Dunlop K330A (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop K330A 100/80-16 - 120/80-16 chính hãng Indonesia dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nVỏ Dunlop K330A thiết kế gai nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt. \r\nVỏ Dunlop K330A 100/80-16 - 120/80-16 với chất liệu cao su mềm tạo độ bám tốt cùng với lực cản lăn thấp khi vận hành giúp tiết kiệm nhiên liệu."
            ],
            [
                "name" => "Lốp Michelin City Grip 2 (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Michelin City Grip 2 (100/80-16 - 120/80-16) rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 (100/80-16 - 120/80-16) dành cho xe Honda SH 125i , 150i , 160i các đời."
            ],
            [
                "name" => "Lốp Conti Scoot (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Conti Scoot (100/80-16 - 120/80-16) dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \r\nVỏ Conti Scoot (100/80-16 - 120/80-16) được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \r\nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Lốp Dunlop Scoot Smart 2 (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Lốp Dunlop Scoot Smart 2 100/80-16 - 120/80-16 chính hãng Indonesia dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nLốp Dunlop Scoot Smart 2 100/80-16 - 120/80-16 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm so với mẫu gai K330A cũ là độ bên tăng 20% và hiệu suất của vỏ tăng 10%."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR79 chính hãng 90/80-14 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe  AB, Vario, Click, Vision. \nVỏ xe Champion SHR79 chính hãng 90/80-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ Dunlop 120/80-16 Scoot Smart 2", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop 120/80-16 Scoot Smart 2 chính hãng Indonesia dành cho bánh sau xe Honda SH125 và 150 các đời. \r\nVỏ Dunlop 120/80-16 Scoot Smart 2 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm so với mẫu gai Scoot Smart cũ là độ bền tăng 20% và hiệu suất của vỏ tăng 10%."
            ],
            [
                "name" => "Vỏ Dunlop 100/80-16 Scoot Smart 2", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop 100/80-16 Scoot Smart 2 chính hãng Indonesia dành cho bánh trước xe Honda SH, ngoài ra có thể gắn cho xe Liberty, Medley. \r\nVỏ Dunlop 100/80-16 Scoot Smart 2 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm so với mẫu gai Scoot Smart cũ là độ bền tăng 20% và hiệu suất của vỏ tăng 10%."
            ],
            [
                "name" => "Vỏ Michelin City Extra 60/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Extra 60/90-17, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin.  Vỏ Michelin City Extra 60/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả.  Công nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng.  Vỏ Michelin City Extra 60/90-17 gắn được các dòng xe Wave, Dream, Future... được sản xuất chính hãng Michelin."
            ],
            [
                "name" => "Vỏ Michelin City Extra 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Extra 70/90-17, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 70/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra 70/90-17 gắn được các dòng xe Wave, Dream, Future... được sản xuất chính hãng Michelin."
            ],
            [
                "name" => "Vỏ Michelin City Extra 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Extra 80/90-17, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 80/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra 80/90-17 gắn được các dòng xe Wave, Dream, Future... được sản xuất chính hãng Michelin."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 140/70-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 140/70-16 dành cho bánh sau xe SH300 và Sh350i thích đi size to hơn nguyên bản."
            ],
            [
                "name" => "Vỏ xe ContiScoot 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe ContiScoot 100/80-16 dành cho bánh trước xe SH. \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 100/80-16 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe ContiScoot 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe ContiScoot 120/80-16 dành cho bánh sau xe SH. \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 100/80-16 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe ContiScoot 110/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe ContiScoot 110/70-12 có thể gắn vừa xe MSX, Vespa, Grande,.... \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 110/70-12 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe ContiScoot 120/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe ContiScoot 120/70-12 có thể gắn vừa xe MSX, Vespa, Grande, Scoopy.... \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 120/70-12 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ.  \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe Timsun 90/90-14 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Timsun 90/90-14 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ xe Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \r\nVỏ xe Timsun 90/90-14 TS692 chính hãng xuất xứ China, có thể gắn nhiều loại xe ga: AB, Vario, Click, Vision..."
            ],
            [
                "name" => "Vỏ xe Timsun 80/90-14 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Timsun 80/90-14 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \n Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 80/90-14 TS692 chính hãng xuất xứ China, có thể gắn nhiều loại xe ga: AB, Vario, Click, Vision..."
            ],
            [
                "name" => "Vỏ xe Timsun 80/90-17 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Timsun 80/90-17 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\n Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \r\nVỏ xe Timsun 80/90-17 TS692 chính hãng xuất xứ China, có thể gắn nhiều loại xe số, Wave, Dream, Future, Exciter, Sonic, Raider, Satria..."
            ],
            [
                "name" => "Vỏ xe Timsun 70/90-17 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Timsun 70/90-17 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \n Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 70/90-17 TS692 chính hãng xuất xứ China, có thể gắn bánh trước nhiều loại xe số, Wave, Dream, Exciter, Sonic, Raider, Satria..."
            ],
            [
                "name" => "Vỏ xe Timsun 110/70-17 TS823 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Timsun 110/70-17 TS823 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \nVỏ xe Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 110/70-17 TS823 chính hãng xuất xứ China, có thể gắn nhiều loại xe số thể thao như Exciter, Winner..."
            ],
            [
                "name" => "Vỏ xe Timsun 80/90-17 TS823 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Timsun 80/90-17 TS823 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \nVỏ xe Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 80/90-17 TS823 chính hãng xuất xứ China, có thể gắn nhiều loại xe số, Wave, Dream, Exciter..."
            ],
            [
                "name" => "Vỏ xe Timsun 70/90-17 TS823 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Timsun 70/90-17 TS823 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 70/90-17 TS823 chính hãng xuất xứ China, có thể gắn bánh trước nhiều loại xe số, Wave, Dream, Exciter..."
            ],
            [
                "name" => "Vỏ Pirelli 100/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 100/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 100/90-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, Vario, PCX, Sh Mode..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2  size 130/70-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 130/70-16 dành cho bánh sau xe SH300 và Sh350i."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR79 chính hãng 90/90-14 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe  AB, Vario, Click, Vision. \nVỏ xe Champion SHR79 chính hãng 90/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR79 chính hãng 80/90-14 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe  AB, Vario, Click, Vision. \nVỏ xe Champion SHR79 chính hãng 80/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 120/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR79 chính hãng 120/70-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe MSX, Vespa, Grande \nVỏ xe Champion SHR79 chính hãng 120/70-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 110/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR79 chính hãng 110/70-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe MSX, Vespa, Grande \nVỏ xe Champion SHR79 chính hãng 110/70-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 110/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR79 chính hãng 110/90-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR79 chính hãng 110/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 100/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR79 chính hãng 100/90-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe Scoopy, Zoomer, Freego \r\nVỏ xe Champion SHR79 chính hãng 100/90-12 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR67 chính hãng 110/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR67 chính hãng 110/90-12 có kiểu gai thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \r\nVỏ xe Champion SHR67 chính hãng 110/90-12 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR67 chính hãng 100/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR67 chính hãng 100/90-12 có kiểu gai thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR67 chính hãng 100/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 90/90-14 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Vario, Click, AB. \nVỏ xe Champion SHR78 chính hãng 90/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 80/90-14 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Vario, Click, AB. \nVỏ xe Champion SHR78 chính hãng 80/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 110/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 110/90-12 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR78 chính hãng 110/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 100/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 100/90-12 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR78 chính hãng 100/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 110/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Exciter, Winner. \r\nVỏ xe Champion SHR78 chính hãng 110/70-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 120/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Exciter, Winner. \nVỏ xe Champion SHR78 chính hãng 120/70-17 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 130/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Exciter, Winner, moto PKL 150-400cc. \r\nVỏ xe Champion SHR78 chính hãng 130/70-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 140/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 140/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe moto PKL 150-400cc. \r\nVỏ xe Champion SHR78 chính hãng 140/70-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 150/60-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 150/60-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe PKL 250-400cc. \r\nVỏ xe Champion SHR78 chính hãng 150/60-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 160/60-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Champion SHR78 chính hãng 160/60-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe PKL 250-400cc. \nVỏ xe Champion SHR78 chính hãng 160/60-17 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ Dunlop 120/80-16 gai D451 zin theo xe SH Ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 030058  \r\nVỏ Dunlop 120/80-16 gai D451 zin theo xe SH Ý, gắn được cho SHVN, được coi là mẫu vỏ xe tốt nhất hiện nay do khả năng bám đường cực tốt an toàn tuyệt đối khi lưu thông trên đường theo tiêu chuẩn Châu Âu cùng với đó là sự êm ái, dễ chịu cho người lái xe khi đi trên những quãng đường dài hay đường xấu, ghồ ghề. \r\nVỏ Dunlop 120/80-16 gai D451 dành cho sau SH Ý, SHVN,... \r\nVỏ Dunlop 120/80-16 gai D451 được sản xuất tại Slovenia."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 120/70-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 120/70-17 gắn được các xe: Winner, Exciter 150, Exciter 155,...\r\n  Vỏ Michelin Moto GP 120/70-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 80/90-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 80/90-17 gắn được hầu hết tất cả các loại xe số phổ thông: Wave Dream, Exciter, Raider, Axelo, Future, Sirius, Jupiter...\r\n  Vỏ Michelin Moto GP 80/90-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 70/90-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 70/90-17 gắn được hầu hết tất cả các loại xe số phổ thông: Wave Dream, Exciter, Raider, Axelo, Future, Sirius, Jupiter...\r\n  Vỏ Michelin Moto GP 70/90-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 100/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 100/90-14 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 100/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, PCX...\r\n  Vỏ Michelin Moto GP 100/90-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 90/90-14 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 90/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, Vision, Luvias...\r\n  Vỏ Michelin Moto GP 90/90-14 được nhập từ chính hãng Michelin Thái Lan"
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 80/90-14 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 80/90-14 gắn được vỏ trước cho các xe: Air Blade, Click, Vario, Vision, Luvias.......\r\n  Vỏ Michelin Moto GP 80/90-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin City Extra 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Extra 90/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 90/90-14 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt, chứa nước vào và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả \r\nVỏ Michelin City Extra 90/90-14 gắn được các dòng xe AB, Vario, Click, Vision... được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin City Extra 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Extra 80/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 80/90-14 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra 80/90-14 gắn được các dòng xe AB, Vario, Click, Vision... được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 100/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Anakee Street 100/80-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 100/80-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 100/80-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Anakee Street 90/80-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 90/80-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 90/80-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Anakee Street 90/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 90/90-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 90/90-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Anakee Street 80/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 80/90-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 80/90-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia"
            ],
            [
                "name" => "Vỏ Metzeler 80/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Metzeler 80/80-14, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 80/80-14 gắn được bánh trước cho xe AB, Click, Vision, Luvias..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 110/70-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 110/70-16 dành cho bánh trước  xe SH300 và Sh350i."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nVỏ Michelin Pilot Street 2 size 120/70-17 gắn được các xe: Winner, Exciter 150, Exciter 155. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Cặp vỏ IRC SS-530R chính hãng Thái Lan cho Honda SH", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Cặp vỏ IRC SS-530R chính hãng Thái Lan cho Honda SH (bánh trước và sau), hàng IRC Thái Lan nên rất lượng tốt hơn nhiều so với IRC Việt Nam. Gai vỏ giống như vỏ IRC zin theo xe Honda SH nên rất tiện lợi để khách  thay thế vỏ xe chất lượng hơn nhưng vẫn giữ được nét zin nguyên bản. \nCặp vỏ IRC SS-530R chính hãng Thái Lan gồm bánh trước 100/80-16 và bánh sau 120/80-16 gắn được cho dòng xe Honda SH 125/150 các đời."
            ],
            [
                "name" => "Vỏ xe IRC Maxing DR-5 80/90-14 chính hãng Thái Lan", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ IRC MAXING Kiểu Gai DR-5 80/90-14, đây là vỏ Phân Phúc Đặc Biệt chính hãng của IRC THAILAND. \nVỏ IRC Maxing DR-5 có mẫu Gai CITY thế hệ mới bám đường cực tốt phù hợp cho mọi điều kiện thời tiết khô ráo hay ẩm ướt. Hợp chất cao su đặc biệt cho những quảng đường dài và tốc độ cao. \nVỏ IRC MAXING DR-5 80/90-14 gắn được cho các dòng xe: AB, Click, Vario, Vision..."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 80/90-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop D307 size 80/90-16 dành cho lốp sau các loại xe như Nouvo, Hayate, SH Mode, Vision 2021, Impluse,... \r\nThương hiệu lốp Dunlop chất lượng và giá thành hợp lí đã được khách hàng ưa chuộng. \r\nVỏ xe Dunlop D307 80/90-16 chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành, vỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Metzeler 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Metzeler 90/80-14, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 90/80-14 gắn được bánh sau cho xe AB, Click, Vision, Luvias..."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 100/90-10", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nVỏ Michelin Pilot Street 2 size 100/90-10 gắn được các loại xe: Atilla, Lead, Latte, Acruzo... \r\nVỏ Michelin 100/90-10 Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Stretto 90/80-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, Vision, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Stretto 90/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỎ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 100/80-16 dành cho bánh trước  xe SH."
            ],
            [
                "name" => "Vỏ xe Camel Pilot 888 size 100/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Camel Pilot 888 100/70-17 có gai giống Pilot Street 1 đã từng rất được ưu thích bởi anh em Biker, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel Pilot 888 100/70-17 gắn vừa xe  Exciter135-150, Winner... \nVỏ xe Camel Pilot 888 100/70-17 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ xe Camel Pilot 888 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Camel Pilot 888 80/90-17 có gai giống Pilot Street 1 đã từng rất được ưu thích bởi anh em Biker, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel Pilot 888 80/90-17 gắn vừa xe Wave, Dream, Sirius, Jupiter, Sonic, Exciter135-150, Winner,... \nVỏ xe Camel Pilot 888 80/90-17 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 80/90-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 80/90-16 gắn được các loại xe: SH Mode, Nouvo...\r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Dunlop 140/70-14 Scoot Smart", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop 140/70-14 Scoot Smart dành cho Yamaha NVX, thương hiệu Dunlop đã quá quen thuộc với người tiêu dùng Việt Nam với chất lượng bám đường tốt kể cả trên đường mưa, ẩm ướt... \r\nVỏ xe Dunlop 140/70-14 Scoot Smart dành cho Yamaha NVX được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Dunlop 110/80-14 Scoot Smart", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop 110/80-14 Scoot Smart dành cho Yamaha NVX, Honda PCX, thương hiệu Dunlop đã quá quen thuộc với người tiêu dùng Việt Nam với chất lượng bám đường tốt kể cả trên đường mưa, ẩm ướt... \r\nVỏ xe Dunlop 110/80-14 Scoot Smart dành cho Yamaha NVX, Honda PCX được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Pirelli 70/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 70/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 70/90-14 Diablo Rosso Sport gắn được cho Mio, Luvias, Janus..."
            ],
            [
                "name" => "Vỏ Pirelli 140/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 140/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 140/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter 150, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 150/70-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 150/70-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 150/70-14  gắn được cho bánh sau xe NVX đi size to"
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nMichelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 120/80-16 dành cho bánh sau xe SH."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 150/60-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 150/60-17 gắn được các dòng xe moto tầm dưới 300cc như: Ninja 300, Z300, R3, CBR250, CBR150, R15, GSX150... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 130/70-17 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 130/70-17 gắn được các xe: Winner, Exciter 150 muốn đi bánh lớn và các dòng xe moto tầm dưới 300cc như: Ninja 300, Z300, R3, CBR250, CBR150, R15, GSX150... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 100/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 100/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, PCX... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 110/70-17 gắn được các xe: Exciter 135 muốn đi bánh sau to hoặc Winner, Exciter 150 muốn đi bánh nhỏ. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 80/90-17 gắn được bánh sau các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo...hoặc bánh trước Winner, Exciter 150 mới \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ xe Camel 563 size 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Camel 563 130/70-17 có gai Rosso Sport hình tia sét rất độc đáo, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel 563 130/70-17 gắn vừa xe Exciter 150, Winner, các xe moto 150cc,... \nVỏ xe Camel 563 130/70-17 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ xe Camel 563 size 70/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Camel 563 70/90-14 có gai Rosso Sport hình tia sét rất độc đáo, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel 563 70/90-14 gắn vừa xe Mio, Luvias... \nVỏ xe Camel 563 70/90-14 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 100/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Stretto 100/80-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao.\r\nVỏ xe Aspira Stretto 100/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Stretto 90/90-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, Vision, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Stretto 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Stretto 80/90-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, Vision...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Stretto 80/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 120/70-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 120/70-14 gắn được cho bánh sau xe PCX hoặc bánh trước xe Forza 300, NVX."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 90/80-17 gắn được bánh sau các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo...hoặc bánh trước Winner, Exciter 150 mới \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 70/90-17 gắn được các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 140/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 140/70-17 gắn được các xe: Winner, Exciter 150 muốn đi bánh lớn và các dòng xe moto tầm dưới 300cc như: Ninja 300, Z300, R3, CBR250, CBR150, R15, GSX150... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 100/80-17 gắn được các xe: Exciter 135 hay Winner, Exciter 150 muốn đi bánh nhỏ. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 60/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 60/90-17 gắn được bánh trước các loại xe: Wave, Dream đời cũ hoặc các loại xe số phổ thông đi bánh nhỏ. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 70/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 70/90-14 gắn được bánh trước các loại xe: Luvias, Mio, Janus.... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Metzeler 70/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Metzeler 70/90-14, với thiết kế hoàn toàn mới, kiểu dáng rất thể thao và là dòng cao cấp hơn nhiều so với các loại thông thường. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy, chất lượng đã được rất nhiều khách hàng tin dùng bởi thiết kế rất đẹp và độ bám đường cực chuẩn. \nVỏ Metzeler 70/90-14 gắn được bánh trước cho xe Luvias, Mio..."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \nVỏ Michelin Pilot Street 2 size 80/90-14 gắn được bánh trước các loại xe: Air Blade, Click, Vario, Vision, Luvias... \nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \nVỏ Michelin Pilot Street 2 size 90/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, Vision, Luvias... \nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Metzeler 130/70-12 Me 7 Teen", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 160025  \r\nVỏ Metzeler 130/70-12 Me 7 Teen, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường, giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \r\nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \r\nVỏ xe Metzeler 130/70-12 Me 7 Teen gắn được các loại xe: Vespa Sprint, GTS, Honda MSX..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 100/80-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 100/80-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, Vario, PCX..."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 90/80-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 90/80-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, Vario, PCX..."
            ],
            [
                "name" => "Vỏ Pirelli 90/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 90/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 90/90-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, vario, AB, Vision..."
            ],
            [
                "name" => "Vỏ Pirelli 80/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 80/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 80/90-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, vario, AB, Vision..."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 90/80-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 90/80-14 gắn được cho xe Vario/Click, PCX,AB, Vision..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 100/80-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 100/80-14 gắn được cho xe Vario/Click, PCX..."
            ],
            [
                "name" => "Vỏ Pirelli 110/70-12 Diablo Rosso Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 110/70-12 Diablo Rosso Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 110/70-12 gắn được cho bánh trước xe các dòng xe Vespa Sprint, Primavera và Yamaha Grande."
            ],
            [
                "name" => "Vỏ Metzeler 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 160019  \r\nMetzeler 100/80-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \r\nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \r\nMetzeler 100/80-17 gắn được bánh sau các dòng xe số trên thị trường như Exicter 135, WInner, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ xe Dunlop D102A size 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop D102A size 120/70-17 không ruột dành cho bánh sau Winner 150, Exciter 150 hoặc FZ150i, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop D102A size 120/70-17 chính hãng Dunlop, made in Indonesia."
            ],
            [
                "name" => "Vỏ Pirelli 150/60-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 150/60-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 150/60-17 Diablo Rosso Sport gắn được các loại xe Moto 300-500cc như: CBR250, CBR500, R3, R25, MT03. Z300, Ninja 300-400..."
            ],
            [
                "name" => "Vỏ Pirelli 130/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 130/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 130/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter 150, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 100/80-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 100/80-17 Diablo Rosso Sport gắn được bánh sau hầu như tất cả loại xe số phổ thông: Winner, Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 90/80-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 90/80-17 Diablo Rosso Sport gắn được bánh trước Winner, Exciter 150 và bánh sau hầu như tất cả loại xe số phổ thông: Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 90/80-14 gắn size zin cho Vario/Click mới và các xe PCX, AB, Vision...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 90/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 120/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 120/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter 150, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 110/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 110/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 110/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 80/90-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 80/90-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 80/90-17 Diablo Rosso Sport gắn được hầu như tất cả loại xe số phổ thông: Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ Pirelli 70/90-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 70/90-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 70/90-17 Diablo Rosso Sport gắn được cho bánh trước hầu như tất cả loại xe số phổ thông: Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ Pirelli 130/70-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 130/70-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 130/70-16 gắn được cho bánh sau xe Honda SH 300i, SH350i..."
            ],
            [
                "name" => "Vỏ Pirelli 110/70-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 110/70-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 110/70-16 gắn được cho bánh trước xe Honda SH 300i, SH350i..."
            ],
            [
                "name" => "Vỏ Pirelli 120/80-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 120/80-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 120/80-16 gắn được cho bánh sau xe Honda SH 125/150..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 100/80-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 100/80-16 gắn được cho bánh trước xe Honda SH 125/150..."
            ],
            [
                "name" => "Vỏ Pirelli 130/70-12 Diablo Rosso Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 130/70-12 Diablo Rosso Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 130/70-12 gắn được cho bánh sau xe các dòng xe Vespa: Sprint, Primavera, GTS, 946 và Honda MSX."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-12 Diablo Rosso Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 120/70-12 Diablo Rosso Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 120/70-12 gắn được cho bánh trước xe các dòng xe Vespa: Sprint, Primavera, GTS, 946 và Honda MSX."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 100/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop D307 size 100/90-14  dành cho lốp sau các loại xe như Vario/Click 2018, PCX, SH Mode...hoặc xe Air Blade muốn đi bánh to. \r\nThương hiệu Dunlop chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành. Vỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 140/70-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 140/70-14 gắn được cho bánh sau xe Yamaha NVX, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 140/70-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 110/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 110/80-14 gắn được cho xe NVX các loại hoặc bánh sau Vario, PCX mới, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 110/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Michelin City Grip 90/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Michelin City Grip 90/90-12 rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Thái Lan, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \r\nVỏ Michelin City grip 90/90-12 gắn được trên bánh trước xe Lead, SCR, Nozza, Acruzo..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 100/90-10", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 070628  \r\nVỏ xe Michelin City Grip 100/90-10 rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Thái Lan, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \r\nVỏ Michelin City grip 100/90-10 gắn được trên bánh sau xe Lead, SCR, Elizabeth, Spacy..."
            ],
            [
                "name" => "Cặp vỏ Dunlop D451 zin theo xe SH ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop D451 zin theo xe Honda Sh Ý, gắn được cho SHVN được coi là mẫu vỏ xe tốt nhất hiện nay do khả năng bám đường cực tốt an toàn tuyệt đối khi lưu thông trên đường theo tiêu chuẩn Châu Âu cùng với đó là sự êm ái, dễ chịu cho người lái xe khi đi trên những quãng đường dài hay đường xấu, ghồ ghề. \r\nThông số vỏ: trước 100/80-16 và sau 120/80-16. \r\nVỏ Dunlop D451 được sản xuất tại Slovenia"
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 120/80-16 gắn được cho xe Sh125-150 các loại, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 120/80-16 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 100/80-16 gắn được cho xe Sh125-150 các loại, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 100/80-16 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 110/70-17 gắn được cho xe số như Exciter, Winner, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Sportivo 110/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Pirelli 140/70-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 140/70-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 140/70-14  gắn được cho bánh sau xe NVX"
            ],
            [
                "name" => "Vỏ Pirelli 110/80-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Mã: 150015  \nVỏ xe Pirelli 110/80-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 110/80-14  gắn được cho bánh trước xe NVX, bánh sau PCX, Click, Vario..."
            ],
            [
                "name" => "Vỏ Dunlop D404F size 100/90-18", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop D404F size 100/90-18 không ruột dành cho các loại xe Moto Classic như: Brixton, Cafe Race, Tracker... vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ Dunlop D404F size 100/90-18 chính hãng Dunlop, made in Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop D102A size 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop D102A size 130/70-17 không ruột dành cho bánh sau đi size to Winner 150, Exciter 150 hoặc FZ150i, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop D102A size 130/70-17 chính hãng Dunlop, made in Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop D102A size 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop D102A size 70/90-17 mới không ruột dành cho bánh trước các loại xe số phổ thông, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop D102A size 70/90-17 là hàng chính hãng Dunlop, made in Indonesia"
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 100/80-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 100/80-17 gắn được vỏ sau Winner rất đẹp, vỏ sau xe Exciter 135, Raider...gắn được vỏ sau xe Wave, Dream, Axelo, Future...muốn đi bánh lớn.\r\n  Vỏ Michelin Moto GP 100/80-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin Pilot Moto GP 90/80-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 90/80-17 gắn được vỏ trước xe Winner, vỏ sau xe Exciter 135 muốn đi bánh nhỏ, vỏ sau xe Wave, Dream, Axelo, Future...muốn đi bánh lớn.\r\n  Vỏ Michelin Moto GP 90/80-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ xe Dunlop TT902 size 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop 90/80-17 chính hãng không ruột dành cho bánh sau các loại xe số phổ thông đi size lớn, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop TT902 size 90/80-17 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Maxxis 110/70-17 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 110/70-17 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 110/70-17 gắn vừa cho Exciter 135 muốn đi size sau to và Winner, Exciter 150 muốn đi bánh nhỏ."
            ],
            [
                "name" => "Vỏ Michelin City Grip 140/70-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Michelin City Grip rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \nVỏ Michelin City grip 140/70-14 gắn được trên bánh sau xe Yamaha NVX."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 90/80-17 Angel City, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 90/80-17 gắn được cho bánh sau hầu như tất cả loại xe số phổ thông đi bánh to như: Wave, Dream, Future, Axelo, Sport, FX, raider...hoặc bánh trước Winner 150"
            ],
            [
                "name" => "Vỏ Pirelli 110/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 110/70-17 Angel City, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 110/70-17 gắn được cho bánh sau Exciter 150, Exciter 135, Winner, FZ..."
            ],
            [
                "name" => "Vỏ Maxxis 120/70-11 gai M6017", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 120/70-11 bánh sau dành cho Vespa Primavera. Thương hiệu đã quá quen thuộc tại thị trường Việt Nam, vỏ Maxxis bám đường khá tốt, an toàn khi lưu thông trên các cung đường xấu, trơn trượt và quan trọng là Vỏ Maxxis có giá cả khá mềm so với các thương hiệu khác."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "vỏ xe Aspira Terreno 70/90-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 70/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Maxxis 100/70-17 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 100/70-17 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 100/70-17 gắn vừa cho Exciter 135, Raider, Axelo...các dòng xe số khác hoặc Winner, Exciter 150 muốn đi bánh nhỏ"
            ],
            [
                "name" => "Vỏ Maxxis 90/90-16 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 90/90-16 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 90/90-16 gắn vừa cho xe Yamaha Nouvo, Suzuki Hayate, Impulse muốn đi bánh sau to cho đầm xe."
            ],
            [
                "name" => "Vỏ Pirelli 150/60-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 150/60-17 Angel City dòng cao cấp, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 150/60-17 gắn được cho bánh sau lớn cho Exciter 150, các dòng xe Moto 150cc như CBR150, R15, Suzuki GSX..."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Terreno 130/70-17 gắn được cho xe côn tay như Exciter, Winner, CBR150, R15...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \r\nVỏ xe Aspira Terreno 130/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Terreno 110/70-17 gắn được cho xe số phổ thông như  Exciter, Axelo, Raider, FX, FZ, Winner...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \r\nVỏ xe Aspira Terreno 110/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Terreno 100/80-17 gắn được cho xe số phổ thông như  Exciter, Axelo, Raider, FX, FZ, Winner...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 100/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Terreno 90/90-14 gắn được cho xe Air Blade, Vision, Click, Vario...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Terreno 80/90-14 gắn được cho xe Air Blade, Vision, Click, Vario...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 80/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 130/70-17 gắn được cho xe số như Exciter, Winner, CBR150, R15, GSX150...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Sportivo 130/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 110/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 110/80-17 gắn được cho xe số như Exciter, Winner, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 110/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 100/80-17 gắn được cho xe số như Exciter, Winner, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Sportivo 100/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 90/80-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 90/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 80/90-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 80/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "vỏ xe Aspira Sportivo 70/90-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 70/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 100/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 100/80-14 gắn được cho xe SH Mode, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 100/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Aspira Sportivo 90/90-14 gắn được cho xe Air Blade, Vision, Click, Vario, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Maxxis 80/90-16 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 80/90-16 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 80/90-16 gắn vừa cho xe Yamaha Nouvo, Suzuki Hayate..."
            ],
            [
                "name" => "Vỏ Maxxis 70/90-16 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 70/90-16 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 70/90-16 gắn vừa cho xe Yamaha Nouvo, Suzuki Hayate..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 150/70-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Michelin City Grip rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \nVỏ Michelin City grip 150/70-14 gắn được trên bánh sau xe Yamaha NVX."
            ],
            [
                "name" => "Vỏ Michelin City Grip Pro 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Michelin City Pro được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn, được mệnh danh là lốp chống đinh với công nghệ chống đâm thủng nhờ có 3 lớp bố được gia cường (Puncture Resistant Technology). Lốp có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ MICHELIN City Pro có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin City Grip Pro được sản xuất tại Thái Lan. \r\nVỏ Michelin City Grip Pro 80/90-14 gắn được bánh trước các loại xe: Air Blade, Click, Vario, Vision, Luvias..."
            ],
            [
                "name" => "Vỏ Maxxis 110/70-11 gai M6017", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 110/70-11 gai M6017 bánh trước dành cho Vespa Primavera, LX. Thương hiệu đã quá quen thuộc tại thị trường Việt Nam, vỏ Maxxis bám đường khá tốt, an toàn khi lưu thông trên các cung đường xấu, trơn trượt và quan trọng là Vỏ Maxxis có giá cả khá mềm so với các thương hiệu khác."
            ],
            [
                "name" => "Vỏ Michelin City Grip 110/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Michelin City Grip rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \nVỏ Michelin City grip 110/80-14 gắn được trên bánh trước xe Yamaha NVX"
            ],
            [
                "name" => "Vỏ Metzeler 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Metzeler 90/80-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 90/80-17 gắn được bánh sau các dòng xe số trên thị trường. Hoặc bánh trước Winner, FZ, CBR...."
            ],
            [
                "name" => "Vỏ Metzeler 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Metzeler 80/90-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 80/90-17 gắn được bánh sau các dòng xe số trên thị trường."
            ],
            [
                "name" => "Vỏ Maxxis 100/90-14 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 100/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 100/90-14 gắn vừa cho Honda AB, CLick, PCX, SH Mode...."
            ],
            [
                "name" => "Vỏ Maxxis 90/90-14 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 90/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 90/90-14 gắn vừa cho Honda Click, AB, Vision, Mio, Luvias, PCX..."
            ],
            [
                "name" => "Vỏ Maxxis 80/90-14 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Maxxis 80/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 80/90-14 gắn vừa cho Honda Click, AB, Vision, Mio, Luvias..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-16 Diablo Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 100/80-16 Diablo Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 100/80-16  gắn được cho bánh trước xe Honda SH, Shark....hoặc bánh sau to cho Yamaha Nouvo, Hayate..."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 90/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop D307 size 90/90-12 chính hãng, Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ Dunlop D307 size 90/90-12 gắn được bánh trước xe Lead, SCR....Vỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin City Grip 2 (110/70-16 - 130/70-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Cặp Lốp Michelin City Grip 2 size 110/70-16 và Michelin City Grip 2 130/70-16 cho Honda SH300i, SH350i với hoa vân City Grip 2 rất phù hợp với điều kiện ở Việt Nam. \r\nLốp Michelin City Grip 2 được sản xuất tại châu âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn."
            ],
            [
                "name" => "Vỏ Pirelli 140/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 140/70-17 Angel City dòng cao cấp, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 140/70-17 gắn được cho bánh sau lớn cho Exciter 150, Raider Fi và Winner 150 và các dòng Moto 300cc trở xuống"
            ],
            [
                "name" => "Vỏ Pirelli 130/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 130/70-17 Angel City dòng cao cấp, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 130/70-17 gắn được cho bánh sau lớn cho Exciter 150, Raider Fi và Winner 150."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 120/70-17 Angel City, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 120/70-17 gắn được cho bánh sau Exciter 150, Raider Fi và Winner 150."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 100/80-17 Angel City, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 100/80-17 gắn được cho bánh sau Exciter 135 và hầu như tất cả loại xe số phổ thông muốn đi bánh lớn."
            ],
            [
                "name" => "Vỏ Pirelli 80/90-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 80/90-17 Angel City, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 80/90-17 gắn được cho bánh sau hầu như tất cả loại xe số phổ thông hoặc bánh trước Exciter 150 hoặc Winner 150"
            ],
            [
                "name" => "Vỏ Pirelli 70/90-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Pirelli 70/90-17 Angel City, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 70/90-17 gắn được cho bánh trước hầu như tất cả loại xe số phổ thông."
            ],
            [
                "name" => "Vỏ xe Dunlop D115 size 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop D115 size 90/90-14 dành cho lốp sau các loại xe như Air Blade các đời, Vario, Click các đời, Vision. \r\nThương hiệu lốp Dunlop chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành. \r\nVỏ xe Dunlop D115 size 90/90-14 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop D115 size 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop D115 size 80/90-14 dành cho lốp trước các loại xe như Air Blade các đời, Vario, Click các đời, Vision. \r\nThương hiệu lốp Dunlop chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành. \r\nVỏ xe Dunlop D115 size 80/90-14 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Maxxis 80/90-17 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Maxxis 80/90-17: Vỏ không ruột dành cho bánh sau các loại xe số phổ thông với chất lượng khá tốt, giá cả phải chăng, hợp với túi tiền của người tiêu dùng."
            ],
            [
                "name" => "Vỏ xe Maxxis 70/90-17 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Maxxis 70/90-17 gai kim cương 3D: Vỏ không ruột dành cho bánh trước các loại xe số phổ thông với chất lượng khá tốt, giá cả phải chăng, hợp với túi tiền của người tiêu dùng."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 100/90-10", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ Dunlop D307 size 100/90-10. Vỏ không ruột dành cho bánh trước sau Attila hoặc sau của Lead, SCR, Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop Scoot Smart 130/70-13", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),

                'image' => '',
                "description" => "Vỏ xe Dunlop Scoot Smart 130/70-13 là vỏ không ruột dành cho bánh sau các loại xe Dylan, PS, @ \r\nVỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop Scoot Smart 130/70-13 được sản xuất tại Indonesia."
            ]

        ]);
    }
}
