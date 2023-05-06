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

            [
                "name" => "Bao tay Ariete (chính hãng) 25/SSF", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Ariete 25/SSF hàng chính hãng, thiết kế của Ariete đậm chất zin, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Ariete 25/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng. \r\nBao tay Ariete 25/SSF gắn được tất cả các loại xe."
            ],
            [
                "name" => "Bao tay Ariete (chính hãng) 23/SSF", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Ariete 23/SSF hàng chính hãng, thiết kế của Ariete đậm chất zin, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Ariete 23/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng. \r\nBao tay Ariete 23/SSF gắn được tất cả các loại xe."
            ],
            [
                "name" => "Bao tay Daytona Line (chính hãng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Daytona Line hàng chính hãng, thiết kế đơn giản có logo Daytona cùng các dòng kẻ ngang nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt, nhất là cho các bạn có mồ hôi tay nhiều. \r\nBao tay Daytona Line có 2 màu: đỏ, xám gắn được tất cả các loại xe, được sản xuất tại Nhật, thương hiệu Daytona rất nổi tiếng trong việc sản xuất phụ tùng xe máy."
            ],
            [
                "name" => "Bộ công tắc đèn Sunfa cho AirBlade 160 2022 - 2023", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ công tắc đèn Sunfa cho Honda AirBlade 160 2022 - 2023, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo. \r\nBộ công tắc đèn Sunfa cho AB 160 phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác. \r\nBảo hành 12 tháng 1 đổi 1. \r\nSản phẩm chưa bao gồm công lắp đặt."
            ],
            [
                "name" => "Bộ công tắc đèn Sunfa cho Vario 2018 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ công tắc đèn Sunfa cho Honda Vario 2018 - 2022, gắn trực tiếp và nút pha cos pha rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo. \r\nBộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác. \r\nBảo hành 12 tháng 1 đổi 1."
            ],
            [
                "name" => "Bộ công tắc đèn Sunfa cho SHVN 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ công tắc đèn Sunfa cho Honda SHVN 2020, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo. \r\nBộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác. \r\nBảo hành 12 tháng 1 đổi 1. \r\nSản phẩm chưa bao gồm công lắp đặt."
            ],
            [
                "name" => "Bộ công tắc đèn Sunfa cho Air Blade 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ công tắc đèn Sunfa cho Honda Air Blade 2020, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo. \r\nBộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác. \r\nBảo hành 12 tháng 1 đổi 1. \r\nSản phẩm chưa bao gồm công lắp đặt."
            ],
            [
                "name" => "Bộ công tắc đèn Sunfa cho Honda Wave A, Blade", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ công tắc đèn Sunfa cho Honda Wave A, Blade, gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo. \r\nBộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.  \r\nBảo hành 12 tháng 1 đổi 1. \r\nGiá sản phẩm chưa bao gồm công lắp đặt."
            ],
            [
                "name" => "Bộ công tắc đèn Sunfa cho Vision 2020 - 2023, Lead 2019 trở về trước (halogen)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ công tắc đèn Sunfa cho Honda Vision 2020 - 2023 và ead 2019 trở về trước (halogen), gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo. \r\nBộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác.  \r\nBảo hành 12 tháng 1 đổi 1. \r\nGiá sản phẩm chưa bao gồm công lắp đặt."
            ],
            [
                "name" => "Bộ công tắc đèn Sunfa cho Lead 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ công tắc đèn Sunfa cho Honda Lead từ 2020 trở về sau (mẫu Lead đèn Led mới), gắn trực tiếp và nút pha cos (passing) rất tiện dụng, full bộ gắn không cần phải khoét dàn nhựa hoặc chế cháo. \r\nBộ công tắc đèn Sunfa phù hợp cho khách không thích mở đèn trời sáng hoặc tạm tắt khi vào đường nhỏ đông người tránh chiếu đèn vào mặt người khác. \r\nBảo hành 12 tháng 1 đổi 1.  \r\nSản phẩm chưa bao gồm công lắp đặt."
            ],
            [
                "name" => "Bộ ốc đĩa Salaya inox 8ly cho Exciter 150 (5con)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc đĩa Salaya inox gồm 5 con 8ly gắn cho Exciter 150, Exciter 155  hoặc các loại xe đĩa 5 lỗ... \r\nỐc inox Salaya cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."
            ],
            [
                "name" => "Gù Carbon fiber chống rung, đầm tay lái cho AB 160, Vario 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù Carbon fiber xịn cực chất, chống rung, đầm tay lái cho AB 160, Vario 160. Thiết kế chắc chắn, nặng hơn nhiều so với gù zin, chất liệu carbon chống trầy, chống ngã khá tốt.\r\nGù Carbon fiber gắn cho AB 160, Vario 160."
            ],
            [
                "name" => "Đèn Led 2 tầng Zhi.Pat cho Yamaha Y125ZR - Yaz", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn Led 2 tầng Zhi.Pat cho Yamaha Y125ZR - Yaz.  \r\nZHI.PAT Y125ZR sở hữu thiết kế vượt trội nổi bật với vẻ đẹp cuốn hút riêng biệt. Thiết kế đèn định vị đầy phong cách cùng sắc cam nổi bật, mang đến nét nhìn hiện đại, trẻ trung và thể thao cho chiếc xe của bạn. \r\nVới 2 màu: Khói - định vị cam hoặc Si bạc - định vị cam. \r\nChính hãng Zhi.Pat Bảo hành 12 tháng."
            ],
            [
                "name" => "Đèn Led 2 tầng Zhi.Pat cho Dream II (Dream Thái), Super Dream", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn Led 2 tầng Zhi.Pat Dream-II-THA cho Dream II (Dream Thái), Super Dream. \r\nZHI.PAT DREAM sở hữu thiết kế vượt trội nổi bật với vẻ đẹp cuốn hút riêng biệt. Thiết kế đèn định vị đầy phong cách cùng sắc cam nổi bật, mang đến nét nhìn hiện đại, trẻ trung và thể thao cho chiếc xe của bạn. \r\nVới 2 màu: Khói - định vị cam hoặc Si bạc - định vị cam.  \r\nChính hãng Zhi.Pat Bảo hành 12 tháng."
            ],
            [
                "name" => "Kính Rizoma vuông mode chân kính mẫu mới", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính Rizoma vuông mode chân kính mẫu mới làm bằng nhôm sắc nét, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau, đảm bảo an toàn, rất thẩm mỹ. \r\nKính Rizoma vuông mode chân kính mẫu mới có thể gắn đước tất cả các loại xe 2 bánh. Với 2 màu: Bạc, đen."
            ],
            [
                "name" => "Gù nặng inox chống rung, đầm tay lái cho các dòng xe", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù dài inox nặng cực chất, chống rung, đầm tay lái. Thiết kế chắc chắn, nặng hơn nhiều so với gù zin, chất liệu inox chống trầy, sáng bóng theo thời gian. \r\nGù dài inox có thể gắn vừa tất cả các loại xe."
            ],
            [
                "name" => "Gù dài inox cho AB 2020, Vario 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù dài inox mới dành riêng cho AB 2020 trở lên và Vario 160 mới mà không cần phải cắt, mài ghi đông và có thể gắn được tất cả loại xe khác một cách nhanh gọn. \r\nGù dài inox được làm nặng, giúp tay lái đầm chắc hơn khi vận hành."
            ],
            [
                "name" => "Nắp nhớt inox Salaya cho các dòng xe Honda, Yamaha", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nắp nhớt inox Salaya cho Honda, Yamaha, thiết kế inox rất chắc chắn, sáng bóng theo thời gian, giá thành hợp lí, dùng để thay thế nắp nhớt zin cũ kỹ hoặc làm món phụ tùng trang trì cực chất. \r\nNắp nhớt inox Salaya cho có thể gắn vừa các dòng xe Honda, Yamaha."
            ],
            [
                "name" => "Đèn phản quang Zhi.Pat SH350i (mắt mèo vuông) cho các dòng xe", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn phản quang Zhi.Pat SH350i (mắt mèo vuông). Sử dụng cho tất cả các dòng xe: Honda - Yamaha.  \r\n- Bộ sản phẩm có 03 màu: Đỏ, Cam, Trắng. \r\n- Sản phẩm gắn như zin. Chính hãng Zhi.Pat."
            ],
            [
                "name" => "Dè trước Zhi.Pat SH350i cho SHVN 125i-150i-160i 2020 - 2023", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ sản phẩm Dè trước Zhi.Pat SH350i sử dụng cho các dòng xe: Honda SHVN 125i-150i-160i 2020 - 2023 \r\n- Bộ sản phẩm có 04 màu: Đen bóng, đỏ, trắng, xám. \r\n- Hai bên hông dè được phối mắt mèo chữ nhật nổi bật. \r\n- Sản phẩm gắn như zin. Chính hãng Zhi.Pat."
            ],
            [
                "name" => "Đèn pha Led 2 tầng Zhi.Pat W110 THA cho Wave 100/110/110S đời 1997 - 2004", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ sản phẩm đèn pha Led 2 tầng Zhi.Pat W110 THA  \n + Sử dụng cho các dòng xe : Xe Wave 100/110/110S đời 1997-2004 \n + Bộ sản phẩm bao gồm : \n     - 01 bộ Đèn Led  02 tầng \n     - 01 cáp nguồn (đính kèm chóa đèn) \n     - 01 Móc khóa Zhi.Pat \n     - 01 Thẻ Bảo hành chính hãng \n     - 01 Bộ hướng dẫn sử dụng \n+ Sản phẩm có 03 mẫu: \n     - Chóa đèn màu khói - định vị tím \n     - Chóa đèn màu khói - định vị xanh \n     - Chóa đèn màu khói - định vị đỏ \n+ Bảo hành chính hãng 12 tháng 1 đổi 1"
            ],
            [
                "name" => "Bao tay CRG viền nhôm", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay CRG viền nhôm mẫu mới, thiết kế đẹp mắt, cao su mềm chắc tạo cảm giác lái an toàn, 2 đầu có viền nhôm hạn chế trượt bao tay về lâu dài. \r\nBao tay CRG viền nhôm có nhiều màu cho khách lựa chọn và gắn được tất cả dòng xe máy."
            ],
            [
                "name" => "Kính chiếu hậu Mview 009", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Kính chiếu hậu Mview 009 có góc quan sát rộng cho bạn tầm nhìn tốt, rõ ràng hoạt động phía sau \r\n- Kính Mview 009 với chất liệu kim loại nhôm CNC cao cấp, bền đẹp, cao cấp hơn nhiều so với vật liệu nhựa bình thường \r\n- Kính chiếu hậu Mview 009 gắn được cho tất cả các loại xe. Có 2 màu: Đen hoặc bạc."
            ],
            [
                "name" => "Móc treo đồ CNC cho Honda SH, Lead,...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Móc treo đồ CNC cho Honda SH, Lead, Scoopy.... và nhiều loại xe khác, với thiết kế nhôm CNC cực đẹp, móc chắc chắn, treo đồ cực tốt.  \nMóc treo đồ CNC có nhiều màu cho khách lựa chọn."
            ],
            [
                "name" => "Tay thắng CNC cho Honda AB 160, PCX 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng CNC mẫu mới nhất dành cho Honda AB 160, PCX 160... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.  \r\nTay thắng CNC cho Honda AB 160, PCX 160 có 2 màu: Đen full và đen phối xám Titan."
            ],
            [
                "name" => "Tay thắng CNC cho Yamaha Exciter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng CNC cẫu mới nhất dành cho Yamaha Exciter... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.  \r\nTay thắng CNC cho Yamaha Exciter có 2 màu: Đen full và đen phối xám Titan."
            ],
            [
                "name" => "Tay thắng CNC cho Honda Vario 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng CNC cẫu mới nhất dành cho Honda Vario 160... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.  \r\nTay thắng CNC cho Honda Vario 160 có 2 màu: Đen full và đen phối xám Titan."
            ],
            [
                "name" => "Chóa bạc Xinhan Zhi.Pat Crypton cho Exciter 135 (4 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chóa đèn xinhan CRYPTON X135 cho Exciter 135 (2005 - 2010), Spark 135. Chính hãng Zhi.pat \r\nSở hữu được vẻ đẹp thể thao, mạnh mẽ đầy sự cuốn hút, giúp chiếc của bạn trở nên nổi trội hơn, khả năng thông báo tín hiệu lẫn định vị chiếc xe cũng được gia tăng đáng kể. \r\n- Chóa TRẮNG BẠC phối màu: Cam/ Đỏ/ Xanh rêu/Xanh dương/Trắng. \r\nBảo hành 12 tháng 1 đổi 1. \r\nLưu ý: Dùng dây và bóng zin theo xe."
            ],
            [
                "name" => "Tay thắng CNC cho Honda Vario 125, 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng CNC cẫu mới nhất dành cho Honda Vario 125-150... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. Tay thắng có thể tăng chỉnh biên độ xa gần, phù hợp cho nhiều người chống mỏi khi đi xa.  \nTay thắng CNC cho Honda Vario có 2 màu: Đen full và đen phối xám Titan."
            ],
            [
                "name" => "Tay thắng CNC cho Honda SH", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng CNC cẫu mới nhất dành cho Honda SH 2 thắng đĩa (SH 125/150i, SH300i, SH350i) các đời... CNC đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn.  Tay thắng có thể tăng chỉnh biên độ xa gần.  Tay thắng CNC cho Honda SH có 2 màu: Đen full và đen phối xám bạc."
            ],
            [
                "name" => "Gù Carbon fiber chống rung, đầm tay lái cho các dòng xe", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù Carbon fiber xịn cực chất, chống rung, đầm tay lái. Thiết kế chắc chắn, nặng hơn nhiều so với gù zin, chất liệu carbon chống trầy, chống ngã khá tốt. \r\nGù Carbon fiber có thể gắn vừa tất cả các loại xe."
            ],
            [
                "name" => "Bộ đầu đèn Zhi.Pat VS110 2022 cho Vision 2014 - 2019", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ đầu đèn Zhi.Pat VS110 2022 sử dụng để nâng cấp cho dòng xe Honda Vision 2014 - 2019 bao gồm:  \n+ Đèn led 2 tầng ZHI.PAT 2021 - 2022 \n+ Bợ Cổ có 2 màu: Đen nhám & Nâu  \n+ Ốp đầu đèn: Trắng & Đỏ & Đen mờ  \nSản phẩm chính hãng Zhi.pat. Bảo hành 12 tháng."
            ],
            [
                "name" => "Bao tay Ariete chính hãng 24/SSF", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Ariete 24/SSF hàng chính hãng, thiết kế đơn giản có ít rãnh gai tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Ariete 24/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng. \r\nBao tay Ariete 24/SSF gắn được tất cả các loại xe."
            ],
            [
                "name" => "Chóa đen Xinhan Zhi.Pat Crypton cho Exciter 135 (4 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chóa đèn xinhan CRYPTON X135 cho Exciter 135 (2005 - 2010), Spark 135. Chính hãng Zhi.pat  \nSở hữu được vẻ đẹp thể thao, mạnh mẽ đầy sự cuốn hút, giúp chiếc của bạn trở nên nổi trội hơn, khả năng thông báo tín hiệu lẫn định vị chiếc xe cũng được gia tăng đáng kể. \n- Chóa ĐEN KHÓI phối màu: Cam/ Đỏ/ Xanh rêu/Xanh dương. \nBảo hành 12 tháng 1 đổi 1. \nLưu ý: Dùng dây và bóng zin theo xe."
            ],
            [
                "name" => "Tay thắng Carbon cho AB160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho AB 160 mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày cực tốt, hàng đặt gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \r\nTay thắng Carbon cho AB 160 có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Gù trung CNC gắn AB 2020, Vario 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù trung CNC mới dành riêng cho AB 2020 trở lên và Vario 160 mới mà không cần phải cắt, mài ghi đông, có thể gắn được tất cả loại xe khác. Thiết kế nhôm CNC logo Brembo cực nét, nhìn sang trọng, đẹp mắt."
            ],
            [
                "name" => "Bao tay gù nhôm X1R V2 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay gù nhôm X1R chính hãng gắn mọi loại xe, thương hiệu X1R gần đây đã trở nên quen thuộc với anh em biker, bởi thiết kế đẹp mắt cùng với giá thành hợp lí. Bao tay với cao su mềm mại, bám chắc tay kể cả khi trời mưa, cùng với đó là nắp chụp gù nhôm CNC theo sản phẩm thiết kế khá đẹp. \r\nBao tay gù nhôm X1R chính hãng là sản phẩm 2 trong 1, giúp khách hàng đỡ phải lăn tăn khi phải chọn mua cả bao tay và gù tay lái."
            ],
            [
                "name" => "Kính chắn gió Zhi.pat chính hãng cho Click, Vario 2017 phong cách Touring", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió Zhi.pat chính hãng cho Click, Vario 2017 đầy thể thao & mạnh mẽ. \r\nCó thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, mang lại cảm giác lái tuyệt vời và đầy phấn khích sau tay lái. \r\nSản phẩm gồm: Pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng...  được bảo hành chính hãng 12 tháng."
            ],
            [
                "name" => "Kính chắn gió ZHI.PAT cho NVX 2016 - 2020 phong cách Touring", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió ZHI.PAT cho NVX 2016 - 2020 phong cách Touring đầy thể thao & mạnh mẽ. \r\nKính chắn gió ZHI.PAT phong cách Touring có thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, kính chắn gió được gia công rất cao cấp mang đến cho Biker cảm giác lái tuyệt vời và đầy phấn khích sau tay lái. \r\nKính chắn gió ZHI.PAT phong cách Touring cho NVX 2016 - 2020 gồm đầy đủ bộ pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng... \r\nSản phẩm được bảo hành chính hãng ZHI.PAT 12 tháng."
            ],
            [
                "name" => "Đĩa KingSpeed 260mm mẫu mới 4 lỗ", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed 260mm vừa cho ra mắt mẫu mới cho thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. Thiết kế mẫu mới dạng bông rất đẹp \nĐĩa KingSpeed 260mm mẫu mới 4 lỗ ốc gắn vừa cho các dòng xe Wave, AB cũ, Exciter 135, Sirius muốn đi đĩa lớn."
            ],
            [
                "name" => "Kính H2C tròn chính hãng mode chân kính", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính H2C loại tròn chính hãng làm bằng nhôm sắc nét, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau, đảm bảo an toàn. Kính H2C đã được mode chân lại, nhìn rất thẩm mỹ, có khả năng xoay 180 độ, tiện lợi cho việc di chuyển  \r\nKính H2C tròn xoay có thể gắn đước tất cả các loại xe 2 bánh."
            ],
            [
                "name" => "Tay côn chính hãng cho Suzuki Satria", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay côn chính hãng cho Suzuki Satria... (tay bên trái), thay thế cho tay côn zin theo xe bị trầy, gãy,...."
            ],
            [
                "name" => "Baga inox 10 ly màu titan cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox 10ly màu titan cho Exciter 150 được làm bằng vật liệu cao cấp, với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy, xe rất thẩm mỹ và gọn gàng."
            ],
            [
                "name" => "Kính CNC 002 mẫu mới", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính CNC 002 mẫu mới, làm bằng nhôm sắc nét, không phải dạng nhựa cứng giá rẻ trên thị trường, có thể xoay 360 độ, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau. \r\nKính CNC 002 có thể gắn đước tất cả các loại xe 2 bánh."
            ],
            [
                "name" => "Tay thắng Carbon cho Vario 160, PCX 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Vario 160, PCX 160 mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Vario 160, PCX 160, Click 160 có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Tay thắng Carbon cho Satria/Raider", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Satria/Raider mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Satria/Raider có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Đèn Led 2 tầng ZHI.PAT cho Sirius SRC110 xăng cơ 2003 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "ZHI.PAT SRC110 – Phiên bản đèn led 2 tầng mới nhất dành cho Sirius SRC110 xăng cơ 2003 - 2022 . \nThông số kỹ thuât Đèn led 2 tầng ZHI.PAT SRC110:  \n+ Điện áp: DC9V - 20V (zin theo xe )  \n+ Passing Beam: 12V/9W  \n+ Driving Beam: 12V/18W  \n+ Kết nối chân H4 theo xe.  \n+ Mặt kính phủ chống trầy. Không bị ố vàng.   \nVới 2 phiên bản màu: Trắng Bạc và Đen Khói. \nChế độ bảo hành 12 tháng chính hãng 1 đổi 1."
            ],
            [
                "name" => "Bộ ốc Salaya dàn áo cho xe Honda Wave nhỏ 100-110", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Honda Wave nhỏ 100-110 cũ, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \r\nBộ ốc dàn áo Salaya cho xe Honda Wave nhỏ gồm: 19 con gắn full dàn áo xe."
            ],
            [
                "name" => "Che két nước CNC Anode cho Honda SHVN 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Che két nước CNC Anode mới nhất dành cho Honda SHVN 2020..., với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước  Che két nước CNC Anode gắn vừa khít cho Honda SHVN 2020, có 3 màu: Anode vàng nhạt, bạc, đen."
            ],
            [
                "name" => "Cảng sau, Tay xách SH350i chính hãng ZHI.PAT cho SHVN 2020 - 2023", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cảng sau, Tay xách SH350i chính hãng ZHI.PAT cho SHVN 2020 - 2023, sản phẩm phá cách hoàn toàn mới, nhìn rất lạ mắt khi trang bị lên xe, sản phẩm rất chắc chắn làm từ nhựa kỹ thuật ABS siêu bền.  \r\nCảng sau, Tay xách SH350i chính hãng ZHI.PAT cho SHVN 2020 - 2023 có 3 màu: Đen bóng, đen nhám, bạc."
            ],
            [
                "name" => "Tay thắng RCB S3 chính hãng cho Honda SH", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho Honda SH 2 thắng đĩa (SH 125/150i, SH300i, SH350i) các đời...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. \nTay thắng RCB S3 chính hãng cho Honda SH có 2 màu: đen và bạc"
            ],
            [
                "name" => "Tay thắng RCB S3 chính hãng cho Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho Honda Winner các đời...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. \nTay thắng RCB S3 chính hãng cho Winner có 2 màu: đen và bạc"
            ],
            [
                "name" => "Tay thắng RCB S3 chính hãng cho AB", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho AB...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. \r\nTay thắng RCB S3 chính hãng cho AB có 2 màu: đen và bạc"
            ],
            [
                "name" => "Tay thắng RCB S3 chính hãng cho Exciter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng RCB S3 chính hãng mẫu mới nhất dành cho Exciter các đời...thiết kế vô cùng đẹp mắt, chi tiết sắc xảo, được rất nhiều khách hàng lựa chọn. \nTay thắng RCB S3 chính hãng cho Exciter có 2 màu: đen và bạc"
            ],
            [
                "name" => "Gù Seven Speed CNC loại to mẫu mới", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù Seven Speed CNC mẫu mới độc lạ, thiết kế lớn hơn bình thường, cực chất, vặn dành cho các loại xe moto, tay ga lớn, kiểu dáng không quá dài, thích hợp cho Biker nào thích đi đơn giản. \r\n\r\nGù Seven Speed CNC loại to có thể gắn vừa tất cả các loại xe."
            ],
            [
                "name" => "Cần số X1R chính hãng cho Winner X (1 chiều)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số X1R chính hãng cho Winner X, thiết kế 1 chiều, làm bằng chất liệu nhôm CNC nên cho ra mẫu mã rất đẹp, ngoài ra cần số rất to, chắc, tiện lợi cho việc sang số nhẹ nhàng. \r\nCần số X1R chính hãng cho Winner X 1 chiều là hàng chính hãng X1R có 2 màu: đen và trắng."
            ],
            [
                "name" => "Gù dẹp inox Salaya S05", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù dẹp inox Salaya  S05, thiết kế mới nhất rất đẹp, sang trọng, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù dẹp inox Salaya S05 thiết kế ngắn, gọn gàng vào bao tay xe. \r\nGù dẹp inox Salaya S05 có thể gắn tất cả loại xe máy."
            ],
            [
                "name" => "Ốp mặt nạ Zhi.Pat mẫu SH350i gắn SHVN 2020 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ốp mặt nạ Zhi.Pat mẫu SH350i gắn SHVN 2020 – 2022, sản phẩm mới dành cho các bạn chạy SHVN thích gắn mặt nạ mẫu SH350i với giá thành cực kỳ hợp lí, không phải chờ đợi đặt hàng hãng, Ốp mặt nạ mẫu SH350i thiết kế đẹp, tinh tế, gắn vừa khít như zin không cần chế. \r\nỐp mặt nạ Zhi.Pat mẫu SH350i gắn SHVN 2020 – 2022 làm từ chất liệu nhựa ABS chất lượng bền, chịu lực, chịu nhiết. \r\nChính hãng Zhi.pat có các màu: Đen mờ - Đen bóng - Trắng - Đỏ - Xám."
            ],
            [
                "name" => "Van vòi inox Salaya mẫu mới", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Van vòi inox Salaya mẫu Thái lan kiểu dáng mới rất độc lạ, chất kiệu inox bền bỉ theo thời gian và không xuống màu như các loại van vòi nhôm, Titan, nhựa màu thông thường. \r\nVan vòi inox Salaya mẫu Thái Lan mới có thể gắn cho tất cả các dòng xe."
            ],
            [
                "name" => "Đĩa KingSpeed 220mm mẫu mới 4 lỗ cho Wave, AB...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed 220mm vừa cho ra mắt mẫu mới cho thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. Thiết kế mẫu mới dạng bông rất đẹp \nĐĩa KingSpeed 220mm mẫu mới 4 lỗ ốc gắn vừa như zin cho các dòng xe Wave, AB cũ, Exciter 135, Sirius......"
            ],
            [
                "name" => "Cảng sau (Tay xách) nhôm nguyên khối cho SH Ý, SHVN 2013 - 2019 chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cảng sau (Tay xách) nhôm nguyên khối chính hãng ZHI.PAT. \nĐẳng cấp vượt trội dành cho Gu thẩm mỹ xứng tầm. Với thiết kế cực ngầu, chất liệu nhôm nguyên khối sắc sảo, bền bỉ. \nDùng được các xe: SH Ý 2008 - 2010| SHVN 2013 - 2019 \nGồm 2 màu cá tính: Đen mờ - Xám bạc \nBảo hành chính hãng 12 tháng."
            ],
            [
                "name" => "Ốp đầu trước ZHI.PAT mẫu SH350i gắn SHVN 2020 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ốp đầu trước ZHI.PAT mẫu SH350i gắn SHVN 2020 - 2022, hàng hót dành cho các bạn chạy SHVN thích gắn ốp đầu (mão) SH350i với giá thành cực kỳ hợp lí, không phải chờ đợi đặt hàng hãng, ốp đầu SH350i thiết kế đẹp, tinh tế so với ốp đầu zin. \nỐp đầu trước ZHIPAT mẫu SH350i gắn SHVN 2020 - 2022 làm từ chất liệu nhựa ABS chất lượng, có các màu: Đen mờ - Đen bóng - Trắng - Đỏ ."
            ],
            [
                "name" => "Cùm tăng tốc Domino chính hãng 1 dây ga trên", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cùm tăng tốc Domino chính hãng 1 dây ga trên màu đen giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. \r\nCùm ga tăng Domino 1 dây ga trên chính hãng được sản xuất tại Italy, 1 bộ gồm: cùm và cặp bao tay chính hãng gắn được tất cả dòng xe."
            ],
            [
                "name" => "Đĩa KingSpeed sau cho SH350i, SH300i, SH125i, SH150i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho SH350i, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giữa lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed sau mẫu mới nhất cho SH350i, SH300i có size 240mm gắn vừa như zin không cần chế cháo. Có thể gắn vừa khít cho bánh trước sau cho SH125-SH150i"
            ],
            [
                "name" => "Đĩa KingSpeed trước cho SH350i, SH300i, Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho SH350i, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giữa lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed mẫu mới nhất cho SH350i, SH300i, Winner có size 255mm gắn vừa như zin không cần chế cháo."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho Honda Future Led", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox cho Honda Future Led full gồm 21 con gắn vừa khít cho Future Led, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế mẫu mới rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox cho Honda Sonic full gồm 21 con gắn vừa khít cho xe Sonic, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế mẫu mới rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho Exciter 2010", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox cho Exciter 2010 (Exciter nhỏ) full gồm 25 con gắn vừa khít cho Exciter 2010, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế mẫu mới rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Đĩa KingSpeed mẫu mới cho Vario, Click (5 lỗ)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho Vario thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giưã lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí. \r\nĐĩa KingSpeed mẫu mới cho Vario, Click 5 lỗ ốc có size 190mm gắn vừa như zin cho các dòng xe Vario, Click 150 đời 2018-2021"
            ],
            [
                "name" => "Đĩa KingSpeed mẫu mới cho Vario, Click (4 lỗ)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed vừa cho ra mắt mẫu mới cho Vario thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, điểm nhấn là những pát bắt giưã lòng và đĩa, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed mẫu mới cho Vario, Click có size 190mm gắn vừa như zin cho các dòng xe Vario, Click 125 2018-2021 (hoặc Vario, Click đời cũ 2017), Mio, Janus (các mâm 4 lỗ đĩa), Sonic mà không cần chế cháo."
            ],
            [
                "name" => "Xinhan Spirit Beast M1 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Xinhan Spirit Beast M1 hàng chính hãng hoàn toàn mới, thiết kế thon gọn khá ấn tượng dành cho các dòng xe. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam \r\nXinhan Spirit Beast M1 chính hãng có thể gắn cho nhiều loại xe."
            ],
            [
                "name" => "Bộ ốc Salaya dàn áo cho xe Honda Wave A", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Honda Wave A, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \r\nBộ ốc dàn áo Salaya cho xe Honda Wave A gồm: 24 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya dàn áo cho xe Wave RS, RSX", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Honda Wave RSX, RS, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \r\nBộ ốc dàn áo Salaya cho xe Honda Wave RSX, RS gồm: 24 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya dàn áo cho xe  AB 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Honda AB 2020, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \r\nBộ ốc dàn áo Salaya cho xe Honda AB 2020 gồm: 26 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya dàn áo cho xe Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Exciter 150, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe  Exciter 150 gồm: 32 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya dàn áo cho xe Exciter 135 (4 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Exciter 2010 , chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe Exciter 2010 gồm: 43 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya Dàn áo cho xe Dream", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Dream, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp em trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe Honda Dream gồm: 17 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya Dàn áo cho xe Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Sonic, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe Honda Sonic  gồm: 18 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya Dàn áo cho xe Winner 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Honda Winner V1, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe Honda Winner V1 gồm: 24 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ Ốc Salaya dàn áo cho xe Sirius Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Sirius Fi, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe Sirius Fi gồm: 20 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya Dàn áo cho xe Exciter 135 (5 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Exciter 135 (2011- 2014), chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe Exciter 135 (2011 - 2014) gồm: 24 con gắn full dàn áo xe."
            ],
            [
                "name" => "Bộ ốc Salaya Dàn áo cho xe Future led 2018 - 2021", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc dàn áo Salaya cho xe Future Led 2018 - 2021, chất liệu inox cao cấp, thiết kế đẹp, lên xe rất sáng và giúp xe trở nên cao cấp hơn. Bộ ốc dàn áo Salaya thích hợp cho các bạn độ kiểng hoặc để thay thế dàn ốc zin đã xuống màu. \nBộ ốc dàn áo Salaya cho xe Future Led 2018 - 2021 gồm: 21 con gắn full dàn áo xe."
            ],
            [
                "name" => "Kính chắn gió ZHI.PAT cho NVX 155 phong cách Touring", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió ZHI.PAT cho NVX 155 phong cách Touring đầy thể thao & mạnh mẽ. \nKính chắn gió ZHI.PAT phong cách Touring có thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, kính chắn gió được gia công rất cao cấp mang đến cho Biker cảm giác lái tuyệt vời và đầy phấn khích sau tay lái. \nKính chắn gió ZHI.PAT phong cách Touring cho NVX 155 gồm đầy đủ bộ pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng... \nSản phẩm được bảo hành chính hãng ZHI.PAT 12 tháng."
            ],
            [
                "name" => "Kính chắn gió ZHI.PAT chính hãng cho AB 2020 - 2021 phong cách Touring", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió ZHI.PAT cho AB 2020 - 2021 phong cách Touring đầy thể thao & mạnh mẽ. \r\nCó thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, mang lại cảm giác lái tuyệt vời và đầy phấn khích sau tay lái. \r\nSản phẩm gồm: Pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng...  được bảo hành chính hãng 12 tháng."
            ],
            [
                "name" => "Cảng sau (Tay xách) nhôm nguyên khối cho SH350i, SHVN 2020 - 2022 chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cảng sau (Tay xách) nhôm nguyên khối chính hãng ZHI.PAT. \nĐẳng cấp vượt trội dành cho Gu thẩm mỹ xứng tầm. Với thiết kế cực ngầu, chất liệu nhôm nguyên khối sắc sảo, bền bỉ. \nDùng được các xe: SH350i, SHVN 2020 - 2022 \nGồm 2 màu cá tính: Đen mờ - Xám bạc \nBảo hành chính hãng 12 tháng."
            ],
            [
                "name" => "Đèn led 2 tầng ZHI.PAT VS110 cho Vision 2021 – 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sản phẩm chính hãng ZHI.PAT với thiết kế thanh lịch và sắc màu hiện đại từ công nghệ đèn LED dành cho xe Vision 2021 – 2022.  \r\nSử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường.  \r\nKhông cần thay đổi jack cắm, thao tắc gắn rất đơn giản không hề chế độ.  \r\nĐèn led 2 tầng ZHI.PAT VS110 cho Vision 2021 – 2022 có 2 màu: Trắng bạc và Đen khói cực ngầu.  \r\nChế độ bảo hành 12 tháng 1 đổi 1."
            ],
            [
                "name" => "Nút Carbon che kính SH", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nút carbon che kính xe Honda SH các đời, thiết kế phủ Carbon xịn nên rất đẹp và bền, có sẵn ốc và lông đền để chụp lỗ chân kính các dòng xe Honda SH."
            ],
            [
                "name" => "Kính chắn gió Zhi.pat chính hãng cho Vario, Click 2018 phong cách Touring", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió ZHI.PAT phong cách Touring cho Vario, Click (2018 trở lên) đầy thể thao & mạnh mẽ. \r\nCó thể nâng cao hạ thấp 1 cách dễ dàng để chắn gió bảo vệ người điều khiển khi đi xa hoặc thấp xuống để cho xe gọn nhẹ khi đi phố, mang lại cảm giác lái tuyệt vời và đầy phấn khích sau tay lái. \r\nSản phẩm gồm: Pát, phụ kiện, có thể lắp dễ dàng đặc biệt có nhiều màu sắc: khói, trắng, tím, cam, xanh lá, xanh dương, vàng...  được bảo hành chính hãng 12 tháng."
            ],
            [
                "name" => "Gù inox Salaya lõm", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù inox Salaya lõm, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù inox Salaya thiết kế ngắn gọn, lõm vào trung tâm rất gọn gàng vào bao tay xe. \r\nGù inox Salaya lõm có thể gắn tất cả loại xe máy."
            ],
            [
                "name" => "Kính H2C inox cho Suzuki và Honda", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính H2C inox dành cho Suzuki và Honda, kính được gia công lấy thương hiệu H2C, sản phẩm mới toanh trên thị trường, có thiết kế như các dòng xe Suzuki và Honda gắn chung, đang rất được nhiều Biker ưa chuộng bởi kiểu dáng đẹp cũng như giá thành rẻ."
            ],
            [
                "name" => "Cốt bánh sau inox Salaya cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh sau inox Salaya dành cho Honda Sonic, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \r\nCốt bánh sau inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Cốt bánh trước inox Salaya cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh trước inox Salaya dành cho Honda Sonic, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \nCốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Cốt bánh trước inox Salaya cho Suzuki Raider", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh trước inox Salaya dành cho Suzuki Raider, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \r\nCốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Đĩa thắng KingSpeed Moto 3 Version 2", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed Moto 3 Version 2, mẫu nâng cấp mới của Moto 3 phiên bản cũ, thiết kế tròn tương tự như các kiểu đĩa thắng dành cho xe đua, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed Moto 3 Version 2 size 220mm 4 lỗ, gắn vừa như zin cho các dòng xe AB cũ , Wave, Exciter 135, Sirius..."
            ],
            [
                "name" => "Bao tay Progrip 723 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Progrip 723 hàng chính hãng, thiết kế Progrip lúc nào cũng đậm chất Biker, gai bao tay được làm rất tinh tế, chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Progrip 723 hàng chính hãng made in Italy. \r\nBao tay Progrip 723 gắn được tất cả các loại xe."
            ],
            [
                "name" => "Cùm tăng tốc Domino 2 dây ga dưới màu vàng chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cùm tăng tốc Domino 2 dây ga dưới màu vàng chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. \nCùm ga tăng Domino 2 dây ga dưới chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."
            ],
            [
                "name" => "Tay thắng Carbon cho Honda Air Blade ABS 2020, PCX", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Honda Air Blade 2020 ABS, PCX mới, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Honda Air Blade ABS 2020, PCX có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Tay thắng Carbon cho Honda Vario, Click đời 2017", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Honda Vario, Click đời 2017 (mẫu cũ), thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Honda Vario, Click đời 2017 (mẫu cũ) có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Gù dẹp inox Salaya", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù dẹp inox Salaya, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù dẹp inox Salaya thiết kế ngắn, gọn gàng vào bao tay xe. \r\nGù dẹp inox Salaya có thể gắn tất cả loại xe máy."
            ],
            [
                "name" => "Tay thắng Carbon cho Honda SH (2 đĩa)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Honda SH 2 đĩa, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Honda SH có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Tay thắng Carbon cho Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Winner, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Winner các đời có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Tay thắng Carbon cho Exciter các đời", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Exciter, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Exciter các đời có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Tay thắng Carbon cho Vario, Click 2018", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng Carbon cho Vario, Click 2018 trở lên, thiết kế Carbon nguyên khối, chắc chắn, rất bền, chống trày chống gãy cực tốt, hàng đặc gia công chất lượng so với  hàng giá rẻ trên thị trường. Tay thắng Carbon có nút chỉnh độ xa gần, phù hợp với kích thước nhiều bàn tay và đỡ mỏi khi đi xa. \nTay thắng Carbon cho Vario, Click 2018 trở lên có bản lề gắn như zin không chế cháo."
            ],
            [
                "name" => "Dây ga Thái", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây ga Thái, dùng để thay thế dây ga zin lâu ngày bị mục nát, nứt, dơ bụi khiến tay ga nặng hơn, hoặc dây ga Thái dùng để gắn chung với cùm tăng Domino nhìn khá nổi bật. \r\nDây ga hàng Thái Lan có thể gắn được tất cả loại xe."
            ],
            [
                "name" => "Co ga Domino", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Co ga Domino hàng copy đủ màu sắc, gắn chung với cùm tăng Domino giúp màu mè, nổi bật hơn, ruột bên trong cao su bền, đẹp, thiết kế rất nét, đẹp."
            ],
            [
                "name" => "Cùm tăng tốc Domino 2 dây ga dưới màu đen chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cùm tăng tốc Domino 2 dây ga dưới màu đen chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. \nCùm ga tăng Domino 2 dây ga dưới chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."
            ],
            [
                "name" => "Cùm tăng tốc Domino 2 dây ga trên màu vàng chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cùm tăng tốc Domino 2 dây ga trên màu vàng chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. \nCùm ga tăng Domino 2 dây ga trên chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."
            ],
            [
                "name" => "Cùm tăng tốc Domino 2 dây ga trên màu đen chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cùm tăng tốc Domino 2 dây ga trên màu đen chính hãng, giúp hành trình vặn ga nhanh hơn, giúp xe tăng tốc nhanh hơn như đúng tên gọi của nó. Cùm ga tăng Domino đang là sản phẩm rất được ưu chuộng bởi anh em Biker bởi tính năng cũng như thẩm mỹ của nó. \nCùm ga tăng Domino 2 dây ga trên chính hãng được sản xuất tại Italy, gắn được tất cả dòng xe."
            ],
            [
                "name" => "Xinhan Spirit Beast L27 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Xinhan Spirit Beast L27 hàng chính hãng hoàn toàn mới, thiết kế thon dài khá ấn tượng dành cho các dòng xe. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam \r\nXinhan Spirit Beast L27 chính hãng có thể gắn cho nhiều loại xe."
            ],
            [
                "name" => "Đĩa KingSpeed sau cho Raider Fi, Satria", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed 190mm gắn vừa như zin đĩa sau cho Raider Fi, Satria mà không cần chế cháo."
            ],
            [
                "name" => "Kính H2C tròn", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính H2C tròn hàng gia công làm bằng nhôm sắc nét, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau, đảm bảo an toàn. Kính H2C đã được mode chân lại, nhìn rất thẩm mỹ \r\nKính H2C tròn có thể gắn đước tất cả các loại xe 2 bánh."
            ],
            [
                "name" => "Đĩa thắng KingSpeed Moto 3", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed Moto 3, thiết kế tròn tương tự như các kiểu đĩa thắng dành cho xe đua, thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed Moto 3 size 220mm 4 lỗ, gắn vừa như zin cho các dòng xe AB cũ , Wave..."
            ],
            [
                "name" => "Kính gù Motogadget tròn", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính gù Motogadget tròn, hàng chuẩn 1:1 mẫu mới nhất, được thiết kế tinh tế, nguyên khối sắc cạnh từng chi tiết, cùng với đó là độ bền, cứng cáp, an toàn khi xe vận hành dài lâu. Kính gù Motogadget tròn lên xe nhìn rất gọn, thích hợp cho xe đi gọn nhẹ hơn là gắn kính kiểu truyền thống. \r\nKính gù Motogadget tròn, hàng chuẩn 1:1 có thể gắn tất cả các loại xe."
            ],
            [
                "name" => "Che két nước CNC titan cho Yamaha Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Che két nước CNC màu Titan mới nhất dành cho Exciter 155, với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước \nChe két nước CNC màu titan gắn vừa khít cho Yamaha Exciter 155."
            ],
            [
                "name" => "Che két nước CNC bạc cho Yamaha Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Che két nước CNC bạc mới nhất dành cho Exciter 155, với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước \nChe két nước CNC bạc gắn vừa khít cho Yamaha Exciter 155."
            ],
            [
                "name" => "Ốp mặt nạ carbon limited cho Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ốp mặt nạ carbon limited cho Exciter 155, miếng ốp được làm từ carbon nguyên khối, rất chắc chắn, ngoài việc làm xe trở nên đẹp hơn còn giúp xe của bạn trở thành bản limited như đợt đầu bán ra 100 xe ở Việt Nam.\nỐp mặt nạ carbon limited cho Exciter 155 được sản xuất với nhiều con số để cho khách hàng chọn lựa."
            ],
            [
                "name" => "Rổ giữa cho Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Rổ giữa dành cho Exciter 155 mới, rất tiện dụng dùng để áo khoác, áo mưa, khẩu trang, nón...khắc phục tính trang không có chỗ để đồ trên xe số vô cùng tiện lợi. \nRổ giữa dành cho Exciter 155 gôm nguyên bộ rổ, pát gắn vừa khít Exciter 155."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda Air Blade 125", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda Air Blade 125 (AB125) các đời từ 2013-2019, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda Air Blade 125 (AB125) các đời từ 2013-2019,."
            ],
            [
                "name" => "Bợ đầu đèn sơn carbon chính hãng Zhi.Pat cho EX135 (4 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bợ đầu đèn sơn carbon chính hãng Zhi.Pat cho EX135 (4 số). \nGắn như zin không cần chế. Có thể kết hợp với đầu đèn led hoặc gắn thêm kính chắn gió để thay đổi diện mạo đầu đèn xe. \nSản phẩm chính hãng Zhi.pat."
            ],
            [
                "name" => "Bợ đầu đèn sơn đen chính hãng Zhi.Pat cho EX135 (4 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bợ đầu đèn sơn đen chính hãng Zhi.Pat cho EX135 (4 số). \nGắn như zin không cần chế. Có thể kết hợp với đầu đèn led hoặc gắn thêm kính chắn gió để thay đổi diện mạo đầu đèn xe. \nSản phẩm chính hãng Zhi.pat"
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda SHVN 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda SHVN 2020, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda SHVN 2020."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda SH Mode", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda SH Mode, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda SH Mode."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda Vision", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda Vision 2016-2020, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda Vision 2016-2020."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda Lead 125", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda Lead 125, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda Lead 125."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda Vario, Click, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda Vario, Click."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda SHVN 2017-2019", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda SHVN 2017-2019, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda SHVN 2017-2019."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda Air Blade 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda Air Blade 2020 (AB2020), với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda Air Blade 2020 (AB2020)."
            ],
            [
                "name" => "Đĩa KingSpeed 245mm (4 lỗ mâm độ) cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed 245mm 4 lỗ cho Exciter 150 đi mâm độ có 4 lỗ bắt đĩa như mâm RCB, mâm X1R..."
            ],
            [
                "name" => "Bình dầu inox Salaya", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bình dầu inox Salaya, sản phẩm mới từ chất liệu inox làm cho độ bền của bình dầu tốt hơn, ngoài ra inox luôn sáng bóng bền bỉ theo thời gian không xuống màu như các loại đồ nhôm CNC. \nBình dầu inox Salaya có thể gắn cho các loại xe đi thắng đĩa bình dầu rời."
            ],
            [
                "name" => "Van vòi inox Salaya", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Van vòi inox Salaya kiểu dáng mới rất độc lạ, chất kiệu inox bền bỉ theo thời gian và không xuống màu như các loại van vòi nhôm, nhựa màu thông thường. \r\nVan vòi inox Salaya có thể gắn cho tất cả các dòng xe."
            ],
            [
                "name" => "Combo đèn led 2 tầng Exciter 135 (2005 - 2010) chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Combo đèn pha Led 02 tầng Exciter 135 (2005 – 2010) chính hãng ZHI.PAT. Bao gồm:  - Chóa đèn led: Đen khói/ Bạc Trắng.  - Bợ cổ trước: Sơn đen/ Sơn carbon.  - Kính chắn gió: Trắng/ Đen khói Trong suốt.  Bảo hành 12 tháng 1 đổi 1 chính hãng ZHIPAT.  Đèn pha Led 02 tầng Exciter 135 sử dụng điện áp DC 9 - 30V. Công suất tiêu thụ chế độ cos: 9W- pha 18W."
            ],
            [
                "name" => "Đĩa thắng RCB chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa thắng RCB (Racing Boy) chính hãng dành cho Vario, Click, thiết kế dạng bông vô cùng ấn tượng, chất liệu rất bền và giá cả vô cùng hợp lý. Vừa là phụ tùng thay thế vừa là đồ trang trí khá tuyệt. \nĐĩa thắng RCB bằng size zin 190mm gắn vừa khít cho Vario, Click (mẫu cũ hoặc Vario, Click mới 125cc) mà không cần chế cháo."
            ],
            [
                "name" => "Kính chắn gió Zhipat cho Exciter 150/135, Wave A, Wave RSX", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió Zhipat cho Exciter 150, Exciter 135, Wave A, Wave RSX, Winner, Winner X,... được thiết kế tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. \nKính chắn gió có 2 màu: Trắng trong suốt hoặc đen khói trong suốt. \nĐược là từ chất liệu nhựa kỹ thuật bền. Chính hãng ZHIPAT."
            ],
            [
                "name" => "Bao tay Ariete chính hãng 61/SSF", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Ariete 61/SSF hàng chính hãng, thiết kế đơn giản có điểm gai dày đặc tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Ariete 61/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng. \r\nBao tay Ariete 61/SSF gắn được tất cả các loại xe."
            ],
            [
                "name" => "Đèn pha led 2 tầng Exciter 135 (2005 - 2010) chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn pha Led 02 tầng Exciter 135 đời 2005 – 2010 chính hãng ZHI.PAT. \nBảo hành 12 tháng 1 đổi 1 chính hãng ZHIPAT. \nChóa đèn có 02 màu: Đen khói và trắng bạc. \nĐèn pha Led 02 tầng Exciter 135 sử dụng điện áp DC 9 - 30V. Công suất tiêu thụ chế độ cos: 9W- pha 18W. \nĐể phần đầu xe thêm ấn tượng có thể mua thêm: \n- Bợ cổ trước: 260.000. \n- Kính chắn gió: 130.000. \nLưu ý:\n- Xe từ 2006 - 2008: Không bắt buộc mua thêm bợ cổ, vẫn gắn được chóa đèn.  \n- Xe từ 2009 - 2010: Bắt buộc phải mua thêm bợ cổ, mới gắn được chóa đèn."
            ],
            [
                "name" => "Kính Motogadget 2 in 1 gắn tất cả các loại xe", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính Motogadget 2 in 1, hàng chuẩn 1:1 mới nhất, khi mua 1 bộ sẽ kèm theo pát bắt gù và bắt chân kính nên khách hàng có thể gắn 1 trong 2 vị trí tuỳ thích, quá tiện lợi. \r\nKính Motogadget 2 in 1 được thiết kế tinh tế, sắc cạnh từng chi tiết, cùng với đó là độ bền, cứng cáp, an toàn khi xe vận hành dài lâu. \r\nKính Motogadget hàng chuẩn 1:1 có thể gắn tất cả các loại xe."
            ],
            [
                "name" => "Cốt bánh sau inox Salaya cho Yamaha Exciter 135 (4 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh sau inox Salaya dành cho Yamaha Exciter 135 (4 số) sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \nCốt bánh sau  inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Cốt bánh sau inox Salaya cho Yamaha Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh sau inox Salaya dành cho Yamaha Exciter 150 sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \r\nCốt bánh sau  inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Cốt bánh trước inox Salaya cho Honda Winner, Lead", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh trước inox Salaya dành cho Honda Winner, Lead sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \nCốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Cốt bánh trước inox Salaya cho Yamaha Exciter, Sirius, Jupiter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh trước inox Salaya dành cho Yamaha Exciter, Sirius, Jupiter sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \nCốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Cốt bánh trước inox Salaya cho Vario, Click, AB", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cốt bánh trước inox Salaya dành cho Vario, Click, AB, sản phẩm inox thương hiệu Salaya đang rất hot trên thị trường, chất liệu inox luôn sáng theo thời gian, đặc biệt rất cứng cáp, bền bỉ. \nCốt bánh trước inox Salaya vừa là món phụ tùng trang trì vừa có thể thay thế cốt zin lâu ngày hưng hỏng, cũ kỹ."
            ],
            [
                "name" => "Gù inox Salaya 5 cạnh hình bông", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù inox Salaya 5 cạnh hình bông, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù inox Salaya thiết kế dài trung bình, gọn gàng vào bao tay xe. \r\nGù inox Salaya 5 cạnh có thể gắn tất cả loại xe máy."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho SHVN 2012 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox gồm 12 con gắn vừa y cho SHVN, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox còn có tính thẩm mỹ rất đẹp khi gắn lên xe. \nBộ ốc nồi Salaya inox cho SHVN có thể gắn các đời xe SHVN từ 2012-2020."
            ],
            [
                "name" => "Ốc nhớt inox Salaya sáng bóng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ốc nhớt inox Salaya, sản phẩm đang hot trên thị trường, inox sáng bóng, bền đẹp theo thời gian. \r\nỐc nhớt inox Salaya có thể gắn hầu hết các loại xe trên thị trường."
            ],
            [
                "name" => "Đĩa KingSpeed cho Honda SH", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \r\nĐĩa KingSpeed 245mm gắn vừa như zin đĩa trước và sau Honda SH mà không cần chế cháo."
            ],
            [
                "name" => "Đĩa KingSpeed 300mm trước cho Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed 300mm gắn vừa như zin đĩa trước Sonic mà không cần chế cháo."
            ],
            [
                "name" => "Đĩa KingSpeed 256mm trước cho Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed 256mm gắn vừa như zin đĩa trước Winner, Sh300i mà không cần chế cháo."
            ],
            [
                "name" => "Đĩa KingSpeed 200mm sau cho Exciter150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed 200mm gắn vừa như zin đĩa sau cho Exciter 150 mà không cần chế cháo."
            ],
            [
                "name" => "Đĩa KingSpeed 245mm trước cho Exciter150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed 245mm gắn vừa như zin đĩa trước  cho Exciter 150 mà không cần chế cháo."
            ],
            [
                "name" => "Đĩa KingSpeed 220mm cho Wave, Dream, AB,...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed 220mm gắn vừa như zin cho các dòng xe AB 125, Wave... mà không cần chế cháo."
            ],
            [
                "name" => "Bao tay Ariete (chính hãng) 38/SSF", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Ariete 38/SSF hàng chính hãng, thiết kế đơn giản có nhiều đường kẻ ngang (line) tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Ariete 38/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng. \r\nBao tay Ariete 38/SSF gắn được tất cả các loại xe."
            ],
            [
                "name" => "Bao tay Ariete (chính hãng) 82/SSF", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Ariete 82/SSF hàng chính hãng, thiết kế đơn giản có nhiều đường kẻ tạo hình chữ nhật nhỏ nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Ariete 82/SSF là hàng chính hãng made in Italy, có tem 7 màu chính hãng. \r\nBao tay Ariete 82/SSF gắn được tất cả các loại xe."
            ],
            [
                "name" => "Bao tay Ariete (chính hãng) 02636/CN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Ariete 02636/CN hàng chính hãng, thiết kế đơn giản có logo Ariete nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su gai li ti chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nbao tay Ariete 02636/CNlà hàng chính hãng made in Italy, có tem 7 màu chính hãng. \r\nBao tay Ariete 02636/CN gắn được tất cả các loại xe."
            ],
            [
                "name" => "Gù inox Salaya bông", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù inox Salaya hình bông, làm từ inox rất sáng đẹp, không bị phai màu theo thời gian như nhôm, titan. Gù inox Salaya thiết kế ngắn gọn, áp sát vào bao tay xe. \nGù inox Salaya bông có thể gắn tất cả loại xe máy."
            ],
            [
                "name" => "Baga inox 10 ly màu titan cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox 10ly màu titan cho Exciter 135 (đời 2011 - 2015) được làm bằng vật liệu cao cấp, với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy, xe rất thẩm mỹ và gọn gàng."
            ],
            [
                "name" => "Baga inox 10 ly sơn tĩnh điện cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox 10ly sơn tĩnh điện đen cho Exciter 135 (đồi 2011-2015) được làm bằng vật liệu cao cấp, sở hữu màu đen nhám trùng với miếng ốp bụng màu đen của xe trông xe rất thẩm mỹ và gọn gàng."
            ],
            [
                "name" => "Thảm lót chân cao su cho Vario, Click mẫu mới", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm lót chân cao su cho Vario, Click mẫu mới, thiết kế tương tự thảm lót chân hãng bên Indo, cao su dày, rất chắc chắn, giúp xe luôn sạch sẽ và trầy sàn để chân. \nThảm lót chân cao su mẫu mới có thể gắn được các đời xe Vario, Click từ 2015 đến nay."
            ],
            [
                "name" => "Gù trung carbon", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù trung Carbon fiber xịn cực chất, thiết kế khá vừa vặn, carbon chống trày, chống ngã khá tốt. \nGù trung carbon có thể gắn vừa tất cả các loại xe."
            ],
            [
                "name" => "Bộ ốc đĩa Salaya inox cho Exciter, Winner, Sonic (10con)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc đĩa Salaya inox gồm 10 con 8ly 2 phân gắn cho Exciter, Winner, Sonic, ốc inox cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."
            ],
            [
                "name" => "Bộ ốc đĩa Salaya inox cho Honda SH, Raider, Satria (8 con)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc đĩa Salaya inox gồm 8 con 8ly 2 phân gắn cho Honda SH, Raider, Satria, ốc inox cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."
            ],
            [
                "name" => "Bộ ốc đĩa Salaya inox cho AB, Vision, Sirius (5con)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc đĩa Salaya inox gồm 5 con 6ly 2 phân gắn cho AB mới , Vision, Sirius hoặc các loại xe đĩa 5 lỗ như Vario, Click đời mới \r\nỐc inox Salaya  cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí."
            ],
            [
                "name" => "Bộ ốc đĩa Salaya inox cho Vario (4con)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc đĩa Salaya inox gồm 4 con 8ly 2 phân gắn cho Vario hoặc các loại xe đi đĩa 4 lỗ, ốc inox cực bền, thiết kế rất đẹp, có thể thay thế ốc zin bị hư hỏng khi mở ra hoặc làm ốc kiểng trang trí. \r\nBộ ốc đĩa Salaya inox gồm 4 con 8ly 2 phân gắn cho các loại xe Vario, Vision, Sirius, Air Blade cũ..."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho AB 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox gồm 12 con gắn vừa y cho AB 2020, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox AB 2020 còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox gồm 10 con gắn vừa y cho Vario, Click mẫu 2018, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Vario, Click còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho Honda Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox cho Honda Winner full gồm 18 con gắn vừa khít cho Honda Winner, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Winner còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya inox cho Exciter 150/155 full gồm 21 con gắn vừa khít cho Ex150/155, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Exciter 150/155 còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Bộ ốc nồi Salaya inox cho Exciter 135 ( 5 số)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ ốc nồi Salaya cho Exciter 135 full gồm 22 con gắn vừa khít cho Ex135 từ đời 2011 đến 2014, ốc Salaya inox sáng rất đẹp, chắn chắn, đầu ốc thiết kế rất đẹp, ngoài việc thay thế các ốc cũ, sét, hư thì bộ ốc Salaya inox Exciter 135 còn có tính thẩm mỹ rất đẹp khi gắn lên xe."
            ],
            [
                "name" => "Gù trung Seven Speed CNC mẫu mới", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù trung CNC mẫu mới độc lạ, cực chất, thiết kế khá vừa vặn dành cho các loại xe, kiểu dáng không quá dài, thích hợp cho Biker nào thích đi đơn giản. \r\n\r\nGù trung CNC có thể gắn vừa tất cả các loại xe."
            ],
            [
                "name" => "Đèn led 2 tầng cho Winner 150 chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn led 2 tầng cho Winner 150 chính hãng ZHI.PAT. Lấy khuôn mẫu từ dòng xe Zin, với thiết kế đồng bộ - trẻ trung, tinh tế gắn được cho Winner đời 2017 - 2019.  \nChế độ cos 12.8v còn khi bật pha cả 2 tầng công suất là 20w, độ sáng cao gần 3 lần so với đèn zin. \nChuôi đèn 08 chấu, không cần thay đổi jack cắm, như vậy thao tắc gắn sẽ rất là đơn giản không hề chế độ.  \nĐèn led 2 tầng cho Winner 150 chính hãng ZHI.PAT có 1 màu đen khói cực ngầu, khác biệt hoàn toàn so với màu bạc của đèn zin. Với chế độ bảo hành BH 12 tháng 1 đổi 1."
            ],
            [
                "name" => "Đĩa X1R chính hãng sau cho Raider", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa thắng X1R chính hãng sau dành cho Suzuki Raider, Satria, kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng. \r\nĐĩa thắng X1R size zin 190mm gắn vừa y chang Raider/Satria mà không cần chế."
            ],
            [
                "name" => "Đĩa X1R chính hãng trước cho Raider", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa thắng X1R chính hãng trước dành cho Suzuki Raider, Satria, kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng. \r\nĐĩa thắng X1R size zin 290mm gắn vừa y chang Raider/Satria mà không cần chế."
            ],
            [
                "name" => "Kính chắn gió Zhi.Pat cho Honda SHVN 2020, SH350i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió Zhi.Pat cho Honda SHVN 125/150i 2020, SH350i được thiết kế rất tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. \nBộ sản phẩm Kính chắn gió cho SH 2020, SH350i bao gồm: Hộp, thẻ bảo hành, phần kính chắn gió đen khói, phần đế nhựa đen, nút bấm DP. \nMàu sắc đèn định vị sẽ thay đổi tùy theo sở thích của khách hàng, xanh dương lịch lãm, sắc đỏ thời thượng, tím bí ẩn và trắng sang trọng."
            ],
            [
                "name" => "Đĩa KingSpeed cho Vario, Click (4 lỗ)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa KingSpeed thương hiệu mới đang hot trên thị trường với thiết kế rất đẹp, độc tuy nhiên giá thành lại khá hợp lí. \nĐĩa KingSpeed cho Vario, Click có size 190mm gắn vừa như zin cho các dòng xe Vario, Click 125 (hoặc Vario, Click đời cũ), Mio, Janus (các mâm 4 lỗ đĩa), Sonic mà không cần chế cháo."
            ],
            [
                "name" => "Đĩa X1R chính hãng cho Vario, Click, sau Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa thắng X1R chính hãng dành cho bánh sau Sonic, trước  Vario, Click mẫu cũ hoặc Vario, Click 125 mẫu mới (đĩa 4 lỗ), kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng. \r\nĐĩa thắng X1R size zin 190mm gắn vừa y chang Xe Vario, Click (4 lỗ) và bánh sau Honda Sonic mà không cần chế."
            ],
            [
                "name" => "Đĩa X1R chính hãng trước cho Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa thắng X1R chính hãng trước dành cho Honda Sonic, kiểu dáng bông vừa phải không quá kiểu cọ, thích hơp cho Biker nào đi phong cách đơn giản nhưng vẫn đẹp, hàng X1R dày, chất lượng đã được rất nhiều khách hàng tin dùng. \r\nĐĩa thắng X1R size zin 295mm gắn vừa y chang Honda Sonic mà không cần chế."
            ],
            [
                "name" => "Gù CNC logo", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù CNC logo, hàng loại 1 cực chất, thiết kế khá vừa vặn dành cho các loại xe, chi tiết logo được CNC sắc xảo. \nGù CNC logo được tặng kèm sơmi nhôm có thể gắn vừa tất cả các loại xe."
            ],
            [
                "name" => "Tay côn chính hãng cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay côn chính hãng cho Honda Sonic...(tay bên trái), hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay côn zin theo xe."
            ],
            [
                "name" => "Tay thắng chính hãng cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng chính hãng cho Honda Sonic... (thắng đĩa) bên phải, hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."
            ],
            [
                "name" => "Gác chân sau cho các xe Vespa", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ gác chân sau dành cho các dòng xe Vespa: LX, S, Sprint, Primavera...được thiết kế rất đẹp, tiện lợi cho các dòng xe Vespa xưa giờ gác chân rất khó khăn, mỏi chân khi đi xa... \nBộ gác chân sau cho xe Vespa có đầy đủ pát gắn mà không phải chế cháo."
            ],
            [
                "name" => "Tay thắng chính hãng cho Yamaha Exciter, NVX, Sirius, Jupiter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng chính hãng cho Yamaha Exciter, NVX, Sirius, Jupiter... (thắng đĩa) bên phải, hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."
            ],
            [
                "name" => "Tay côn chính hãng cho Yamaha Exciter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay côn chính hãng cho Yamaha Exciter, tay thắng NVX (tay bên trái), hàng chính hãng Yamaha thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."
            ],
            [
                "name" => "Tay côn chính hãng cho Winner, Sonic, MSX", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay côn chính hãng cho Winner, Sonic, MSX (tay bên trái), hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."
            ],
            [
                "name" => "Tay thắng chính hãng cho Winner, Wave, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng chính hãng cho Winner, Future, Wave/Dream... (thắng đĩa) bên phải, hàng chính hãng Honda thay thế cho xe bị trày, hoặc gãy tay thắng zin theo xe."
            ],
            [
                "name" => "Tay thắng chính hãng cho AB, Vario, Click bên phải", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng chính hãng cho AB, Vario/Click (mẫu 2018) bên phải, hàng chính hãng Honda thay thế  cho xe bị trày, hoặc gãy tay thắng zin theo xe."
            ],
            [
                "name" => "Tay thắng chính hãng cho AB, Vario, Click bên trái", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Tay thắng chính hãng cho AB, Vario/Click (mẫu 2018) bên trái, hàng chính hãng Honda thay thế  cho xe bị trày, hoặc gãy tay thắng zin theo xe."
            ],
            [
                "name" => "Cảng sau, tay xách 300i chính hãng ZHI.PAT cho SH 2010 - 2023", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cảng sau, tay xách 300i chính hãng ZHI.PAT cho SH 2010 - 2023.  \r\nSử dụng cho các đời: SH Ý nhập: 2010 - 2012. SHVN: 2012 - 2023.  \r\nSản phẩm rất chắc chắn làm từ nhựa kỹ thuật siêu bền. \r\nCó 2 màu: Đen bóng hoặc đen mờ. \r\nCảng sau (Tay xách) chính hãng ZHI.PAT được bảo hành 12 tháng do lỗi kỹ thuật."
            ],
            [
                "name" => "Mắt mèo biển số chính hãng ZHIPAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mắt mèo phản quang ZHIPAT gắn đuôi sau, ngay biển số các dòng xe món phù tùng được trang bị trên các dòng xe ở Châu Âu, giúp nhận diện xe rõ hơn vào ban đêm và tất nhiên nhìn xe cũng đẹp ra hẳn. \nMắt mèo biển số có thể gắn được trên tất cả các loại xe, và có 3 màu: vàng, trắng, đỏ, hàng chính hãng ZHIPAT được bảo hành kỹ thuật 12 tháng."
            ],
            [
                "name" => "Xinhan Led kiểu ngắn", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Xinhan led kiểu ngắn mẫu mới nhất, gọn đẹp, giá thành phải chăng nhưng được làm bằng nhôm khá chắc chắn, dạng bầu bầu ngắn giúp đuôi xe khá gọn đẹp. \r\nXinhan led kiểu ngắn có thể gắn được tất cả loại xe, đặc biệt gắn khá đẹp trên Vario/Click."
            ],
            [
                "name" => "Bao tay Daytona NAMI chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Daytona NAMI chính hãng, thiết kế đơn giản có logo Daytona cùng các đường sóng ngang nổi bật tạo điểm nhấn trên bao tay, dành cho khách hàng nào thích sự đơn giản nhưng chất lượng, cao su chống trơn trượt cực tốt, nhất là cho các bạn có mồ hôi tay nhiều. \r\nBao tay Daytona NAMI gắn được tất cả các loại xe, được sản xuất tại Nhật, thương hiệu Daytona rất nổi tiếng trong việc sản xuất phụ tùng xe máy."
            ],
            [
                "name" => "Kính xoay CRG xoay 360 độ", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính xoay CRG hàng loại 1, làm bằng nhôm sắc nét, không phải dạng nhựa cứng giá rẻ trên thị trường, có thể xoay 360 độ, các nút xoay được làm rất chắc chắn, có thể gắn cả bên trái lẫn bên phải, kiểu dáng khá độc đáo, lên xe nhìn gọn nhưng vẫn có thể quan sát rất rõ tình hình phía sau. \r\nKính xoay CRG có thể gắn đước tất cả các loại xe 2 bánh."
            ],
            [
                "name" => "Xinhan Spirit Beast L23 (chính hãng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Xinhan Spirit Beast L23 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe, ánh sáng Led rất tốt, và thêm led demi thiết kế viền hình flash nổi bật an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam \nXi nhan mũi tên Spirit Beast L23 có thể gắn cho nhiều loại xe Vario, Click, Winner X, NVX, R15 ..."
            ],
            [
                "name" => "Gác chân sau kiểu Ducati", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gác chân sau kiểu Ducati làm bằng nhôm rất dày, đẹp và phần cao su được gia công chất lượng, đảm bảo bền theo thời gian. Gác chân sau kiểu Ducati được tao ra theo ý tưởng của siêu xe moto Ducati. \nGác chân sau kiểu Ducati có thể gắn được nhiều loại xe Honda, Yamaha, Suzuki...có gác chân sau dạng xếp."
            ],
            [
                "name" => "Kính chắn gió chính hãng Zhi.pat cho Lead mới (2017 - 2022)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió chính hãng Zhipat cho Honda Lead mới 2017 - 2022, được thiết kế khác tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. \nKính chắn gió dành cho Honda Lead mới 2017 - 2022 có luôn pát + ốc gắn vừa khít mà không phải chế."
            ],
            [
                "name" => "Thảm lót chân cao su cho SHVN 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm lót chân cao su cho xe SHVN 2020 mẫu mới khá đẹp, cao su chất lượng khá tốt. \r\nGiúp cho xe luôn sạch sẽ,  và còn có thể trang điểm cho xế yêu của bạn đẹp hơn."
            ],
            [
                "name" => "Chắn gió SH 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chắn gió cho Honda SH 2020, làm bằng Mica dày, rất chắc chắn, được thiết kế khác tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. \nChắn gió dành cho Honda SH 2020 gắn vừa khít mà không phải chế, có thể bắt ốc hoặc dán keo 2 mặt đều được."
            ],
            [
                "name" => "Cần số 2 chiều X1R cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số 2 chiều X1R dành cho xe Exciter 150 , mẫu mã thiết kế bằng nhôm CNC rất đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng. \r\nCần số 2 chiều X1R vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế khá có lợi cho Exciter 150."
            ],
            [
                "name" => "Cần số 2 chiều X1R cho Honda Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số  X1R 2 chiều dành cho xe Honda Winner 150, mẫu mã thiết kế bằng nhôm CNC rất đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng. \r\nCần số 2 chiều X1R vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế khá có lợi cho Honda Winner."
            ],
            [
                "name" => "Cảng sau, Tay xách 300i trong suốt chính hãng ZHI.PAT cho SH 2010 - 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cảng sau, Tay xách 300i trong suốt chính hãng ZHI.PAT cho SH 2010 - 2020, sản phẩm phá cách hoàn toàn mới, nhìn rất lạ mắt khi trang bị lên xe, sản phẩm rất chắc chắn làm từ nhựa kỹ thuật siêu bền. \r\nCảng sau (Tay xách) chính hãng ZHI.PAT được bảo hành 12 tháng do lỗi kỹ thuật."
            ],
            [
                "name" => "Nắp thăm nhớt Biker", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nắp thăm nhớt Biker 1:1, mẫu mã đẹp, lạ, làm bằng nhôm CNC, giúp xe nổi bật hơn, đồng thời khó bị người xấu phá hơn nắp thăm nhớt zin. \nNắp thăm nhớt Biker gắn được tất cả loại xe."
            ],
            [
                "name" => "Gù trung loại có nắp chụp", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gù trung loại có nắp chụp kiểu dáng như Rizoma hàng loại 1 cực chất, thiết kế khá vừa vặn dành cho các loại xe, có nắp chụp ngoài rất thẩm mỹ, chống bị tháo mất gù cũng như nước vào sét ốc. \r\nGù trung loại có nắp chụp có thể gắn vừa tất cả các loại xe."
            ],
            [
                "name" => "Kính chiếu hậu gắn gù RCB MR004 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chiếu hậu gắn gù RCB MR004 với thiết kế hoàn toàn mới, gắn lên gù tay lái giúp xe trông gọn đẹp hơn, nhìn chất hơn, mặt kính đạt chuẩn rất dễ dàng quan sát xe phía sau, mặt gương chống đọng nước khá hiệu quả, ngoài ra với chất liệu nhôm CNC nên kính có tính thẩm mỹ khá cao, vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế cực hot. \r\nKính chiếu hậu gắn gù Racingboy MR004 gắn được tất cả các loại xe. \r\nKính chiếu hậu RCB là hàng chính hãng Racing Boy."
            ],
            [
                "name" => "Ốp đầu cho Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ốp đầu đồ chơi Winner X kiểu mới  có thể gắn nhiều loại xe khác nếu khách hàng thích, chắc chắn, dày, đẹp. \nỐp đầu Winner X được làm rất chắc chắn, dày, đẹp."
            ],
            [
                "name" => "Chống đổ sau CNC mẫu mới", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chống đổ sau CNC kiểu mới dành cho các loại xe, 1 sản phẩm bảo vệ cực tốt dành cho xe của bạn khỏi bị thiệt hại nặng sau khi va quẹt, té ngã, đặc biệt mẫu mới được thiết kế khá dày, chắc chắn. Ngoài ra có tác dụng làm đồ gác chân cho đỡ mỏi khi đi đường xa \nChống đổ sau CNC mẫu mới có thể gắn được hầu hết tất cả các dòng xe."
            ],
            [
                "name" => "Ốc Titan chụp lỗ kính", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ốc Titan nguyên con màu xanh rất đẹp dùng để chụp lỗ chân kính. \nỐc titan chụp lỗ chân kính có răng nghịch/thuận có thể gắn tất cả các loại xe."
            ],
            [
                "name" => "Xinhan Spirit Beast L14 (chính hãng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Xinhan Spirit Beast L14 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe, ánh sáng Led rất tốt, và thêm led demi thiết kế mũi tên nổi bật an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam \nXi nhan mũi tên Spirit Beast L14 có thể gắn cho nhiều loại xe Vario, Click, Winner X, NVX, R15 ..."
            ],
            [
                "name" => "Che két nước nhôm lưới cho Vario, Click, SHVN, AB, SH Mode", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Che két nước nhôm lưới với thiết kế hoàn toàn mới nhìn rất đẹp, được bao bọc bởi lớp lưới chắc chắn giúp bảo vệ két nước cực tốt, tránh tình trạng bị đá văng vào gây hư hỏng két nước \nChe két nước nhôm lưới dùng để gắn xe Vario, Click, SHVN, AB, SH Mode."
            ],
            [
                "name" => "Che két nước nhôm lưới mới cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Che két nước nhôm lưới mẫu mới nhất dành cho Exciter 150, với thiết kế hoàn toàn mới nhìn rất đẹp, được bao bọc bởi lớp lưới chắc chắn giúp bảo vệ két nước cực tốt, tránh tình trạng bị đá văng vào gây hư hỏng két nước \nChe két nước nhôm lưới dùng để gắn xe Exciter 150."
            ],
            [
                "name" => "Bao tay Progrip 724 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay Progrip 724hàng chính hãng, thiết kế Progrip lúc nào cũng đậm chất Biker, gai bao tay có nhiều chi tiết được làm rất tinh tế, chống trơn trượt cực tốt nhất là cho các bạn có mồ hôi tay nhiều. \r\nBao tay Progrip 724 hàng chính hãng made in Italy. \r\nBao tay Progrip 724 gắn được tất cả các loại xe."
            ],
            [
                "name" => "Baga 10ly tĩnh điện cho Sonic 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga 10ly sơn tĩnh điện cho Sonic 150 cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trầy xe. \nBaga 10ly tĩnh điện cho Sonic 150 được làm từ inox 10ly khá dày và nước sơn tĩnh điện khá tốt, vẻ đẹp thẩm mỹ cao."
            ],
            [
                "name" => "Xinhan Spirit Beast L19 (chính hãng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Xinhan Spirit Beast L19 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam \nXinhan Spirit Beast L19 có thể gắn cho nhiều loại xe."
            ],
            [
                "name" => "Đèn led 2 tầng cho Sirius 2019 chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn led 2 tầng cho Sirius 2019 chính hãng ZHI.PAT là món phụ tùng thay thế hiện đại cho xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. \nĐèn Led 2 tầng cho Sirius 2019 với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. \nĐèn led 2 tầng ZHI.PAT cho xe Yamaha Sirius có 2 màu trắng và đen, được bảo hành 12 tháng chính hãng."
            ],
            [
                "name" => "Bóng đèn stop led nhấp nháy", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bóng đèn stop led nhấp nháy cực sáng, nổi bật khi đi đêm, rất phù hợp, an toàn cho các bạn hay đi phượt trong cung đường tối. \r\nBóng đèn stop led nhấp nháy có thể gắn được nhiều loại xe dùng đèn stop dây tóc."
            ],
            [
                "name" => "Chống đổ sau CNC kiểu Rizoma", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chống đổ sau CNC kiểu dáng như những bộ gác chân Rizoma dành cho các loại xe, 1 sản phẩm bảo vệ cực tốt dành cho xe của bạn khỏi bị thiệt hại nặng sau khi va quẹt, té ngã. Ngoài ra có tác dụng làm đồ gác chân cho đỡ mỏi khi đi đường xa \r\nChống đổ sau CNC có thể gắn được hầu hết tất cả các dòng xe."
            ],
            [
                "name" => "Móc treo đồ Titan", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Móc treo đồ Titan dành cho tất cả các loại xe, tiện dụng, nhỏ gọn nhưng móc treo vô cùng chắc chắn."
            ],
            [
                "name" => "Kính chiếu hậu RCB MR002 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chiếu hậu RCB MR 002 với thiết kế hoàn toàn mới, mặt kính đạt chuẩn rất dễ dàng quan sát xe phía sau, mặt gương chống đọng nước khá hiệu quả, ngoài ra với chất liệu nhôm CNC nên kính có tính thẩm mỹ khá cao, vừa là món đồ chơi trang trí vừa là món phụ tùng thay thế cực hot. \r\nKính chiếu hậu Racingboy gắn được tất cả các loại xe. \r\nKính chiếu hậu RCB là hàng chính hãng Racing Boy."
            ],
            [
                "name" => "Đèn Led 2 Tầng Exciter 150 Phiên bản mới Sporty 2019", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn Led 2 Tầng Exciter 150 - Phiên bản mới: Sporty 2019 chính hãng Zhi.Pat được thiết kế chóa đèn, bóng led hướng xuống, ánh sáng được gom và tập trung hơn so với cũ. Và đặc biệt, anh sáng leb pha thêm ánh sáng vàng tăng thêm “ĐỘ BÁM ĐƯỜNG MẠNH” để phù hợp đi trên những cung đường tối, mưa, sương mù,… mà vẫn có thể nhìn rõ từ xa, độ sáng cũng gấp hơn 3 lần so với đèn zin. \nƯu điểm của hệ thống đèn led 2 tầng mẫu mới này là siêu tiết kiệm điện năng, với chế độ cos chỉ tiêu hao 11w so với bản cũ là 13.8w. Và khi thêm passing là 22w so với bản cũ là 27,5w. \nĐèn LED 2 tầng Exciter 150 - phiên bản mới Sporty 2019 không những làm cho xe của bạn bắt kịp xu hướng mới mà còn hỗ trợ tốt ánh sáng khi đi vào ban đêm, vừa tăng cường độ sáng nhưng không gây chói mắt người đối diện, vừa bền bỉ và tiết kiệm điện năng hơn cả choá đèn zin, thật sự mà nói đây là một người bạn đồng hành lý tưởng dành cho những anh em. \nSP Sporty ver 2019 hiện có 2 màu: Chóa bạc như zin hoặc chóa đen khói cực ngầu. Gắn vào Exciter 150 như zin mà không cần chế cháo. Sản phẩm được bảo hành chính hãng ZHI.PAT 1 đổi 1 miễn phí về lỗi kỹ thuật trong thời gian 12 tháng"
            ],
            [
                "name" => "Xinhan Spirit Beast L17 (chính hãng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Xinhan Spirit Beast L17 hàng chính hãng hoàn toàn mới, thiết kế khá ấn tượng dành cho các dòng xe, với mặt trước là xinhan vàng truyền thống, mặt sau led xanh hình mũi tên khá ấn tượng. Với ánh sáng rất tốt, an toàn cho người tham gia giao thông. Thương hiệu này hiện tại khá được ưa chuộng ở Việt Nam \nXinhan Spirit Beast L17 có thể gắn cho nhiều loại xe."
            ],
            [
                "name" => "Bao tay RCB cao su chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bao tay RCB cao su chính hãng hoàn toàn mới, thiết khá đẹp, nhìn đơn giản nhưng tinh tế, tay cầm cực êm, an toàn khi vận hành. \r\nBao tay RCB là hàng chính hãng của Racing Boy, gắn được tất cả loại xe trên thị trường."
            ],
            [
                "name" => "Bảng tên xe Titan loại dày cao cấp cho Click, Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã SP: 070369 cho Click \r\nMã SP: 070372 cho Winner \r\nBảng tên xe Titan loại dày cao cấp dành cho Click, Winner giúp xe trở nên độc đáo, lạ mắt hơn, cá tính hơn. \r\nBảng tên làm bằng Titan loại dày khá chắc chắn."
            ],
            [
                "name" => "Cảng sau Givi dành cho Honda AB", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cảng sau Givi dành cho Honda AB, khá thích hợp cho các chuyến đi xa, các bạn mê phượt dùng baga sau Honda AB để cố định đồ, balo, dụng cụ phượt ... \r\nCảng sau Givi gắn vừa cho Honda Air Blade."
            ],
            [
                "name" => "Móc treo đồ CNC Shark Power dành cho Click, Vario, SH", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Móc treo đồ CNC Shark Power loại xịn dành cho Click, Vario, SH (có thể gắn nhiều loại xe khác), với thiết kế nhôm CNC cực đẹp, móc chắc chắn, treo đồ cực tốt.  \nMóc treo đồ CNC Click, Vario, SH hãng Shark Power có cần gạt che lại tránh trường hợp rớt, bị giựt món đồ treo lên."
            ],
            [
                "name" => "Đèn led 2 tầng cho LEAD 125 2013-2016 chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn led 2 tầng cho LEAD 125 2013-2016 chính hãng ZHI.PAT thay thế cho đèn theo xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. Ngoài ra còn là món phụ tùng thay thế khi đèn zin bị hư hỏng, cũ, vàng ố. \nĐèn Led 2 tầng cho LEAD 125  với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. \nĐèn led 2 tầng ZHI.PAT cho Honda Lead 125 2013-2016 có 2 màu: đen, trắng và được bảo hành 12 tháng chính hãng."
            ],
            [
                "name" => "Đèn led 2 tầng cho Vision 2014 - 2020 chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn led 2 tầng cho Vision 2014 - 2020 chính hãng ZHI.PAT là món phụ tùng thay thế hiện đại cho xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. \nĐèn Led 2 tầng Vision 2014 - 2020 với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. \nĐèn led 2 tầng ZHI.PAT cho xe Honda Vision 2014 - 2020 có 2 màu trắng và đen, được bảo hành 12 tháng chính hãng."
            ],
            [
                "name" => "Cần số 2 chiều cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số 2 chiều dành cho xe Exciter 150, mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng."
            ],
            [
                "name" => "Mắt mèo phuộc trước hàng chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mắt mèo phản quang gắn phuộc trước, món phù tùng được trang bị trên các dòng xe ở Châu Âu, giúp nhận diện xe rõ hơn vào ban đêm và tất nhiên nhìn xe cũng đẹp ra hẳn. \r\nMắt mèo phuộc trước có thể gắn được trên tất cả các loại xe, và có 3 màu: vàng, trắng và đỏ."
            ],
            [
                "name" => "Đèn led 2 tầng cho LEAD 2017-2018 chính hãng ZHI.PAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn led 2 tầng cho LEAD 2017 - 2019 chính hãng ZHI.PAT thay thế cho đèn theo xe hiện nay trên thị trường vẫn đang sử dụng bóng đèn Halogen vàng với công suất tiêu thụ của các bóng Halogen từ 35W. Đèn ZIN theo xe có ánh sáng vàng truyền thống đã quá quen thuộc với người đi xe máy. Hiện nay, các công nghệ tiết kiệm điện và ánh sáng LED trắng đang được áp dụng rộng rãi cho các dòng xe thế hệ mới để đáp ứng nhu cầu của khách hàng mua xe. \nĐèn Led 2 tầng cho LEAD 2017,  LEAD 2018 với thiết kế hiện đại & thời trang với những thay đổi mới mẻ về diện mạo sử dụng. Hệ thống chóa 2 tầng sử dụng công nghệ LED Lighting trang bị 6 bóng led siêu sáng với ánh trắng vàng bám đường. Không gây chóa xe đối diện khi di chuyển trên đường. \nĐèn led 2 tầng ZHI.PAT cho Honda Lead 2017 - 2019  được bảo hành 12 tháng chính hãng."
            ],
            [
                "name" => "Móc treo đồ đa năng ZHIPAT", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Móc treo đồ đa năng kết hợp đế đựng bình nước chính hãng Zhi.Pat. Gắn như zin rất dễ dàng, đẹp hơn, tiện dụng hơn. \nMóc treo đồ đa năng gắn được các loại xe: SH, Dylan, PS, SH Mode, Lead mới...."
            ],
            [
                "name" => "Đèn Led 2 tầng ZHIPAT cho Wave A, Wave S, Future X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn led ZHI.PAT W110 – Phiên bản đèn led 2 tầng mới nhất dành các dòng xe: Wave Alpha/S/RS 2008 - 2009/Future X 2010 - 2011. \nĐèn led 2 tầng ZHI.PAT W110 sử dụng điện áp DC 9 - 20V. Công suất tiêu thụ chế độ cos: 9W- pha 18W.  \nCó 5 phiên bản màu: Tím IP14 mới, Bạc, Đen Khói, Cam và Xanh ngọc lục bảo. \nChế độ bảo hành 12 tháng chính hãng ZHIPAT."
            ],
            [
                "name" => "Đèn pha led 2 tầng Exciter 135 (2011 - 2015) chính hãng Zhipat", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn pha led 2 tầng đã được gắn vừa khít lên chiếc Exciter 135 với thiết kê tối ưu cho ánh sáng LED & tiết kiệm điện tiêu thụ nên người dùng không cần chỉnh sửa, các vị trí chân ốc đều chuẩn xác 100% đảm bảo độ ổn định của chóa đèn trên xe ở mọi địa hình, chân đèn 3 chân chỉ cần cắm jack zin vào là xong. Cảm giác ban đầu nhìn vào Led 2 tầng cho Ex135, bạn sẽ thấy ngay chiếc xe đã có 1 diện mạo mới hiện đại hơn, đẹp hơn nhiều so với chóa đèn nguyên bản. \nƯu điểm của hệ thống đèn led 2 tầng Exciter 135 trước tiên là lắp ráp nhanh chóng dễ dàng, không cần thay đổi dàn điện cũng như dàn áo xe, ngoài ra nó rất tiết kiệm điện năng, với chế độ cos chỉ tiêu hao 9w và pha là 18w, khi đó cả 2 tầng đều sáng hết, mỗi tầng là 3 bóng led. Đồng thời không tỏa nhiệt nhiều như đèn halogen nguyên bản đảm bảo độ bền bỉ sáng đẹp theo thời gian, không làm ố vàng chóa gây mất thẩm mỹ.  \nĐèn Led 2 tầng ZHIPAT cho Exciter 135 (2011 - 2015) được bảo hành chính hãng 12 tháng."
            ],
            [
                "name" => "Kính chắn gió SH300i 2017", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Kính chắn gió cho Honda SH300i 2017, được thiết kế khác tinh xảo, ôm gọn vào đầu đèn, giúp xe trông ngầu và đẹp hơn rất nhiều. \nKính chắn gió dành cho Honda SH300i 2017 gắn vừa khít mà không phải chế."
            ],
            [
                "name" => "Đĩa thắng RCB (chính hãng) sau cho Honda Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa thắng Racing Boy chính hãng sau dành cho Honda Winner, thiết kế dạng bông vô cùng ấn tượng, chất liệu khá bền so với hàng chợ. Vừa là món phụ tùng thay thế vừa là món đồ trang trí khá tuyệt. \nĐĩa thắng Racing Boy gắn vừa cho Honda Winner 150, Winner X size 220mm."
            ],
            [
                "name" => "Đĩa thắng RCB (chính hãng) trước cho Honda Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đĩa thắng Racing Boy chính hãng trước dành cho Honda Winner, thiết kế dạng bông vô cùng ấn tượng, chất liệu khá bền so với hàng chợ. Vừa là món phụ tùng thay thế vừa là món đồ trang trí khá tuyệt. \nĐĩa thắng Racing Boy gắn vừa cho Honda Winner 150, Winner X size 256mm."
            ],
            [
                "name" => "Đèn Led 2 tầng ZHI.PAT dành cho xe SHVN (2012 - 2016)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn led 2 tầng ZHI.PAT dành cho mẫu SHVN đời 2012 đến 2016 được gắn hoàn toàn như đèn zin không cần chế cháo, chỉ tiêu hao 17w (passing thì thêm 8,5w) tiết kiệm điện không gây nóng và ố vàng chóa đồng thời không bị cháy mạch khi passing khác với các dòng xe khác như Airblade 125, PCX, Winner 150 nếu chế passing không đúng cách sẽ bị hư hỏng đèn.  \nĐèn led 2 tầng SH Việt Nam 2012 - 2016 cho ánh sáng trắng có độ gom cao dễ quan sát trong đêm. \nHệ thống đèn pha Led 2 Tầng ZHI.PAT siêu sáng gắn lên bao ngầu như SH2017. \nĐèn pha led 2 tầng cho SHVN (2012 - 2016) chính hãng Zhi.Pat được bảo hành 1 đổi 1 miễn phí 1 năm."
            ],
            [
                "name" => "Đèn Led 2 tầng ZHI.PAT dành cho xe SH Ý (20​10 - 2012)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đèn Led 2 tầng ZHI.PAT cho SH Ý (20​10 - 2012) được gắn hoàn toàn như đèn zin không cần chế cháo, chỉ tiêu hao 17w (passing thì thêm 8,5w) tiết kiệm điện không gây nóng, ố vàng. \r\nĐèn led 2 tầng SH Ý cho ánh sáng trắng có độ gom cao dễ quan sát trong đêm. \r\nHệ thống Đèn Led 2 tầng ZHI.PAT cho SH Ý (20​10 - 2012) với chế độ bảo hành 1 đổi 1 miễn phí 1 năm. Với 2 màu đen khói, trắng bạc."
            ]

        ]);

        Category::where('name', 'phụ tùng')->first()->products()->createMany([

            [
                "name" => "Phuộc RCB MB2 chính hãng cho SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB MB2 chính hãng bình dầu cho SHVN...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Phuộc Racingboy MB2 có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành \r\nPhuộc sau RCB MB2 cho SHVN là hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng. \r\nPhuộc RCB MB2 cao 380mm gắn được cho SHVN 2012-2020... Phuộc có 3 màu: đỏ, vàng, đen."
            ],
            [
                "name" => "Phuộc RCB MB2 ty vàng chính hãng cho Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB MB2 ty vàng chính hãng bình dầu cho Wave, Dream, Future, Blade...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung,với ty phuộc được mạ vàng rất độc đáo. Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành \r\nPhuộc RCB MB2 ty vàng hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng. \r\nPhuộc RCB MB2 cao 335mm gắn được cho Wave, Dream, Future, Blade..."
            ],
            [
                "name" => "Phuộc RCB C Series chính hãng cho Honda Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Phuộc RCB C Series cho Vario/Click thiết kế mới vô cùng sắc xảo cùng với loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành. \r\n- Phuộc sau RCB C Series cho Vario/CLick là Hàng chính hãng Racing Boy bảo hành 12 tháng. \r\n- Phuộc RCB C Series chính hãng gắn được cho Honda Vario, Click có màu: vàng và đen...với chiều cao 330mm bằng với phuộc zin."
            ],
            [
                "name" => "Lọc gió STB chính hãng cho SHVN 2020 - 2023", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió STB chính hãng dành cho SHVN đời 2020 - 2023, vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió STB có thể dễ dàng vệ sinh sử dụng lại nhiều lần với tuổi thọ hơn 5 năm \r\nLọc gió STB là hàng chính hãng sản xuất tại Taiwan. \r\nLọc gió STB dùng cho SHVN từ 2020 - 2023 gắn như zin không chế cháo."
            ],
            [
                "name" => "Cao su đùm Honda Winner chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cao su đùm Honda Winner zin (hay còn gọi là cao su giảm giật nhông sau) gắn cho các đời xe Winner, để thay thế cao su đùm zin lâu ngày bị hao mòn, vỡ nát, giúp xe vận hành êm ái hơn."
            ],
            [
                "name" => "Cao su đùm Yamaha chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cao su đùm Yamaha zin (hay còn gọi là cao su giảm giật nhông sau) gắn cho các dòng xe Exciter, Sirius, Jupiter, để thay thế cao su đùm zin lâu ngày bị hao mòn, vỡ nát, giúp xe vận hành êm ái hơn."
            ],
            [
                "name" => "Sên vàng DID 10 ly 428HD chính hãng 122 mắc", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay.  \r\n\r\nDID là thương hiệu nổi tiếng trên thế giới, chuyên sản xuất sên dành cho các giải đua xe hàng đầu vì thế chất lượng không thể chê được, sản phẩm cũng đã được nhiều anh em Biker tin dùng để thay để thay thế cho sên hãng rất nhanh bị giản, phải tốn nhiều công sức tăng sên thường xuyên, ngoài ra sên DID vàng còn là món phụ tùng trang trí tuyệt vời. \r\n\r\nSên vàng DID 428HD 122 mắc (10mm) dành cho các loại xe sử dụng sên tải Winner 150, Sonic , Exciter 150, Exciter 135, Axelo 125, Raider/Satria 150, Fz150i, FX 125..."
            ],
            [
                "name" => "Bố thắng đùm sau VTC chính hãng cho các dòng xe Honda", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đùm sau VTC chính hãng cho các dòng xe Honda: Airblade các đời, Lead, SH Mode, Vision, Click/Vario, PCX... luôn an toàn nhờ mặt bố bám cực chắc khi sử dụng. \r\nBố thắng VTC được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp vì không chứa Amiăng làm tăng tuổi thọ sản phẩm gấp nhiều lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đùm sau RCB chính hãng cho các dòng xe Honda", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 070439  \r\nBố thắng đùm sau RCB chính hãng cho các dòng xe Honda: Airblade các đời, Lead, SH Mode, Vision, Click/Vario, PCX... luôn an toàn nhờ mặt bố bám cực chắc khi sử dụng. \r\nBố thắng RCB được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp nhiều lần sản phẩm thông thường."
            ],
            [
                "name" => "Dây Curoa Michelin cho AB125, Lead125, Click125, SHmode...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho AB125, Lead125, Click125, SHmode,... \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho SCR, Lead 110", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho SCR, Lead 110. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho Vision 110", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho Vision 110. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho SH 125/150 2013 - 2016", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho SH 125/150 2013 - 2016. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho AB 150, Vario 125", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho AB 150, Vario 125. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho Vision 2014 - 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho Vision 2014 - 2020. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho Vision 2021 - 2023", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho Vision 2021 - 2023. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho Vario 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho Vario 150. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho SHVN 2020 - 2023", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho SHVN 125/150 2020 - 2022, SHVN 125/160 đời 2023. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Dây Curoa Michelin cho SHVN 125/150 2017 - 2019", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây Curoa Michelin cho SHVN 125/150 2017 - 2019. \r\nDây curoa mẫu mới thương hiệu Michelin mặt trong viền Cacbon tăng 30% công suất. \r\nTÍNH NĂNG NỔI BẬT CỦA SẢN PHẨM: \r\n- Nhiệt độ sử dụng: -40 ~ 130 độ C. \r\n- Độ cứng và độ dẻo tốt. \r\n- Độ chống nhão cao, hạn chế mài mòn tốt. \r\n- Chuyển động ổn định, ít tiếng ồn. \r\n- Ít lão hóa, tuổi thọ cao."
            ],
            [
                "name" => "Nhông Recto 14T chính hãng cho Raider, Satria,...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhông Recto 14T chính hãng dành cho Raider, Satria,... với chất liệu hộp kim siêu bền, vận hành ổn định sẽ giúp cho xe các bạn luôn hoạt động tốt nhất. \r\nNhông Recto 14T gắn cho xe Raider, Satria,..."
            ],
            [
                "name" => "Bộ vệ sinh và dầu dưỡng lọc gió STB chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ vệ sinh và dầu dưỡng lọc gió STB chính hãng gồm 2 chai:  \r\n- 1 chai tẩy rửa vệ sinh (355ml) \r\n- 1 chai phun xịt dầu phục hồi tấm lọc gió (184g) \r\nCó thể dùng cho tất cả các loại lọc gió lưới vĩnh viễn như: K&N, BMC, DNA, STB..... giúp tẩy rửa lọc gió bẩn và phục hồi lại tính năng lọc gió như ban đầu. Sản phẩm bộ vệ sinh lọc gió STB lợi thế bởi giá thành khá dễ chịu so với nhiều thương hiệu khác. \r\nBộ vệ sinh và dầu dưỡng lọc gió STB chính hãng, sản xuất tại Taiwan"
            ],
            [
                "name" => "Lọc gió K&N chính hãng dành cho Honda SH350i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió K&N chính hãng dành riêng cho Honda SH350i, thương hiệu nổi tiếng bậc nhất thế giới về lọc gió. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \r\nLọc gió K&N cho SH350i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. \r\nLọc gió K&N SH350i hàng chính hãng  sản xuất tại USA."
            ],
            [
                "name" => "Sên RK vàng đen 428SB - 132L chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên RK vàng đen 428SB - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. \r\nSên RK vàng đen 428SB - 132L là loại sên 9ly không phốt, dài 132 mắc, sên có lớp mạ vàng phối đen 2 màu rất đẹp, độc lạ, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường. \r\nSên RK vàng đen 428SB - 132L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số."
            ],
            [
                "name" => "Sên RK vàng đen 428SB - 124L chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên RK vàng đen 428SB - 124L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. \r\nSên RK vàng đen 428SB - 124L là loại sên 9ly không phốt, dài 124 mắc, sên có lớp mạ vàng phối đen 2 màu rất đẹp, độc lạ, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường. \r\nSên RK vàng đen 428SB - 124L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số."
            ],
            [
                "name" => "Bố thắng đĩa sau Elig Satria, Raider", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa sau Elig cho Raider, Satria luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \r\nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đĩa trước Elig Satria, Raider", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa trước Elig cho Raider, Satria luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \r\nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Lọc gió DNA chính hãng dành cho Honda SH350i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió DNA chính hãng dành riêng cho Honda SH350i, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \r\nLọc gió DNA cho SH350i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. \r\nLọc gió SH350i hàng chính hãng DNA sản xuất tại Hy Lạp."
            ],
            [
                "name" => "Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.\r\n Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.\r\n Phuộc RCB VD ty vàng chính hãng cho SH350i, SH300i gắn như zin không cần chế cháo. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc Nitron bình dầu chính hãng Việt Nam cho Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron bình dầu chính hãng Việt Nam cho Wave, Dream, Future được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron bình dầu chính hãng Việt Nam cho Wave, Dream, Future được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc Nitron bình dầu chính hãng Việt Nam cho SH Ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron bình dầu chính hãng Việt Nam cho SH Ý được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron bình dầu chính hãng Việt Nam cho SH Ý được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc Nitron bình dầu chính hãng Việt Nam cho AB", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron bình dầu chính hãng Việt Nam cho AB, PCX được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron bình dầu chính hãng Việt Nam cho AB được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc Adelin chính hãng cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Adelin chính hãng cho Exciter 150, Exciter 155, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. \r\nPhuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. \r\nPhuộc Adelin chính hãng cho  Exciter 150, Exciter 155...có chiều cao 208mm."
            ],
            [
                "name" => "Phuộc Adelin chính hãng cho Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Adelin chính hãng cho Winner, Sonic, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. \nPhuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. \nPhuộc Adelin chính hãng cho Winner, Sonic...có chiều cao 225mm."
            ],
            [
                "name" => "Phuộc Adelin bình dầu chính hãng cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Adelin bình dầu chính hãng cho Exciter 150, Exciter 155, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. \r\nPhuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. \r\nPhuộc Adelin bình dầu chính hãng cho  Exciter 150, Exciter 155...có chiều cao 208mm."
            ],
            [
                "name" => "Phuộc Adelin bình dầu chính hãng cho Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Adelin bình dầu chính hãng cho Winner, Sonic, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. \r\nPhuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. \r\nPhuộc Adelin bình dầu chính hãng cho Winner, Sonic...có chiều cao 225mm."
            ],
            [
                "name" => "Phuộc Adelin chính hãng cho SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Adelin chính hãng cho SHVN các đời, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. \r\nPhuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. \r\nPhuộc Adelin chính hãng cho SHVN...có chiều cao 375mm."
            ],
            [
                "name" => "Phuộc Adelin bình dầu chính hãng cho SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Adelin bình dầu chính hãng cho SHVN các đời, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. \r\nPhuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. \r\nPhuộc Adelin bình dầu chính hãng cho SHVN...có chiều cao 375mm."
            ],
            [
                "name" => "Phuộc Adelin chính hãng cho Wave, Future, Dream", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Adelin chính hãng cho Wave, thiết kế mới đầy tinh tế, vòng tăng chỉnh độ nhún và vòng tăng chỉnh loxo thiết kế dạng kim cương vô cùng độc đáo, nhìn rất sang trọng, ty phuộc được mạ vàng nổi bật trên nền phuộc đen. Phuộc Adelin với ưu điểm rất êm và có thể tăng chỉnh tuỳ theo nhu cầu sử dụng. \r\nPhuộc Adelin chính hãng được bảo hành 1 đổi 1 trong 12 tháng. \r\nPhuộc Adelin chính hãng cho Wave, Future, Dream...có chiều cao 330mm."
            ],
            [
                "name" => "Phuộc YSS G-Sport chính hãng cho Honda AB160 cao 335mm", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc YSS G-Sport chính hãng cho Honda AB 160...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. \r\nPhuộc YSS G-Sport chính hãng gắn cho Honda AB 160 mà không cần chế, phuộc có chiều cao 335mm.\r\nPhuộc YSS G-Sport chính hãng cho AB 160  được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."
            ],
            [
                "name" => "Phuộc YSS G-Sport 2 loxo cho Vario 160, Click 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc YSS dòng G-Sport 2 loxo cao cấp cho các dòng xe tay ga Vario 160, Click 160 mới...với thiết kế mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành, đặc biệt phiên bản này có kèm theo loxo để thay thế khi hư hỏng hoặc sơn lại để thay đổi màu sắc. \nPhuộc YSS G-Sport 2 loxo cho Vario 160, Click 160 mới có chiều cao 340mm được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."
            ],
            [
                "name" => "Baga inox 10 ly màu titan cho AB 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox 10ly màu titan cho AB160 được làm bằng vật liệu cao cấp, với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy, xe rất thẩm mỹ và gọn gàng."
            ],
            [
                "name" => "Bộ nhông sên dĩa Light cho Yamaha Sirius/Jupiter xăng cơ", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ nhông sên dĩa Light dành cho Yamaha Sirius, Jupiter xăng cơ với Sên vàng Light 428HS 104 mắc 10ly, nhông dĩa 15 - 36 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nBộ NSD Light dành cho Yamaha Sirius, Jupiter gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Bộ nhông sên dĩa Light cho Yamaha Exciter 135 đời 5 số 2011 - 2015", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ nhông sên dĩa Light dành cho Yamaha Exciter 135 đời 5 số 2011 - 2015 với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 14 - 38 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nBộ NSD Light dành cho Yamaha Exciter 135 đời 5 số gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Bộ Nhông sên dĩa Light cho Yamaha Exciter 135 đời 4 số 2006 - 2010", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ NSD Light dành cho Yamaha Exciter 135 nhỏ 4 số 2010 với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 15 - 39 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \nBộ NSD Light dành cho Yamaha Exciter 135 4 số gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Bộ Nhông sên dĩa Light cho Yamaha Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ nhông sên dĩa Light dành cho Yamaha Exciter 150 với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 14 - 42 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nBộ NSD Light dành cho Yamaha Exciter 150 gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Bộ Nhông sên dĩa Light cho Honda Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ nhông sên dĩa Light dành cho Winner với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 15 - 44 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nBộ NSD Light cho Honda  Winner 150, Winner X gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Bộ Nhông sên dĩa Light cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ Nhông sên dĩa Light dành cho Sonic với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 15 - 42 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nBộ NSD Light dành cho Honda  Sonicgắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Bộ Nhông sên dĩa Light cho Satria, Raider", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ Nhông sên dĩa Light dành cho Satria, Raider với Sên vàng Light 428HS 122 mắc 10ly, nhông dĩa 14 -38 được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nBộ NSD Light dành cho Satria, Raider gắn như zin và cùng thông số với nguyên bản, được bảo hành 6 tháng hoặc 12.000 km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Sên vàng Light 428HS 132 mắc 10ly", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên vàng Light 428HS 132 mắc 10ly, được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nSên vàng Light 428HS 132 mắc 10ly có thể gắn nhiều loại xe số thể thao dưới 175cc. Sên được bảo hành 6 tháng hoặc 12.000km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Sên vàng Light 428HS 122 mắc 10ly", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên vàng Light 428HS 122 mắc 10ly, được làm bằng thép bền bỉ theo thời gian, sên được mạ vàng theo công nghệ xi mạ tiên tiến thế hệ mới, thương hiệu Light Speed Racing xuất xứ từ Việt Nam được coi là nơi cung cấp sản phẩm chất lượng với giá thành hợp lí. \r\nSên vàng Light 428HS 122 mắc 10ly có thể gắn nhiều loại xe số thể thao dưới 175cc. Sên được bảo hành 6 tháng hoặc 12.000km tùy điều kiện nào đến trước."
            ],
            [
                "name" => "Nhông Recto chính hãng 15T cho Exciter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhông Recto 15T dành cho các dòng Exciter, đặc biệt thông số zin cho Exciter 135 nhỏ.  \r\nNhông Recto chính hãng đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn. \r\nNhông Recto 15T cho Exciter là hàng chính hãng Recto Thái Lan."
            ],
            [
                "name" => "Nhông Hodaka 15T cho Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 060011  \r\nNhông Hodaka 15T dành cho các dòng xe Winner, được sản xuất tại Malaysia, chất lượng đã được nhiều người tiêu dùng kiểm nghiệm rất chuẩn. \r\nNhông Hodaka 15T dành cho các dòng xe Winner 150, Winner X, Sonic 150"
            ],
            [
                "name" => "Phuộc RCB VS ty vàng chính hãng cho AB 125", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VS chính hãng ty vàng cho AB 125 đời 2013-2019...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.\n Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình.\n Phuộc RCB VS cho Air Blade 125 đời 2013-2019 cao 320mm và được bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VD ty vàng chính hãng cho Honda AB 125", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới dành cho xe Honda AB 125 đời 2013 - 2019 và ...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.\n Phuộc sau RCB VD bình dầu dành cho AB có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.\n Phuộc RCB VD cho Honda AB 125 có chiều cao 320mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Baga inox 10ly sơn đen tĩnh điện cho AB 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox 10ly sơn đen tĩnh điện cho AB 160 với thiết kế sơn đen khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy."
            ],
            [
                "name" => "Thảm lót chân Air Blade 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm lót chân cho xe Air Blade 160 mẫu mới khá đẹp, cao su dày chất lượng khá tốt. \r\nThảm lót chân AB 160 giúp cho xe luôn sạch sẽ, chống trầy sàn và còn có thể trang điểm cho xế yêu của bạn đẹp hơn."
            ],
            [
                "name" => "Nhông Recto chính hãng 15T cho Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhông Recto 15 dành cho Winner 150, Winner X, Sonic 150  \r\nNhông Recto chính hãng đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn. \r\nNhông Recto hàng chính hãng Thái Lan."
            ],
            [
                "name" => "Dĩa tải Saratai 43T cho Raider không Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải Saratai 43T cho Raider không Fi, thương hiệu đến từ Thái Lan, chất lượng tốt, bền bỉ."
            ],
            [
                "name" => "Pát chống rung dàn đầu Honda SH 2020 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Pát chống rung dàn đầu xe Honda SH 2020, khắc phục tình trạng bị rơ dàn đầu xe sau thời gian sử dụng, làm từ chất liệu Inox chắc chắn. \r\nPát chống rung dàn đầu gắn được cho xe Honda SH 2020-2022"
            ],
            [
                "name" => "Cao su bọc Smartkey Honda SH350i, Vision", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cao su bọc Smartkey dành cho Honda SH350i, Vision sử dụng Smartkey, đồ bền gần như tuyệt đối, bảo vệ tốt các chìa Smartkey khỏi va đạp hư hỏng, trầy xước. \n- Mẫu 2 nút cho SH 350i. \n- Mẫu 3 nút cho Vision."
            ],
            [
                "name" => "Lọc gió DNA chính hãng cho Honda SHVN 2020 - 2021 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió DNA chính hãng dành riêng cho Honda SHVN 2020, thương hiệu nổi tiếng Châu Âu nằm trong top thế giới. Với chất liệu bằng lưới lọc có thể vệ sinh tái sử dụng được trên 100 lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \r\nLọc gió DNA rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ. \r\nLọc gió DNA chính hãng cho SHVN 2020 sản xuất tại Hy Lạp."
            ],
            [
                "name" => "Bố thắng đĩa sau RCB chính hãng cho Exciter 135, Exciter 150/155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa sau RCB chính hãng cho Exciter 135, Exciter 150/155 với lốp bố chất lượng, êm ái khi sử dụng, đảm bảo an toàn khi vận hành. \r\nBố thắng đĩa RCB khá an toàn, tránh làm tổn hại đĩa thắng một cách tối đa. \r\nBố thắng đĩa RCB sau gắn vừa xe Exciter 135, Exciter 150/155."
            ],
            [
                "name" => "Bố thắng đĩa trước RCB chính hãng cho Exciter 150/155, NVX", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa trước RCB chính hãng cho Exciter 150/155, NVX với lốp bố chất lượng, êm ái khi sử dụng. \r\nBố thắng đĩa RCB khá an toàn, tránh làm tổn hại đĩa thắng một cách tối đa."
            ],
            [
                "name" => "Nhông sên dĩa DID vàng cho Suzuki Raider Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Suzuki Raider Fi với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."
            ],
            [
                "name" => "Nhông sên dĩa DID vàng cho Suzuki Raider xăng cơ", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Suzuki Raider xăng cơ với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."
            ],
            [
                "name" => "Nhông sên dĩa DID vàng cho Yamaha FZ150i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Trọn bộ nhông sên dĩa DID gia công theo công nghệ DID Thái dành cho Yamaha FZ150 với độ bền cực chắc, khắc phục hoàn toàn tình trạng hay bị giãn sên của xe zin, màu vàng vô cùng thẩm mỹ, vừa là món hàng trang trí vừa là phục tùng thay thế chất lượng."
            ],
            [
                "name" => "Ốp lọc gió trong suốt chính hãng ZHI.PAT cho Honda SH350i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Ốp lọc gió trong suốt chính hãng ZHI.PAT cho Honda SH350i. Với thiết kế thích hợp cho các bạn cá tính, thời trang. \r\n- Ốp lọc gió trong suốt có độ dày cao, nhẹ & trong suốt hoàn toàn.\r\n- Với chất liệu nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong."
            ],
            [
                "name" => "Thảm lót chân cao su cho Vario 160", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm lót chân cao su cho Vario 160 mẫu mới, cao su dày, rất chắc chắn, giúp xe luôn sạch sẽ và chống trầy sàn để chân. \r\nThảm lót chân cao su cho Vario 160  mẫu mới có thể gắn được các đời xe Vario 160"
            ],
            [
                "name" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 150, thiết kế kế đơn giản nhưng đẹp mắt, đặc biệt ty được mạ vàng nhìn nổi bật, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin. \nChiều dài phuộc: 208mm.- Ty phuộc 13mm - Lò xo phuộc 10mm \nPhuộc sau RCB E2 ty vàng cho Exciter 150 hàng chính hãng Racingboy được bảo hành 1 năm."
            ],
            [
                "name" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB E2 ty vàng chính hãng cho Exciter 135, thiết kế kế đơn giản nhưng đẹp mắt, đặc biệt ty được mạ vàng nhìn nổi bật, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin. \nChiều dài phuộc: 203mm.- Ty phuộc 13mm - Lò xo phuộc 10mm \nPhuộc sau RCB E2 ty vàng cho Exciter 135 hàng chính hãng Racingboy được bảo hành 1 năm."
            ],
            [
                "name" => "Ốp Lọc Gió Trong Suốt Chính Hãng ZHI.PAT cho Vision 2020 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Ốp Lọc Gió Trong Suốt Chính Hãng ZHI.PAT cho Vision 2020 - 2022. Với thiết kế thích hợp cho các bạn cá tính, thời trang. \r\n- Ốp lọc gió trong suốt có độ dày cao, nhẹ & trong suốt hoàn toàn. \r\n- Với chất liệu nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong."
            ],
            [
                "name" => "Phuộc Nitron chính hãng Việt Nam cho Air Blade", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron không bình dầu chính hãng Việt Nam cho Air Blade, PCX được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron chính hãng Việt Nam cho Air Blade (AB), PCX  cao 330mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Sên vàng  X1R 428S 132 mắc 9ly", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên vàng X1R 428S 132 mắc 9ly, sên được sử dụng ống trục liền nguyên khối có độ bền gấp 3 lần các loại sên zin thông thường trên thị trường, làm tăng tuổi thọ của sên lẫn nhông dĩa đi cùng. \r\nSên vàng X1R 428S 132 mắc 9ly được mạ vàng rất đặc biệt với 3 bước: mạ crom, phủ đồng rồi xi vàng nên màu sên rất đẹp và bền bỉ theo thời gian. \r\nSên vàng X1R 428S 132 mắc 9ly có thể gắn nhiều loại xe số thể thao dưới 175cc."
            ],
            [
                "name" => "Sên vàng X1R 428HPO 132 mắc 10ly", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên vàng X1R 428 HPO 132 mắc 10ly, sên được sử dụng ống trục liền nguyên khối có độ bền gấp 3 lần các loại sên zin thông thường trên thị trường, làm tăng tuổi thọ của sên lẫn nhông dĩa đi cùng. \r\nSên vàng X1R 428 HPO 132 mắc 10ly được mạ vàng rất đặc biệt với 3 bước: mạ crom, phủ đồng rồi xi vàng nên màu sên rất đẹp và bền bỉ theo thời gian. \r\nSên vàng X1R 428 HPO 132 mắc 10ly có thể gắn nhiều loại xe số thể thao dưới 175cc."
            ],
            [
                "name" => "Phuộc Nitron chính hãng Việt Nam cho Wave", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron không bình dầu chính hãng Việt Nam cho Wave được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron chính hãng Việt Nam cho Wave cao 335mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc Nitron chính hãng Việt Nam SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron không bình dầu chính hãng Việt Nam cho SHVN được thiết kế full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron chính hãng Việt Nam cho SHVN cao 380mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc Nitron Bình Dầu chính hãng Việt Nam SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron Bình Dầu chính hãng Việt Nam cho SHVN được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron Bình Dầu chính hãng Việt Nam cho SHVN cao 380mm, phuộc được bảo hành 12 tháng 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Bố thắng đĩa trước Elig cho AB, Lead, Click, Vario, Vision", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa trước Elig cho AB, Lead, Click, Vario, Vision... luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \r\nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đĩa trước Elig cho SH125i, SH150i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa trước Elig cho SH125i, SH150i luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đĩa sau Elig cho SH125i, SH150i, SH300i, SH350i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa sau Elig cho SH125i, SH150i, Sh300i, SH350i luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đùm sau Elig cho AB, PCX, Lead, SH Mode, Click, Vario, Vision", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đùm sau Elig cho Airblade các đời, Lead, SH Mode, Vision, Click/Vario, PCX... luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \r\nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đĩa trước Elig cho Winner, Wave 110", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa trước Elig cho Winner, Wave 110, Future Fi luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \r\nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đĩa trước Elig cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa trước Elig cho Exciter 150-155, Sirius Fi luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đĩa sau Elig cho Exciter, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa sau Elig cho Exciter 135, 150, 155 các đời, Sonic (đời cũ), Raider, Satria (đời cũ)... luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \r\nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Bố thắng đĩa sau Elig cho Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa sau Elig cho Winner, Sonic mới luôn an toàn với công nghệ EFT làm cho má phanh tăng sức mạnh độ bám khi sử dụng lực thắng ít hơn so với sản phẩm thông thường. \r\nBố thắng Elig được hoàn thiện đẹp và thẩm mĩ, có độ mài mòn thấp làm tăng tuổi thọ sản phẩm gấp 2 lần sản phẩm thông thường."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 44T cho Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 44T dùng để gắn Honda Winner"
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 43T cho Sonic, Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 43T dùng để gắn Sonic, Winner"
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 42T cho Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 42T dùng để gắn Sonic."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 46T cho Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 46T dùng để gắn Exciter 155."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 43T cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 43T dùng để gắn Exciter 150."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 42T cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 42T dùng để gắn Exciter 150."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 38T cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 38T dùng để gắn Exciter 135."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 39T cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 39T dùng để gắn Exciter 135."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 42T cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 42T dùng để gắn Exciter 135 thích đi dĩa to canh theo máy."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 39T cho Raider Fi, Satria Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 39T dùng để gắn Satria Fi, Raider Fi."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 38T cho Raider Fi, Satria Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 38T dùng để gắn Satria Fi, Raider Fi."
            ],
            [
                "name" => "Dĩa nhôm 7075 xịn 36T cho Wave RS, Future Led", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải nhôm 7075 chuẩn xịn Anode, hàng chất lượng cứng cáp, bền bỉ theo thời gian. Thiết kế CNC lòng dĩa phi tiêu lên xe nhìn rất đẹp. \r\nDĩa tải nhôm 7075 36T dùng để gắn Wave RS, RSX, Future Led"
            ],
            [
                "name" => "Dĩa Recto 44T chính hãng cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa Recto 44T hàng chính hãng dành cho Exciter 150. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng. \r\nDĩa Recto hàng chính hãng Thái Lan"
            ],
            [
                "name" => "Baga inox sơn tĩnh điện cho Honda Future Led", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox sơn tĩnh điện đen cho Honda Future Led 2018-2022 được làm bằng vật liệu inox cao cấp, dày, bền...sở hữu màu đen trông rất cứng cáp."
            ],
            [
                "name" => "Gác chân trước X1R chính hãng cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gác chân trước X1R chính hãng dành cho Yamaha Exciter 150, thiết kế đẹp, to bự nên chân gác lên chắc chắn hơn, tạo cảm giác an toàn khi chạy xe. Gác chân trước X1R vừa là món phụ kiện trang trí, vừa dùng để thay thế gác chân zin bị va quẹt, hư hỏng với giá thành hợp lí."
            ],
            [
                "name" => "Gác chân trước X1R chính hãng cho Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Gác chân trước X1R chính hãng dành cho Winner X, thiết kế đẹp, to bự nên chân gác lên chắc chắn hơn, tạo cảm giác an toàn khi chạy xe. Gác chân trước X1R vừa là món phụ kiện trang trí, vừa dùng để thay thế gác chân zin bị va quẹt, hư hỏng với giá thành hợp lí."
            ],
            [
                "name" => "Chân chống nghiêng inox 304 cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chân chống nghiêng Inox  304 được làm khá đẹp, chuẩn nét từng chi tiết vật liệu inox 304 cao cấp xịn nên rất chắc chắn, sản phẩm vừa làm đẹp vừa thay thế chân chống nghiêng theo xe khi bị hư, cũ \r\nChân chống nghiêng inox  304 gắn được cho Vario, Click."
            ],
            [
                "name" => "Chân chống nghiêng inox 304 cho Wave, Dream", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chân chống nghiêng Inox được làm khá đẹp, chuẩn nét từng chi tiết vật liệu inox 304 cao cấp xịn nên rất chắc chắn, sản phẩm vừa làm đẹp vừa thay thế chân chống nghiêng theo xe khi bị hư, cũ \r\nChân chống nghiêng inox 304 gắn được cho Wave, Dream."
            ],
            [
                "name" => "Che két nước CNC Anode xám cho Honda Vario, AB, SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Che két nước CNC Anode màu xám mới nhất dành cho Honda Vario, AB, SHVN..., với thiết kế hoàn toàn mới nhìn rất đẹp, đường nét CNC sắc nét cùng độ dày chắc chắn, tránh tình trạng bị đá hoặc các vật lạ văng vào gây hư hỏng két nước \r\nChe két nước CNC Anode màu xám gắn vừa khít cho Honda Vario, AB, SHVN."
            ],
            [
                "name" => "Sên RK vàng 428SB - 132L chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên RK vàng 428SB - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. \nSên RK vàng 428SB - 132L là loại sên 9ly không phốt, dài 132 mắc, sên vàng có lớp mạ rất đẹp, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường. \nSên RK vàng 428SB - 132L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số, moto PKN"
            ],
            [
                "name" => "Sên RK vàng 428SB - 124L chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên RK vàng 428SB - 124L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. \r\nSên RK vàng 428SB - 124L là loại sên 9ly không phốt, dài 124 mắc, sên có lớp mạ vàng rất đẹp, nhìn nổi bật đồng thời màu sắc cũng được giữ rất dài lâu so với loại sên thường. \r\nSên RK vàng 428SB - 124L chính hãng được sản xuất tại Nhật gắn được nhiều loại xe số."
            ],
            [
                "name" => "Phuộc trước LCM V1 cho Exciter 155 Smartkey", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter, phuộc LCM V1 nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter. \nPhuộc trước LCM V1 quan trọng nhất là ráp như zin cho Exciter 155 khoá Smartkey dùng heo 2 pis không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng sắt, pát, bạc đạn... \nPhuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."
            ],
            [
                "name" => "Phuộc trước LCM V2 cho Exciter 155 Smartkey", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter, phuộc LCM V2 nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter. \r\nPhuộc LCM V2 quan trọng nhất là ráp như zin cho Exciter 155 khoá Smartkey dùng heo 2 pis không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng nhôm CNC rất nhẹ, pát, bạc đạn... \r\nPhuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."
            ],
            [
                "name" => "Phuộc Ohlins HO 647 chính hãng cho Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Ohlins HO 647 chính hãng cho Honda Wave, Dream, Future có đầy đủ núm rebound tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường. \nThương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế. \nPhuộc Ohlins cho Wave, Dream, Future chính hãng (HO 647) được bảo hành chính hãng 2 năm. \nPhuộc Ohlins HO 647 chính hãng gắn vừa khít cho Honda Wave, Dream, Future, Axelo, Blade, Cub...đặc biệt có tặng kèm thêm 2 loxo để thay thế."
            ],
            [
                "name" => "Phuộc Ohlins HO 816 chính hãng cho SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Ohlins HO 816 dành cho Honda SHVN 125/150 chính hãng có đầy đủ núm rebound tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường. \r\nThương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế. \r\nPhuộc Ohlins cho SH 125/150 Việt Nam được bảo hành chính hãng 2 năm. \r\nPhuộc Ohlins HO 816 chính hãng gắn vừa khít cho Honda SHVN 125/150i."
            ],
            [
                "name" => "Phuộc Ohlins HO 831 chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Ohlins HO 831 Vario, Click chính hãng có đầy đủ núm rebound vs Compression tăng chỉnh độ nhún, phù hợp cho việc tải nặng nhẹ trên mọi cung đường. \r\nThương hiệu Ohlins là thương hiệu phuộc nổi tiếng nhất thế giới chuyện sản xuất phuộc dành cho tất cả các dòng xe máy từ PKL đến PKN, đỉnh cao từ chất lượng đến mẫu mã thiết kế. \r\nPhuộc sau Ohlins cho Vario, Click chính hãng (HO 831) được bảo hành chính hãng 2 năm. \r\nPhuộc Ohlins HO 831 chính hãng cho Vario, Click và có thể gắn trên nhiều dòng xe 1 phuộc khác."
            ],
            [
                "name" => "Lót cốp da cách nhiệt cho Honda Scoopy", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lót cốp da cách nhiệt cho xe Honda Scoopy, với mặt trong chất liệu da 5D được may rất chắc chắn, mặt ngoài được bọc 1 lớp nỉ cách nhiệt rất hiệu quả. \nLót cốp da cách nhiệt được may thêm 1 túi da nhỏ để tiện lợi khi bỏ giấy tờ  xe, điện thoại, chìa khoá, sổ nhỏ... \nLót cốp da cách nhiệt là sản phẩm rất cần thiết cho xe tay ga với 3 tính năng chính: \n- Cách nhiệt: Chống nóng cho toàn bộ đồ vật bên trong cốp, giữ độ bền cho đồ vật khỏi hư hại khi nhiệt độ tăng cao. \n- Chống va đập: Được làm từ chất liệu da 5D rất mềm, dày giúp để đồ điện tử trong xe khỏi va dập khi di chuyển. \n- Dễ dàng vệ sinh: Khi lót cốp dơ chỉ cần lấy ra dùng khăn ướt nhẹ lau sơ rồi gắn lại là sạch sẽ, thơm tho. \nLót cốp da cách nhiệt gắn vừa khít cho xe Honda Scoopy."
            ],
            [
                "name" => "Nhông Recto 14T chính hãng cho Honda Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhông Recto 14T chính hãng cho Honda đang rất được ưa chuộng với chất lượng vô cùng đảm bảo, độ bền khá cao, phù hợp với các loại xe phổ thông công suất lớn. \r\nNhông Recto 14T hàng chính hãng Thái Lan, gắn được cho Wave, Dream, Future..."
            ],
            [
                "name" => "Dĩa Recto 36T chính hãng cho Wave, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa Recto 36T hàng chính hãng dành choWave 110, Wave RS, Future. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng. \r\nDĩa Recto hàng chính hãng Thái Lan"
            ],
            [
                "name" => "Lọc gió lưới thép dành cho SH350i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép dành riêng cho SH350i, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \nLọc gió lưới thép cho SH350i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Dây dầu Adelin trước 750mm chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dây dầu Adelin chính hãng  giúp xe bạn thật nổi bật với nhiều màu sắc và bền chắc hơn dây dầu zin nguyên bản, nhiều lõi kim loại bên trong có khả năng chống cắt dây trộm heo dầu. \r\nHàng chính hãng Adelin, dây dầu có thể gắn tất cả loại xe đi thắng đĩa. Chiều dài 750mm, phù hợp cho khách hàng thích ngắn gọn."
            ],
            [
                "name" => "Phuộc YSS G-Sport 2 loxo cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc YSS dòng G-Sport 2 loxo cao cấp cho các dòng xe tay ga Vario, Click...với thiết kế mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành, đặc biệt phiên bản này có kèm theo loxo để thay thế khi hư hỏng hoặc sơn lại để thay đổi màu sắc. \nPhuộc sau YSS G-Sport 2 loxo gắn Vario, Click mà không cần chế, khách muốn gắn cho Lead và Vision thì chêm Pô Air (ốp lọc gió) ra ngoài bằng con tán 8ly.  \nPhuộc YSS G-Sport 2 loxo cho Vario, Click có chiều cao 330mm được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."
            ],
            [
                "name" => "Thảm lót chân cao su cho Honda SH350i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm lót chân cao su cho Honda SH350i mẫu mới, thiết kế đẹp, sang trọng, cao su dày, rất chắc chắn, giúp xe luôn sạch sẽ và chống trầy sàn để chân. \r\nThảm lót chân cao su gắn vừa khít SH350i mà không cần chế cháo."
            ],
            [
                "name" => "Cần số 2 chiều X1R chính hãng cho Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số X1R chính hãng cho Winner X, thiết kế 2 chiều tiện lợi cho việc không bị hư giày trong lúc đạp số, giúp lên số trả số nhanh hơn. Cần số X1R chính hãng cho Winner X được làm bằng chất liệu nhôm CNC nên cho ra mẫu mã rất đẹp. \r\nCần số X1R chính hãng cho Winner X là hàng chính hãng X1R có 2 màu: đen và trắng."
            ],
            [
                "name" => "Phuộc RCB M2 ty vàng chính hãng cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB M2 ty vàng cho Exciter 150, Exciter 155, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng. \nPhuộc RCB M2 ty vàng cao 208mm. \n- Ty phuộc 10mm màu vàng. \n- Lò xo phuộc 10mm. \nPhuộc RCB M2 ty vàng hàng chính hãng RCB được bảo hành 1 năm."
            ],
            [
                "name" => "Phuộc RCB M2 ty vàng chính hãng cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB M2 ty vàng cho Exciter 135, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng. \nPhuộc RCB M2 ty vàng cao 203mm. \n- Ty phuộc 10mm màu vàng. \n- Lò xo phuộc 10mm. \nPhuộc RCB M2 ty vàng hàng chính hãng RCB được bảo hành 1 năm."
            ],
            [
                "name" => "Phuộc RCB M2 ty vàng chính hãng cho Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB M2 ty vàng chính hãng cho Winner, Sonic, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng \nPhuộc RCB M2 cao 225mm \n- Ty phuộc 10mm màu vàng.\n- Lò xo phuộc 10mm\n. Phuộc RCB M2 cho Winner, Sonic hàng chính hãng RCB được bảo hành 1 năm."
            ],
            [
                "name" => "Phuộc YSS G-Sport chính hãng cho Wave, Dream, Future, Axelo, Monkey...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc YSS G-Sport chính hãng cho Wave, Dream...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. \nPhuộc YSS G-Sport chính hãng gắn cho Wave, Dream, Monkey, Cub, Axelo, Viva...mà không cần chế, phuộc có chiều cao 335mm. \nPhuộc YSS G-Sport chính hãng cho Wave, Dream được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."
            ],
            [
                "name" => "Phuộc YSS G-Sport chính hãng cho Honda SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc YSS G-Sport chính hãng cho Honda SHVN...dòng Black Series với thiết kế màu đen mới nhất với bình dầu nằm trên rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh rất êm ái khi vận hành. \r\nPhuộc YSS G-Sport chính hãng gắn cho Honda SHVN mà không cần chế, phuộc có chiều cao 375mm. \r\nPhuộc YSS G-Sport chính hãng cho Honda SHVN được bảo hành chính hãng 6 tháng, sản xuất tại Thái Lan."
            ],
            [
                "name" => "Bố thắng đĩa RCB sau cho Honda SH 125/150, SH 300 (2012 - 2021)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa RCB sau cho Honda SH 125/150, SH 300 (2012 - 2021), hàng nhập khẩu chính hãng RCB, chất lượng bố rất tốt so với giá bán ra, đảm bảo an toàn khi vận hành. \r\nBố thắng đĩa RCB sau gắn vừa khít cho Honda SH 2 đĩa."
            ],
            [
                "name" => "Sên phốt RK 428 ELO 132L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên phốt RK 428 ELO - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. \r\nSên phốt RK 428 ELO - 132L là loại sên 9ly có phốt cao su, dài 132 mắc, sên này được trang bị trên xe Yamaha Exciter 155 nguyên bản, sên có phốt nên vận hành rất mượt mà, êm ái. \r\nSên phốt RK 428 ELO - 132L chính hãng được sản xuất tại Nhật, gắn được cho Exciter 155 và các dòng xe côn tay thể thao dưới 150cc."
            ],
            [
                "name" => "Phuộc trước LCM V1 ty 7 màu cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter 150, Exciter 155, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter 150, Exciter 155. \nPhuộc LCM V1 ty 7 màu có thiết kế ty phuộc nhiều màu như titan rất đẹp, quan trọng nhất là ráp như zin cho Exciter 150, Exciter 155 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, chảng 3 bằng sắt, pát, bạc đạn... \nPhuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."
            ],
            [
                "name" => "Sên RK vàng đen 428HSBT - 132L chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên RK vàng đen 428HSBT - 132L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. \r\nSên RK vàng đen 428HSBT - 132L là loại sên 10ly không phốt, dài 132 mắc, sên vàng có lớp mạ ngoài đen, nhìn nổi bật đồng thời cũng giúp màu sắc sên bền hơn so với loại vàng nguyên sợi. \r\nSên RK vàng đen 428HSBT - 132L chính hãng được sản xuất tại Nhật, gắn được cho Exciter 155 và các dòng xe côn tay thể thao dưới 150cc"
            ],
            [
                "name" => "Sên vàng DID 9 ly 428D chính hãng 124 mắc", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay.  \r\n\r\nDID là thương hiệu nổi tiếng trên thế giới, chuyên sản xuất sên dành cho các giải đua xe hàng đầu vì thế chất lượng không thể chê được, sản phẩm cũng đã được nhiều anh em Biker tin dùng để thay để thay thế cho sên hãng rất nhanh bị giản, phải tốn nhiều công sức tăng sên thường xuyên, ngoài ra sên DID vàng còn là món phụ tùng trang trí tuyệt vời. \r\n\r\nSên vàng DID 428D 124 mắc (9mm) dành cho các loại xe sử dụng sên tải Winner 150, Sonic , Exciter 150, Exciter 135, Axelo 125, Raider/Satria 150, Fz150i, FX 125..."
            ],
            [
                "name" => "Sên vàng DID 10 ly 428HD chính hãng 124 mắc", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên DID chính hãng nhập khẩu từ Nhật Bản, với độ bền khá cao, sên rất lâu giãn, màu vàng rất đẹp phù hợp với các loại xe đi sên trần như Exciter, Raider, Sport, FX...là một trong những sản phẩm được ưu chuộng nhất hiện nay.  \r\n\r\nDID là thương hiệu nổi tiếng trên thế giới, chuyên sản xuất sên dành cho các giải đua xe hàng đầu vì thế chất lượng không thể chê được, sản phẩm cũng đã được nhiều anh em Biker tin dùng để thay để thay thế cho sên hãng rất nhanh bị giản, phải tốn nhiều công sức tăng sên thường xuyên, ngoài ra sên DID vàng còn là món phụ tùng trang trí tuyệt vời. \r\n\r\nSên vàng DID 428HD 124 mắc (10mm) dành cho các loại xe sử dụng sên tải Winner 150, Sonic , Exciter 150, Exciter 135, Axelo 125, Raider/Satria 150, Fz150i, FX 125..."
            ],
            [
                "name" => "Dĩa Recto 46T chính hãng cho Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa Recto 46T hàng chính hãng dành cho Exciter 155. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng. \r\nDĩa Recto 46T hàng chính hãng Thái Lan gắn vừa khít cho Exciter 155."
            ],
            [
                "name" => "Nhông Mặt Trời 15T cho Honda Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhông mặt trời 15T chính hãng dành cho Honda Winner, Sonic, chất lượng đã được kiểm chứng lâu năm vô cùng bền bỉ. \r\nNhông mặt trời 15T chính hãng cho Winner được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Mâm RCB 8 cây chính hãng cho Exciter 150-155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm RCB  8 cây bản nhỏ cho Exciter 150-155 với bản trước 1.6 sau 1.85 lên xe cực chất, dành cho Biker thích phong cách racing, nhìn xe gọn nhưng rất chất. Gắn lên xe như zin không cần chế cháo. Mẫu mâm 8 cây rất được ưa chuộng nay đã có cho Exciter 150-155.\n Mâm RCB Racingboy 8 cây gắn vừa khít cho Exciter 150-155 có 3 Màu: Đen/Vàng/Trắng. Hàng chính hãng RCB được bảo hành 6 tháng."
            ],
            [
                "name" => "Sên RK vàng đen 428HSBT - 124L chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên RK vàng đen 428HSBT - 124L, hàng chính hãng thương hiệu RK chuyên sản xuất sên cho các dòng xe PKL, xe đua...số 1 Nhật Bản. \nSên RK vàng đen 428HSBT - 124L là loại sên 10ly không phốt, dài 124 mắc, sên vàng có lớp mạ ngoài đen, nhìn nổi bật đồng thời cũng giúp màu sắc sên bền hơn so với loại vàng nguyên sợi. \nSên RK vàng đen 428HSBT - 124L chính hãng được sản xuất tại Nhật."
            ],
            [
                "name" => "Baga inox màu titan cho Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox lên màu titan cho Exciter 155 được làm bằng vật liệu inox cao cấp, dày, bền...sở hữu màu titan đang hot trên thị trường."
            ],
            [
                "name" => "Baga inox sơn tĩnh điện cho Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox sơn tĩnh điện đen cho Exciter 155 được làm bằng vật liệu inox cao cấp, dày, bền...sở hữu màu đen trông rất cứng cáp."
            ],
            [
                "name" => "Cần số 2 chiều cho Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số 2 chiều dành cho xe Yamaha Exciter 155, mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng."
            ],
            [
                "name" => "Sên vàng Recto 428SB-124L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên vàng Recto 428SB-124L, sên bản 9ly dài 124 mắc, thương hiệu nhông sên dĩa Recto gẩn đây đã quên thuộc với nhiều anh em Biker, giá thành vô cùng hợp lí so với các dòng sên DID. \r\nSên vàng Recto 428SB-124L hàng chính hãng sản xuất tại Malaysia. \r\nSên vàng Recto 428SB-124L dài 124 gắn vừa các loại xe côn tay thể thao từ 150cc trở xuống."
            ],
            [
                "name" => "Thảm cao su Honda Vision 2021", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm cao su lót chân cho Honda Vision đời 2021, thiết kế kiểu Indo đẹp, cao su làm rất dày, giúp chống trầy sàn xe, khi dơ chỉ cần lấy xe chà là xong sạch sẽ rất tiện lợi."
            ],
            [
                "name" => "Thảm cao su Honda Vision 2014-2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm cao su lót chân cho Honda Vision đời 2014 đến 2020, cao su làm rất dày, giúp chống trầy sàn xe, khi dơ chỉ cần lấy xe chà là xong sạch sẽ rất tiện lợi."
            ],
            [
                "name" => "Cần số 2 chiều zin MX King cho Exciter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số 2 chiều zin chính hãng Yamaha theo xe MX King, có thể gắn như zin cho các dòng xe EXciter 150-155. \r\nCần số 2 chiều zin chính hãng Yamaha MX King thì chất lượng đảm bảo, thiết kế gọn đẹp hơn nhiều so với hàng chợ trên thị trường."
            ],
            [
                "name" => "Dĩa Recto 42T chính hãng cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa Recto 42T hàng chính hãng dành cho Honda Sonic. Sản phẩm đang được rất nhiều Biker ưa chuộng với chất lượng tuyệt vời, đồ bền cao, vận hành êm ái. Ngoài ra thiết kế cũng khá ấn tượng. \r\nDĩa Recto 42T hàng chính hãng Thái Lan gắn vừa khít như zin cho Sonic."
            ],
            [
                "name" => "Sên vàng Kozi 428H-130L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên vàng Kozi 428H-130L, sên bản 9ly dài 130 mắc, thương hiệu Kozi đã quên thuộc với nhiều anh em Biker, giá thành vô cùng hợp lí so với các dòng sên DID. \r\nSên vàng Kozi 428H-130L hàng chính hãng sản xuất tại Malaysia. Sên được bảo hành 6 tháng 1 đổi 1. \r\nSên vàng Kozi 428H-130L dài 130 gắn vừa các loại xe côn tay thể thao từ 150cc trở xuống."
            ],
            [
                "name" => "Phuộc Nitron chính hãng Việt Nam cho Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron chính hãng Việt Nam cho Winner, Sonic được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron chính hãng Việt Nam cho Winner, Sonic cao 230mm, phuộc được bảo hành 12 tháng, 1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc Nitron chính hãng Việt Nam cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 070656 \r\nPhuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron chính hãng Việt Nam cho Exciter 150 được thiết kế bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron chính hãng Việt Nam cho Exciter 150 cao 205mm có thể gắn cho cả Exciter 150 và Exciter 135, phuộc được bảo hành 12 tháng,  1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc Nitron chính hãng Việt Nam 2 bình dầu cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc Nitron chính hãng Việt Nam, thương hiệu phuộc mới tại Việt Nam đang rất được ưa chuộng trên thị trường đồ chơi xe máy với ưu điểm thiết kế đẹp mắt, tỉ mỉ từng chi tiết đồng thời độ nhún rất mượt mà, êm ái và đặc biệt giá cả vô cùng hợp lí. \r\nPhuộc Nitron chính hãng Việt Nam 2 bình dầu cho Exciter 150 được thiết kế 2 bình dầu cùng full chức năng tăng chỉnh độ nhún, độ đàn hồi phuộc nên phù hợp cho nhiều Biker có thể đi đường xấu đẹp hay chở nặng nhẹ tuỳ ý. \r\nPhuộc Nitron chính hãng Việt Nam 2 bình dầu cho Exciter 150 cao 205mm có thể gắn cho cả Exciter 150 và Exciter 135, phuộc được bảo hành 12 tháng,  1 đổi 1 chính hãng Nitron Việt Nam."
            ],
            [
                "name" => "Phuộc RCB DB-2 Line (G-BK) ty vàng cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB DB-2 Line (G-BK) ty vàng chính hãng mẫu mới nhất dành cho Exciter 150 có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó, đặc biệt thiết kế màu đen ty phuộc được mạ vàng rất sang trọng. \nPhuộc RCB DB-2 Line (G-BK) ty vàng cho Exciter 150 có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. \nPhuộc sau RCB DB-2 Line (G-BK) ty vàng cho Exciter 150 cao 208mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."
            ],
            [
                "name" => "Phuộc RCB MB2 ty vàng chính hãng cho Air Blade", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB MB2 ty vàng chính hãng bình dầu cho Air Blade, PCX đời cũ..mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung,với ty phuộc được mạ vàng rất độc đáo. Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành \nPhuộc RCB MB2 ty vàng hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng. \nPhuộc RCB MB2 cao 320mm gắn được cho Air Blade, PCX đời cũ"
            ],
            [
                "name" => "Mâm RCB 5 cây chính hãng cho Exciter 150 bản 1.6-1.6", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm RCB  5 cây bản siêu nhỏ cho Exciter 150 với bản trước 1.6 sau 1.6 lên xe cực chất, dành cho Biker thích phong cách racing, nhìn xe gọn nhưng rất chất. Gắn lên xe như zin không cần chế cháo.\n Mâm RCB Racingboy 5 cây cho Exciter 150 bản 1.6-1.6 có 2 Màu: Đen/Vàng. Hàng chính hãng RCB được bảo hành 6 tháng."
            ],
            [
                "name" => "Phuộc RCB C Series ty vàng chính hãng cho Honda Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Phuộc RCB C Series ty vàng cho Honda Wave, Dream, Future, Axelo... thiết kế mới vô cùng sắc xảo cùng với ty phuộc được mạ vàng tạo điểm nhấn, loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành. \r\n- Phuộc RCB C Series ty vàng cho Honda Wave/Dream, Future, Axelo  là Hàng chính hãng Racing Boy bảo hành 12 tháng. \r\n- Phuộc RCB C Series ty vàng cho Honda Wave/Dream, Future, Axelo...với chiều cao 335mm bằng với phuộc zin."
            ],
            [
                "name" => "Phuộc RCB C Series ty vàng chính hãng cho Honda Air Blade", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Phuộc RCB C Series ty vàng cho AB125/150, PCX cũ thiết kế mới vô cùng sắc xảo cùng với ty phuộc được mạ vàng tạo điểm nhấn, loxo phuộc to, chắc chắn, có chế độ tăng chỉnh loxo nặng nhẹ phù hợp với trọng tải cũng như cung đường mình vận hành. \n- Phuộc sau RCB C Series ty vàng cho AirBlade 125/150 là Hàng chính hãng Racing Boy bảo hành 12 tháng. \n- Phuộc RCB C Series ty vàng gắn được cho Air Blade 125/150, PCX cũ...với chiều cao 320mm bằng với phuộc zin."
            ],
            [
                "name" => "Ống tiêu inox Honda Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ống tiêu inox dành cho Honda Winner X, làm cho hơi thoát ra từ pô xe phóng xuống đường, tình trạng pô zin xe Winner X làm cho khí thải phóng thẳng vào mặt người đi sau đã xảy ra rất nhiều, khiến người đi đường rất khó chịu, sản phẩm chụp pô Winner X này làm cho trở nên văn minh, lịch sự hơn. \r\nỐng tiêu inox Winner X gắn vừa khít cho pô zin."
            ],
            [
                "name" => "Lọc gió Uma chính hãng dành cho Honda Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió Uma chính hãng dành cho Honda Winner, Sonic..phụ tùng thay thế chuẩn cho lọc gió zin nguyên bản. Lọc gió Uma dạng mút giúp lọc gió sạch hơn dạng lọc giấy của Zin, thời gian sử dụng lâu hơn và có thể thổi bụi vệ sinh lại, khuyến cáo thay thế khi đi thời gian lâu quá dơ, không nên vệ sinh, rửa, giặt. \nLọc gió Uma là hàng chính hãng Uma Racing gắn vừa khít như zin cho Honda Winner 150, Winner X, Sonic"
            ],
            [
                "name" => "Lọc gió BMC chính hãng cho SH Ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió BMC chính hãng dành cho Honda SH Ý, Dylan, PS, đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air. \r\n Lọc gió BMC dành cho Honda SH Ý được sản xuất tại Italy."
            ],
            [
                "name" => "Phuộc trước LCM V2 cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter, phuộc LCM V2 nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter. \r\nPhuộc LCM V2 quan trọng nhất là ráp như zin cho Exciter 150 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng nhôm CNC rất nhẹ, pát, bạc đạn... \r\nPhuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."
            ],
            [
                "name" => "Mâm RCB 6 cây chính hãng bản 1.6 cho Honda Winner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm RCB chính hãng 6 cây 2 đĩa bản nhỏ 1.6-1.6 dành cho Honda Winner, bản mâm nhỏ, làm xe thanh thoát hơn, phù hợp cho Biker thích đi xe nhỏ gọn. \nMâm RCB Winner kích thước bản mâm bánh trước 1.6 và bánh sau 1.6. \nMâm RCB 6 cây hàng chính hãng RCB gắn vừa Honda Winner, Winner X mà không cần chế cháo thêm."
            ],
            [
                "name" => "Phuộc RCB DB-2 Line (G-TI) chính hãng cho Winner, Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB DB-2 Line (G-TI) chính hãng mẫu mới nhất dành cho Honda Winner, Sonic có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó. \nPhuộc RCB DB-2 Line (G-TI) cho Winner, Sonic có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. \nPhuộc sau RCB DB-2 Line (G-TI) cho Winner, Sonic cao 229mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."
            ],
            [
                "name" => "Phuộc RCB DB-2 Line (G-TI) chính hãng cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB DB-2 Line (G-TI) chính hãng mẫu mới nhất dành cho Exciter 150 có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó. \nPhuộc RCB DB-2 Line (G-TI) cho Exciter 150 có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. \nPhuộc sau RCB DB-2 Line (G-TI) cho Exciter 150 cao 208mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."
            ],
            [
                "name" => "Phuộc RCB DB-2 Line (G-TI) chính hãng cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB DB-2 Line (G-TI) chính hãng mẫu mới nhất dành cho Exciter 135 có bình dầu rất đẹp, phuộc đã được cải tiến độ nhún chất lượng hơn so với mẫu DB-2 Line trước đó. \nPhuộc RCB DB-2 Line (G-TI) cho Exciter 135 có nút tăng chỉnh độ nhún, phù hợp cho mọi cung đường và đồng thời trên bình dầu cũng có nút tăng chỉnh độ đàn hồi lại của phuộc, tạo cảm giác khá êm ái khi tải nặng và nhẹ ở nhiều trường hợp khác nhau.. \nPhuộc sau RCB DB-2 Line (G-TI) cho Exciter 135 cao 203mm, sản phẩm được bảo hành 12 tháng chính hãng RacingBoy."
            ],
            [
                "name" => "Ốp pô inox 300i ZHIPAT cho SHVN 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Ốp pô inox 300i ZHIPAT cho SHVN 2020. Sản phẩm thay thế cho ốp zin hoặc trang trí cho xe thêm cá tính và thời trang. \nỐp pô 300i ZHIPAT cho SH 2020 với chất liệu nhựa ABS kết hợp với inox chắc chắn sẽ bảo vệ phần pô gần như tuyệt đối. \nỐp pô inox 300i ZHIPAT gắn được cho tất cả loại xe SHVN 2020. Sản phẩm chính hãng ZHIPAT."
            ],
            [
                "name" => "Lọc gió lưới thép độ dành cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép độ dành riêng cho Exicter 135 các đời, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \r\nLọc gió lưới thép độ cho exciter 135 rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Mâm Power Millenium chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm Power Millenium chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm hình chữ Y dày với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. \nMâm Power Millenium chính hãng cho Vario, Click được sản xuất tại Indonesia."
            ],
            [
                "name" => "Mâm Power Star chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm Power Star chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm hình sao với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. \nMâm Power Star chính hãng cho Vario, Click được sản xuất tại Indonesia."
            ],
            [
                "name" => "Mâm Power Evo chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm Power Evo chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm nhiều chi tiết với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. \nMâm Power Evo chính hãng cho Vario, Click được sản xuất tại Indonesia."
            ],
            [
                "name" => "Mâm Power Blade chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm Power Blade chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. Xe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. Mâm  với đường nét sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. \nMâm Power Blade chính hãng cho Vario, Click được sản xuất tại Indonesia."
            ],
            [
                "name" => "Mâm Chemco Evo chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm Chemco Evo chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. \nXe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. \nMâm nhôm với đường nét CNC sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. \nMâm Chemco Evo chính hãng cho Vario, Click kích thước 14 inch, bản mâm 2.15 - 2.5, được sản xuất tại Indonesia."
            ],
            [
                "name" => "Mâm Chemco Penta chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm Chemco Penta chính hãng cho Vario, Click, mâm 4 lỗ ốc có thể gắn Vario, Click mẫu cũ hoặc mẫu mới 125. \nXe Vario, Click 150 muốn gắn thì thay lại đĩa 4 lỗ. \nMâm nhôm với đường nét CNC sắc sảo rất đẹp, hàng chính hãng nên chất lượng khỏi bàn. \nMâm Chemco Penta chính hãng cho Vario, Click kích thước 14 inch, bản mâm 2.15 - 2.5, được sản xuất tại Indonesia."
            ],
            [
                "name" => "Cục kêu tìm xe Honda", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cục kêu tìm xe Honda, giúp các xe thường lên Smartkey xử dụng được chức năng tìm xe kêu tít tít khi để trong bãi xe."
            ],
            [
                "name" => "Cổ pô STB inox chính hãng cho Satria, Raider Fi 34mm", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cố pô STB inox 304 chính hãng dành cho Satria, Raider 34mm gồm full bộ cổ có thể gắn đi kèm với pô tăng STB hoặc các loại pô tăng khác trên thị trường, cổ 34mm phù hợp dành các laoi5 xe độ máy, tăng tối đa công suất động cơ. \nCố pô STB inox chính hãng được làm rất sắc nét, đúng inox 304, hàng xuất xứ từ Đài Loan."
            ],
            [
                "name" => "Lọc gió trụ STB họng 28 gắn được các xe", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió trụ STB tăng lưu lượng gió nạp vào bình xăng, cải thiện hiệu suất hòa trộn nhiên liệu, giúp xe hoạt động mạnh mẽ hơn. Lọc gió trụ phù hợp cho các dòng xe đi bài nhẹ tăng công suất động cơ. \r\nLọc gió trụ STB xuất xứ từ Đài Loan."
            ],
            [
                "name" => "Lọc gió lưới thép độ dành cho Vision", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép độ dành riêng cho Vision từ 2014 trở lên , với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \r\nLọc gió lưới thép độ cho Vision rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Ốp Lọc Gió Trong Suốt Chính Hãng Zhi.Pat dành cho SHVN 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Ốp lọc gió (pô air) trong suốt chính hãng Zhi.pat nhiều màu dành cho SHVN 2020 Với thiết kế thích hợp cho các bạn cá tính.  - Ốp lọc gió trong suốt hoàn toàn, có độ dày cao và siêu nhẹ.  - Ốp lọc gió sử dụng nhựa PC kỹ thuật, bền, khả năng chống va đập cao, không mùi, không gây hại cho sức khỏe con người, chịu nhiệt cao. Có lớp chống tia UV, làm giảm những tác hại của ánh nắng mặt trời & không bị ố vàng sau thời gian sử đụng đồng thời nổi bật phần lọc gió bên trong.   - Bảo hành chính hãng 12 tháng."
            ],
            [
                "name" => "Phuộc RCB VE chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VE chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VE có thêm loxo để thay thế rất tiện lợi.\n Phuộc RCB VE cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VD chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm loxo để thay thế rất tiện lợi.\n Phuộc sau RCB VD bình dầu 2 nút tăng chỉnh Rebound ngay chân phuộc và trên bình dầu phù hợp cho mọi địa hình và tải nặng.\n Phuộc RCB VD cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VE chính hãng cho Vario, Click (ty vàng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VE chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VE có thêm loxo để thay thế rất tiện lợi. Đặc biệt dòng này thiết kế ty mạ vàng nhìn rất sang và đẹp.\n Phuộc RCB VE ty vàng cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VD chính hãng cho Vario, Click (ty vàng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm loxo để thay thế rất tiện lợi. Đặc biệt dòng này thiết kế ty mạ vàng nhìn rất sang và đẹp.\n Phuộc sau RCB VD bình dầu 2 nút tăng chỉnh Rebound ngay chân phuộc và trên bình dầu phù hợp cho mọi địa hình và tải nặng.\n Phuộc RCB VD ty vàng cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VS ty vàng chính hãng cho SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe SHVN 2012-2020...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm 2 loxo để thay thế. Đặc biệt thiết kế ty phuộc mạ vàng rất đẹp.\r\n Phuộc sau RCB VS bình dầu dành cho SHVN có nút tăng chỉnh Rebound phù hợp cho mọi địa hình và tải nặng ngay chân phuộc.\r\n Phuộc RCB VS ty vàng cho SHVN có chiều cao 380mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VD ty vàng chính hãng cho Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế. Đặc biệt ty được thiết kế mạ vàng rất đẹp mắt.\r\n Phuộc sau RCB VD bình dầu có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.\r\n Phuộc RCB VD ty vàng cho Wave, Dream có chiều cao 335mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VD ty vàng chính hãng cho Honda AB 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Honda AB và AB 160...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.\r\n Phuộc sau RCB VD bình dầu dành cho AB có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.\r\n Phuộc RCB VD cho Honda AB 2020 và AB 160 có chiều cao 335mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Mâm X1R chính hãng 8 cây cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm X1R chính hãng 8 cây cho Exciter 150, thiết kế 8 cây huyền thoại được rất nhiều anh em biker ưa chuộng, khi trang bị lên xe nhìn rất đẹp với mâm 8 cây không quá to, làm xe trở nên rất thanh thoát, còn về chất lượng X1R đã được nhiều anh em trải nghiệm đánh giá khá tốt cùng với giá cả hợp lí. \nMâm X1R chính hãng 8 cây gắn vừa y Exciter 150 mà không cần chế cháo với bản mâm 1.6 - 1.85"
            ],
            [
                "name" => "Mâm X1R 6 cây chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm X1R  6 cây chính hãng cho Vario, Click, hàng khá hot trên thị trường, thiết kế 6 cây mảnh to rất phù hợp với dáng xe hầm hố, thể thao như Vario, Click. Hàng X1R chất lượng tốt đã được nhiều biker tin dùng. \r\nMâm X1R 6 cây  chính hãng cho Vario, Click có bản mâm là: 1.6 - 1.85 \r\nMâm X1R 6 cây là hàng chính hãng X1R."
            ],
            [
                "name" => "Mâm RCB 6 cây chính hãng cho Honda Sonic", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm RCB chính hãng 6 cây dành cho Honda Sonic, mâm thiết kế bản nhỏ, 6 cây thanh thoát phù hợp với dáng gọn của Sonic, chất lượng mâm RCB thì đã được nhiều Biker tin dùng \nMâm 6 cây RCB chính hãng cho Sonic kích thước bản mâm bánh trước 1.6 và bánh sau 1.6. \nMâm 6 cây RCB gắn vừa Sonic mà không cần chế cháo, hàng chính hãng Racingboy thương hiệu đến từ Malaysia."
            ],
            [
                "name" => "Mâm RCB 8 cây chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm RCB 8 cây chính hãng cho Vario, Click, hàng khá hot trên thị trường, thiết kế 8 cây mảnh rất phù hợp với dáng xe nhỏ gọn như Vario, Click. Hàng RCB chất lượng tốt đã được nhiều biker tin dùng. \r\nMâm 8 cây RCB chính hãng cho Vario, Click có bản mâm là: 1.85 - 2.15 \r\nMâm 8 cây RCB là hàng chính hãng RCB thương hiệu từ Malaysia. Mâm được bảo hành chính hãng 1 năm"
            ],
            [
                "name" => "Bố thắng Frando 2pis chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng Frando 2pis chính hãng dành cho các dòng heo 2 pis đối xứng như: Frando, Brembo, RCB, Anchor...hàng chính hãng cao cấp rất an toàn, bền, không hại đĩa thắng, phù hợp sử dụng cho các dòng heo dầu cao cấp. \r\nBố thắng Frando chính hãng 2 pis sản xuất tại Taiwan."
            ],
            [
                "name" => "Phuộc RCB MB2 chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB MB2 chính hãng bình dầu cho Vario, Click...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Phuộc Racingboy MB2 chính hãng có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành \nPhuộc sau RCB MB2 hàng chính hãng RacingBoy. Thời gian bảo hành : 12 tháng. \nPhuộc RCB MB2 cao 330mm gắn được cho Vario, Click hoặc Vision, Lead cần khoét nhựa ngay bình dầu... Phuộc có 3 màu: đỏ, vàng, đen."
            ],
            [
                "name" => "Phuộc RCB VS chính hãng cho Vario, Click (ty vàng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm loxo để thay thế rất tiện lợi. Đặc biệt dòng này thiết kế ty mạ vàng nhìn rất sang và đẹp.\n Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình.\n Phuộc RCB VS cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VS chính hãng cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Vario, Click gắn như zin hoặc Vision, Lead (khoét nhựa chút ngay bình dầu)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm loxo để thay thế rất tiện lợi.\n Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình. Phuộc RCB VS có màu: đỏ, vàng\n Phuộc RCB VS cho Vario, Click cao 330mm, được bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Mâm RCB 10 cây chính hãng cho Raider, Satria", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm RCB 10 cây chính hãng cho Raider, Satria với bản trước 1.6 sau 2.15 lên xe cực chất, dành cho Biker thích phong cách racing, thiết kế nhiều nhánh (10 cây) rất độc đáo, lên xe nhìn khá cứng cáp \n Mâm RCB  chính hãng cho Satria, Raider gắn lên xe như zin không cần chế cháo.\n Mâm RCB 10 cây sho Raider, Satria có 3 Màu: Đen/Vàng/Trắng."
            ],
            [
                "name" => "Pô R8 chính hãng cho Vario, Click 2017", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Pô R8 cho Vario, Click mẫu 2017, tiếng pô nghe rất ấm, phù hợp cho bạn nào đi xe zin hay làm pô xăng lửa bài nhẹ. Pô R8 giả zin có lợi thế ít bị chú ý khi ra đường \r\nPô R8 chính hãng full cổ gắn Vario/Click mẫu cũ mà không cần phải chế gì thêm. Miễn phí công gắn tại shop2banh."
            ],
            [
                "name" => "Dè con chắn bùn sau chính hãng Honda cho AB 2020, Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ dè con chắn bùn sau chính hãng Honda cho AB 2020, Click, Vario các đời, thiết kế khá đẹp, gọn gàng phù hợp với xe hơn loại trước.  \nDè con chắn bùn chính hãng Honda Air Blade 2020 gắn Click Thái, Vario 125/150 có tính năng chắn bùn, nước văng lên chân người ngồi sau. Rất phù hợp khi mùa mưa đang đến. \nBộ dè con chắn bùn sau chính hãng Honda gồm 3 món: dè chắn bùn, bình nước mát và nắp che bình nước mát, gắn vừa khít cho xe Air Blade 2020, Click và Vario."
            ],
            [
                "name" => "Cần số 2 chiều cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số 2 chiều dành cho xe Exciter 135 (2011 - 2015), mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng hay mang giày tây, thể thao..."
            ],
            [
                "name" => "Hộp đựng đồ AB 2020 - 2022, Hộc đựng đồ AB 2020 - 2022", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Hộp đựng đồ xe AB 2020 - 2022mới, sản phẩm rất tiện ích dành cho xe có thể đựng găng tay, chìa khoá, các thứ nhỏ hay móc ra vào. \r\nHộp đựng đồ xe AB 2020 - 2022 làm bằng nhựa cao cấp rất bền, chắc chắn."
            ],
            [
                "name" => "Đùm US chính hãng cho Winner (luôn lòng đĩa CNC)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đùm trước sau US chính hãng cho Winner, hàng chính hãng yên tâm cho các bạn lên căm đùm niềng cực an toàn, với xu hướng mới đơn giản, không còn hot những cặp đùm khá rờm rà thì đùm US chính hãng nổi lên là lựa chọn hàng đầu. \nĐùm US chính hãng cho Winner có luôn lòng đĩa CNC để gắn đĩa thắng vào đùm mà không cần chế cháo thêm."
            ],
            [
                "name" => "Đùm US chính hãng cho Exciter150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Đùm trước sau US chính hãng cho Exciter 150, hàng chính hãng yên tâm cho các bạn lên căm đùm niềng cực an toàn, với xu hướng mới đơn giản, không còn hot những cặp đùm khá rờm rà thì đùm US chính hãng nổi lên là lựa chọn hàng đầu. \nĐùm US chính hãng gắn được cho Exciter150."
            ],
            [
                "name" => "Bộ căm X1R 1.57 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ căm X1R 1.57 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo X1R vô cùng sắc sảo. \nBộ căm X1R 1.57 chính hãng gắn bánh sau xe Exciter150 và các loại xe Wave/Dream thắng đùm."
            ],
            [
                "name" => "Bộ căm X1R 1.84 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ căm X1R 1.84 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo X1R vô cùng sắc sảo. \nBộ căm X1R 1.84 chính hãng gắn bánh trước các dòng xe thắng đĩa: Exciter, Winner, Sonic, Satria, Wave..."
            ],
            [
                "name" => "Bộ căm RCB 1.49 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 070543  \r\nCăm RCB 1.49 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo RCB vô cùng sắc sảo. \r\nBộ căm RCB 1.49 chính hãng gắn bánh sau xe Winner."
            ],
            [
                "name" => "Bộ căm RCB 1.84 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ căm RCB 1.84 chính hãng, căm tròn mạ crom rất sáng, đẹp, trên đầu căm dập logo RCB vô cùng sắc sảo. \nBộ căm RCB 1.84 chính hãng gắn bánh trước các dòng xe thắng đĩa: Exciter, Winner, Sonic, Satria, Wave..."
            ],
            [
                "name" => "Baga inox 10ly màu Titan cho AB 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox 10ly màu titan cho Air Blade 2020 với thiết kế nhuộm màu titan khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy."
            ],
            [
                "name" => "Baga inox 10ly sơn đen tĩnh điện cho AB 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga inox 10ly đen tĩnh điện cho Air Blade 2020 với thiết kế sơn đen khá đẹp mắt, inox 10 dày để chở hàng, chở đồ, gác chân khá chắc chắn, tiện lợi ngoài ra còn giúp bảo về cho dàn áo xe không trầy."
            ],
            [
                "name" => "Bố thắng đĩa Recto chính hãng cho heo Brembo", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bố thắng đĩa Recto chính hãng dành cho các dòng heo 2 pis đối xứng như: Brembo, Frando, RCB...hàng chính hãng rất an toàn, bền, giá thành vô cùng hợp lí khi bố zin theo các loại heo dầu rất khó mua và đắt đỏ. \r\nBố thắng đĩa Recto chính hãng 2 pis sản xuất tại Thái Lan."
            ],
            [
                "name" => "Thảm lót chân Air Blade 2020", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thảm lót chân cho xe Air Blade 2020 mẫu mới khá đẹp, cao su dày chất lượng khá tốt. \r\nThảm lót chân AB 2020 giúp cho xe luôn sạch sẽ, chống trầy sàn và còn có thể trang điểm cho xế yêu của bạn đẹp hơn."
            ],
            [
                "name" => "Phuộc RCB VD chính hãng cho Sirius, Jupiter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Sirius, Jupiter, Taurus...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế.\n Phuộc sau RCB VD bình dầu có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc. Phuộc VD có màu: đỏ, vàng, đen\n Phuộc RCB VD cho Sirius, Jupiter có chiều cao 275mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VD chính hãng cho Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế.\n Phuộc sau RCB VD bình dầu có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc. Phuộc VD có màu: đỏ, vàng, đen\n Phuộc RCB VD cho Wave, Dream có chiều cao 335mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Heo dầu trước RCB S2 chính hãng cho Raider, Satria", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Heo dầu trước RCB S2 chính hãng 1pis mẫu mới nhất dành cho Suzuki Raider, Satria, full bộ có đầy đủ pát gắn như zin mà không cần chế cháo. \r\nHeo dầu thắng đĩa trước RCB S2 chính hãng được thiết kế khá đẹp, giá thành lại cực tốt, vừa là món phụ tùng trang trí vừa có thể thay thế đồ zin rất chuẩn. \r\nHeo dầu trước RCB S2  cho Raider, Satria được bảo hành 6 tháng chính hãng Racingboy."
            ],
            [
                "name" => "Heo dầu trước RCB S2 chính hãng cho Honda Winner, Wave S", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Heo dầu trước RCB S2 1pis mẫu mới nhất dành cho Honda Winner, Wave S, full bộ có đầy đủ pát gắn như zin mà không cần chế cháo. \r\nHeo dầu thắng đĩa trước RCB S2 chính hãng được thiết kế khá đẹp, giá thành lại cực tốt, vừa là món phụ tùng trang trí vừa có thể thay thế đồ zin rất chuẩn. \r\nHeo dầu trước RCB S2 cho Winner, Wave S được bảo hành 6 tháng chính hãng Racingboy."
            ],
            [
                "name" => "Heo dầu trước RCB S2 chính hãng cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Heo dầu trước RCB S2 chính hãng 1pis mẫu mới nhất dành cho Exciter 150, full bộ có đầy đủ pát gắn như zin mà không cần chế cháo. \nHeo dầu thắng đĩa trước RCB S2 chính hãng được thiết kế khá đẹp, giá thành lại cực tốt, vừa là món phụ tùng trang trí vừa có thể thay thế đồ zin rất chuẩn. \nHeo dầu trước RCB S2 cho Exciter 150 được bảo hành 6 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc YSS G-Sport (chính hãng) cho Exciter 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc YSS G-Sport dòng cao cấp cho dòng xe Exciter 150...thiết kế mới nhất với bình dầu rời rất đẹp, YSS dòng G-Sport có tính năng rebound tăng chỉnh nặng nhẹ, nhún rất êm ái khi vận hành. \nPhuộc YSS G-Sport đang là sản phẩm hot với giá thành hợp lí cho phân loại phuộc tăng chỉnh cao cấp. \nPhuộc YSS G-Sport cho Exciter 150 có 2 màu đỏ và vàng được bảo hành chính hãng 6 tháng, Phuộc YSS sản xuất tại Thái Lan."
            ],
            [
                "name" => "Phuộc trước LCM cho Vario, Click ty vàng/titan", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc trước LCM cho Vario mang thiết kế với ngoại hình to lớn đầy cứng cáp, ty phuộc màu vàng hoặc Titan rất nổi bật, khắc phục tiếng kêu cụp cụp từ các dòng xe Vario/Click vốn dĩ rất yếu, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc. \nPhuộc LCM quan trọng nhất là ráp như zin cho Vario/Click không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. \nPhuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."
            ],
            [
                "name" => "Phuộc RCB VD (chính hãng) cho AB, PCX mẫu cũ", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe AB, PCX mẫu cũ, SH Ý (cao hơn zin 1cm)...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế.\n Phuộc sau RCB VD bình dầu dành cho AB có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc. Phuộc VD có màu: đỏ, vàng, đen\n Phuộc RCB VD cho AB, PCX có chiều cao 320mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VS chính hãng cho Wave, Dream, Future, Axelo...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo, Viva...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế rất tiện lợi.\r\n Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình. Phuộc RCB VS có màu: đỏ, vàng, titan.\r\n Phuộc RCB VS cho Wave, Dream, Future có chiều cao 335mm. Bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VS ty vàng chính hãng cho Wave, Dream, Future, Axelo...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VS chính hãng mẫu mới 2020 dành cho xe Wave, Dream, Future, Axelo, Viva...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VS có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.\r\n Phuộc sau RCB VS bình dầu nút tăng chỉnh Rebound ngày chân phuộc phù hợp cho mọi địa hình.\r\n Phuộc RCB VS cho Wave, Dream, Future có chiều cao 335mm. Bảo hành: 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB VD ty vàng chính hãng cho SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB VD chính hãng mẫu mới 2020 dành cho xe SHVN 2012-2020...có bình dầu nằm trên, thiết kế hiện đại đến từ Châu Âu, phuộc RCB VD có thêm 2 loxo để thay thế, đặc biệt phuộc có ty mạ vàng làm tăng tính thẩm mỹ khá cao.\r\n Phuộc sau RCB VD bình dầu dành cho SHVN có 2 nút tăng chỉnh Rebound phù hợp cho mọi địa hình. Có thể tăng chỉnh ở 2 tính năng độ nhún và độ đàn hồi của Phuộc.\r\n Phuộc RCB VD cho SHVN có chiều cao 380mm. Bảo hành : 12 tháng chính hãng RCB."
            ],
            [
                "name" => "Phuộc RCB MB2 chính hãng cho Wave, Dream, Future, Axelo...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB MB2 bình dầu cho Wave, Dream, Future, Axelo...mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Phuộc Racingboy MB2 có chân phuộc làm bằng sắt rất cứng cáp, an toàn hơn khi vận hành \r\nPhuộc sau RCB MB2 hàng chính hãng RACINGBOY. Thời gian bảo hành : 12 tháng. \r\nPhuộc RCB MB2 cao 335mm gắn được cho Wave, Dream, Future, Axelo, Viva... Phuộc có 3 màu: đỏ, vàng, đen."
            ],
            [
                "name" => "Phuộc RCB A2 (chính hãng) cho Sirius, Jupiter, ...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB A2 mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Giá thành hợp lí cho người sử dụng, phuộc Racingboy A2 có 7 nấc tăng chỉnh nặng nhẹ, cứng cáp, an toàn hơn so với phuộc zin  - Ty phuộc 7mm\r\n- Lò xo phuộc 4mm.\r\nPhuộc sau RCB A2 hàng chính hãng RACINGBOY. Thời gian bảo hành : 12 tháng. \r\nPhuộc RCB A2 cao 275mm gắn được cho Sirius, Jupiter... Phuộc có 3 màu: đỏ, vàng đen."
            ],
            [
                "name" => "Phuộc RCB A2 chính hãng cho Wave, Dream, Future", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB A2 mẫu mới với thiết kế kiểu dáng đẹp, trẻ trung, chất lượng cao. Giá thành hợp lí cho người sử dụng, phuộc Racingboy A2 có 7 nấc tăng chỉnh nặng nhẹ, cứng cáp, an toàn hơn so với phuộc zin  - Ty phuộc 7mm\r\n- Lò xo phuộc 4mm.\r\nPhuộc sau RCB A2 hàng chính hãng RACINGBOY. Thời gian bảo hành: 12 tháng. \r\nPhuộc RCB A2 cao 335mm gắn được cho Wave, Dream, Future, Axelo, Viva... Phuộc có 3 màu: đỏ, vàng đen."
            ],
            [
                "name" => "Phuộc trước LCM V1 cho Exciter 150, Exciter 155", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc trước LCM mang thiết kế với ngoại hình đuợc mô phỏng giống như kiểu dáng của Winner 150 to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Exciter 150, Exciter 155, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc, món đồ rất đáng để trang bị cho Exciter 150, Exciter 155. \nPhuộc LCM V1 quan trọng nhất là ráp như zin cho Exciter 150, Exciter 155 không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. Phuộc LCM full bộ gồm: phuộc, dè trước, chảng 3 bằng sắt, pát, bạc đạn... \nPhuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."
            ],
            [
                "name" => "Mâm RCB 5 cây (chính hãng) cho Exciter 150 bản 1.6-1.85", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mâm RCB  5 cây bản siêu nhỏ cho Exciter 150 với bản trước 1.6 sau 1.85 lên xe cực chất, dành cho Biker thích phong cách racing.\n Gắn lên xe như zin không cần chế cháo.\n Mâm RCB 5 cây Exciter 150 bản siêu nhỏ thích hợp anh em đi bánh nhỏ gọn, nhìn xe thanh thoát..\n Hàng chính hãng RCB. Bảo hành 6 tháng.\n Mâm Racingboy 5 cây cho Exciter 150 bản 1.6-1.85 có 2 Màu: Đen/Vàng"
            ],
            [
                "name" => "Phuộc trước LCM cho Vario, Click", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc trước LCM cho Vario mang thiết kế với ngoại hình to lớn đầy cứng cáp, khắc phục tiếng kêu cụp cụp từ các dòng xe Vario/Click vốn dĩ rất yếu, phuộc LCM nhìn bề ngoài tuy rất to chắc nhưng khi vận hành thì độ nhún rất êm, không sàn lắc. \nPhuộc LCM quan trọng nhất là ráp như zin cho Vario/Click không cần chế cháo bất kì chi tiết nào dù là nhỏ nhất. \nPhuộc LCM sản xuất tại Taiwan, bảo hành 12 tháng."
            ],
            [
                "name" => "Dĩa tải Akei 38T chính hãng cho Exciter 135", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dĩa tải Akei 38T dành cho Exciter 135 mẫu mới được nhiều anh em Biker ưa chuộng. Chất liệu cực bền, cứng cáp, thích hợp đi sên to. \r\nDĩa Akei 38T là thông số zin theo xe EXciter 135 từ đời 2011, hàng chính hãng sản xuất tại Thái Lan."
            ],
            [
                "name" => "Bộ vệ sinh lọc gió K&N (chính hãng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bộ vệ sinh lọc gió K&N gồm 2 chai: 1 chai tẩy rửa và 1 chai phun xịt dầu phục hồi tấm lọc gió, có thể dùng cho tất cả các loại lọc gió lưới vĩnh viễn như: K&N, BMC, DNA.. giúp tẩy rửa lọc gió bẩn và phục hồi lại tính năng lọc gió như ban đầu. \nBộ vệ sinh lọc gió K&N là hàng chính hãng của K&N made in USA."
            ],
            [
                "name" => "Lọc gió K&N (chính hãng) cho SH Ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió K&N chính hãng dành cho SH Ý vừa lọc tốt, vừa tăng lưu lượng gió nạp, giúp động cơ tăng tốc rất hiệu quả, giúp máy vận hành nhẹ nhàng rõ rệt, bởi nó luôn đảm bảo tỷ lệ gió/ xăng ổn định, nhất là khi tăng tốc và chạy đường trường. Lọc gió K&N là loại lọc vĩnh cữu, có thể dễ dàng vệ sinh sử dụng lại \nLọc gió K&N là hàng chính hãng K&N USA. \nLọc gió K&N dùng cho SH Ý gắn như zin không chế cháo."
            ],
            [
                "name" => "Lọc gió lưới thép độ dành cho SHVN", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép độ dành riêng cho SHVN, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \nLọc gió lưới thép độ cho SHVNi rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Phuộc RCB M2 cho Winner, Sonic (chính hãng)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phuộc RCB M2 cho Winner, Sonic, dòng phuộc giá khá hot dành cho biker, thiết kế kế đơn giản nhưng đẹp mắt, gắn vào nhìn rất cứng cáp, đầm hơn nhiều so với phuộc zin, có thể tăng chỉnh loxo phù hợp với việc chở nặng \nPhuộc RCB M2 cao 225mm \n- Ty phuộc 10mm\n- Lò xo phuộc 10mm\n. Phuộc RCB M2 cho Winner, Sonic hàng chính hãng RCB được bảo hành 1 năm."
            ],
            [
                "name" => "Lọc gió lưới thép độ dành cho Satria, Raider Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép độ dành riêng cho Satria, Raider Fi , với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \nLọc gió lưới thép độ rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Lọc gió lưới thép độ dành cho SH300i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép độ dành riêng cho SH300i, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \nLọc gió lưới thép độ cho SH300i rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Lọc gió BMC (chính hãng) cho SH300i", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió BMC (chính hãng) dành cho Honda SH300i, đây là lọc gió vĩnh viễn khi bám bẩn có thể vệ sinh rồi sử dụng lại, giúp  lấy gió tốt hơn, tăng mã lực so với lọc zin, lọc sạch 99% bụi bẩn khi gió hút vào pô air. \n Lọc gió BMC dành cho Honda SH300i được sản xuất tại Italy."
            ],
            [
                "name" => "Cần số 2 chiều cho Honda Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cần số 2 chiều dành cho xe Honda Winner X, mẫu mã đẹp, dễ sử dụng, đập số nhanh hơn, hạn chế tối đa việc móc số gây hư giày. Phù hợp với khách hàng là nhân viên văn phòng."
            ],
            [
                "name" => "Lọc gió Uma (chính hãng) dành cho Vario, Click, Air Blade 125...", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió Uma chính hãng dành cho Vario, Click, AB125...phụ tùng thay thế chuẩn cho lọc gió zin nguyên bản. Lọc gió Uma dạng mút giúp lọc gió sạch hơn dạng lọc giấy của Zin, thời gian sử dụng lâu hơn và có thể thổi bụi vệ sinh lại, khuyến cáo thay thế khi đi thời gian lâu quá dơ, không nên rửa, giặt. \nLọc gió Uma là hàng chính hãng Uma Racing gắn vừa khít AB125, Vario, Click..."
            ],
            [
                "name" => "Lọc gió lưới thép độ dành cho SH150 Ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép độ dành riêng cho SH150i Ý, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \nLọc gió lưới thép độ rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Sên vàng SSS 428HS (chính hãng) 10ly 130L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Sên vàng SSS 428HS (chính hãng) 10ly được sản xuất tại Malaysia theo công nghệ Nhật Bản, thiết kế sên màu vàng rất độc đáo, độ bền và êm ái của thương hiệu SSS thì đã được nhiều người tin dùng. \r\nSên vàng SSS 428HS có độ dài 130 mắc, có thể gắn được nhiều loại xe số từ 150cc trở xuống."
            ],
            [
                "name" => "Lọc gió lưới thép độ dành cho Winner, Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lọc gió lưới thép độ dành riêng cho Winner, Winner X, với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe. \nLọc gió lưới thép độ rất thích hợp để thay thế lọc gió zin với lợi thế là tái vệ sinh sử dụng trọn đời với giá thành rất hợp lí, nạp lượng gió mạnh làm tăng hiệu suất động cơ, sử dụng bền bỉ."
            ],
            [
                "name" => "Baga 10ly màu Titan cho Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga 10 ly màu Titan xanh cho Winner x cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trày xe, đồng thời màu xanh titan giúp xe cứng cáp và tính thẩm mỹ cao. \nBaga 10 ly màu titan gắn vừa khít cho Winner X."
            ],
            [
                "name" => "Baga 10ly tĩnh điện cho Winner X", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Baga 10 ly tĩnh điện đen cho Winner x cực chất, độ dày được đảm bảo khá chắc chắn, có thể treo móc đồ thoải mái đồng thời chở hàng cho đỡ trày xe, màu đen tĩnh điện giúp xe cứng cáp và tính thẩm mỹ cao. \nBaga 10 ly tĩnh điện gắn vừa khít cho Winner X."
            ]

        ]);
        Category::where('name', 'nhớt')->first()->products()->createMany([

            [
                "name" => "Nhớt Motul H-Tech 100 4T 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul H-Tech 100 4T 10W40 nhớt xe số chất lượng cao, bôi trơn động cơ xe hiệu quả giúp động cơ xe vận hành êm ái và bảo vệ động cơ tốt nhất, bền bỉ nhất theo thời gian. Nhớt được nhiều tập đoàn xe máy uy tín như Honda, Yamaha, ... khuyên dùng"
            ],
            [
                "name" => "Nhớt Motul 300V Factory Line 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul 300V Factory Line 10W40 1L nhớt chất lượng cao dành cho xe mô tô phân khối lớn như: Exciter 150, Winner 150, Ex135, MSX 125, Raider 150, Fz150i, TFX 150, kawasaki z1000, Ducati, Cbr150, Cb1100...  \r\nNhớt Motul 300V 10W40 1L tối ưu hóa công suất động cơ và bảo vệ động cơ một cách hoàn hảo"
            ],
            [
                "name" => "Nhớt Fuchs Silkolene Scoot Sport 4 5W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Fuchs Sillkolene Scoot Sport 4 5W40 với công nghệ tổng hợp đã được chứng minh cung cấp khả năng đặc biệt chống mài mòn và hiệu năng chống ma sát dưới tất cả các điều kiện khắc nghiệt của nhiệt độ. \r\nNhớt Fuchs Sillkolene Scoot Sport 4 5W40 có đặc tính êm, mát máy phù hợp với các loại xe tay ga hiện nay như: AB, Click, Vario, Sh, Vision, Grande, NVX, Hayate... \r\nNhớt Fuchs Silkolene Scoot Sport 4 5W40 sản xuất tại Anh."
            ],
            [
                "name" => "Nhớt Repsol Smarter Scooter 4T 5W-40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Repsol Smarter Scooter 4T 5W-40 0,8 lít, sản phẩm nhớt cho xe tay ga lý tưởng của tập đoàn nhớt Repsol.  \r\nNhớt Repsol Smarter Scooter 4T Bảo vệ động cơ vượt trội, ổn định về độ nhớt, chống sự mài mòn trong điều kiện động cơ hoạt động trong quãng đường dài và liên tục."
            ],
            [
                "name" => "Nhớt Liqui Moly Molygen 5W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Moly Molygen 5W30 chính hãng chất lượng cao dành cho xe tay ga cao cấp. Bảo vệ động cơ trong điều kiện vận hành cao, tiết kiệm nhiên liệu, vận hành êm ái, kéo dài thời gian thay nhớt tốt nhất."
            ],
            [
                "name" => "Nhớt Liqui Moly Molygen 5W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Moly Molygen 5W40 chính hãng chất lượng cao  dành cho xe oto cao cấp có thể thay cho các dòng tay ga cao cấp. Bảo vệ động cơ trong điều kiện vận hành cao, tiết kiệm nhiên liệu, vận hành êm ái, kéo dài thời gian thay nhớt tốt nhất. \r\nLiqui Moly Molygen 5w40 là nhớt tổng hợp cao cấp với cấp nhớt API SP tốt nhất hiện nay"
            ],
            [
                "name" => "Nhớt Motul Scooter Power LE 5W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul Scooter Power LE 5W40 0.8L nhớt xe tay ga đời mới của tập đoàn nhớt Motul. Nhớt kiểm soát tốt cặn trong piston, chống mài mòn, chống ăn mòn cực kỳ hiệu quả với khả năng tẩy rửa tuyệt hảo giúp động cơ luôn được giữ sạch"
            ],
            [
                "name" => "Nhớt Amsoil 10W40 Performance 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Nhớt Amsoil 10W40 Performance chuyên dụng dành cho xe máy, kể cả xe moto, PKL  \r\n- Nhớt tổng hợp 100% Synthese  \r\n- API SG, JASO MA / MA2   \r\n- Độ nhớt SAE: 10W40  \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Nhớt Liqui Moly 4T Synth 10W40 Street Race", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dầu nhớt động cơ Liqui Moly 4T Synth 10W40 Street Race đạt hiệu suất cao đươc tổng hợp hoàn toàn. Đảm bảo hiệu suất tối đa và bảo vệ động cơ trong mọi điều kiện hoạt động. Bôi trơn tối ưu,làm sạch động cơ, ma sát tuyệt vời. Tạo ra sự khác biệt lớn khi lái xe. Thử nghiệm trên động cơ với bộ chuyển đổi xúc tác. \r\nNhớt Liqui Moly 4T Synth 10W40 Street Race có những tính năng như: Độ sạch động cơ vượt trội, đảm bảo tiêu thụ dầu thấp, bảo vệ chống mài mòn cao, tăng hiệu quả bôi trơn. \r\nNhớt Liqui Moly 4T Synth 10W40 Street Race dùng được cho tất cả loại xe PKL và xe số."
            ],
            [
                "name" => "Nhớt Liqui Moly Scooter Race 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Liqui Moly Scooter Race 10W40 là sản phẩm nhớt cao cấp nhất của Liqui chuyên dụng dành cho các dòng xe tay ga hiện đại mới nhất hiện nay. \r\nNhớt Liqui Moly Scooter Race 10W40 thích hơp với các dòng xe tay ga đời mới hiện nay tại Việt Nam như: Lead, Vision, SH, AB, NVX... \r\nThời gian thay nhớt Liqui Moly Scooter Race 10W40 sẽ từ 2500-3000km \r\nThông số kĩ thuật: \r\n- Nhớt tổng hợp hoàn toàn cho xe tay ga. Độ nhớt SAE 10W40 - API SN - Jaso MA2 \r\n- Dung tích nhớt: 1 lít"
            ],
            [
                "name" => "Nhớt Motul 7100 10W50 4T 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Nhớt Motul 7100 10W50 4T 1L phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam. \r\n- Nhớt tổng hợp 100% Synthese \r\n- API SN ; JASO MA2 \r\n- Độ nhớt 10W50"
            ],
            [
                "name" => "Shell Advance Ultra 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance Ultra 10W40 1L nhớt cao cấp dành cho xe côn tay và xe mô tô 4 thì đời mới hiện nay như Exciter 150, msx 125, raider 150, fz 150i,...Bảo vệ tối ưu và khả năng vận hành đáng tin cậy, tăng độ ổn định trượt cao giúp giảm rung động và giảm tiếng ồn"
            ],
            [
                "name" => "Nhớt Wolver Racing Synthetic 10W40 1lit", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Wolver Racing Synthetic 10W40 là loại dầu nhớt bôi trơn tổng hợp đặc biệt dành riêng cho động cơ xe máy 4 thì được nhập khẩu chính hãng từ Đức. Wolver Racing được biết đến là dòng nhớt được ứng dụng đặc biệt cho các loại xe máy phân khối lớn, bên cạnh đó còn có thể dùng tốt cho tất cả các loại xe máy có bộ ly hợp khô và ướt (xe số và xe tay ga)."
            ],
            [
                "name" => "Nhớt Repsol Racing 10W40 1lit", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Repsol Racing 10W40 là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nRepsol Racing 10w40 khả năng thích nghi cao, độc đáo, phù hợp với hầu hết các loại xe và các loại động cơ 4 thì. Nhớt giúp giảm nhiệt tốt, cải thiện tốt sức mạnh và độ bền của động cơ. Loại nhớt này mang lại khả năng kiểm soát tốt hơn với sự sang số êm hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động."
            ],
            [
                "name" => "Nhớt Liqui Moly 4T Synth 5W40 Motorbike", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Moly 4T Synth 5W40 Motorbike là nhớt cao cấp với chất lượng tuyệt hảo dành cho các dòng xe số, đặc biệt là các dòng xe côn tay, xe mô tô và xe phân khối lớn hiện đại"
            ],
            [
                "name" => "Nhớt Fuchs Silkolene Pro 4 10W40 XP", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Fuchs Silkolene Pro 4 10W40 XP luôn tối ưu hóa công nghệ tổng hợp ester, có nguồn gốc từ công nghệ bôi trơn hàng không vũ trụ, để đem đến tính chất chống mài mòn xuất sắc trong một phạm vi nhiệt độ hoạt động trải dài từ thời tiết nóng tới lạnh. Khả năng hoạt động bảo vệ bề mặt tiên tiến cung cấp sự bảo vệ cần thiết cho piston, lòng piston, trục cam và các vòng bi bạc đạn, ngay cả trong giai đoạn bắt đầu khởi động máy cho đến khi dòng chảy nhớt được ổn định. \r\nNhớt Fuchs Silkolene có đặc tính chạy êm mát máy, phù hợp với tất cả các loại xe số và xe tay côn hiện nay như: Wave, Sirius, Winner, Exciter, Raider, Sonic, Satria... \r\nNhớt Fuchs Silkolene Pro 4 10W40 XP sản xuất tại Anh."
            ],
            [
                "name" => "Nhớt chiết lẻ Repsol Smarter Synthetic 4T 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Repsol Smarter Synthetic 4T 10W40 (100ml) là sản phẩm dầu nhớt chính hãng của tập đoàn dầu nhớt Repsol danh tiếng trên toàn thế giới dành cho các thế hệ xe số 4 thì tiên tiến hiện nay. \r\nNhớt Repsol Smarter Synthetic 4T 10W40 giúp bảo vệ động cơ chống mài mòn, ma sát, kéo dài tuổi thọ động cơ, cải thiện khả năng tiết kiệm nhiên liệu xăng tối ưu. \r\nNhớt chiết lẻ Repsol Racing 10W40 (100ml) dành cho các dòng xe dung tích nhớt trên 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt Ipone Stroke 4 Racing 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE Stroke 4 Racing 10W40 là nhớt động cơ gốc Ester tổng hợp 100% được phát triển với sự hợp tác của các đội kỹ thuật của Red Bull MotoGP, dành cho các cuộc đua xe mô tô 4 thì, đường đua và địa hình có yêu cầu rất cao trong thi đấu. Dòng nhớt cao cấp nhất của thương hiệu ipone Giảm 15% ma sát, tăng 3% mô men xoắn và  tăng 2% hiệu suất động cơ. \r\nNhớt IPONE Stroke 4 Racing 10W40 chuyên dùng trong các giải đua xe PKL và dành cho các Biker thích vận hành  tốc độ cao, nhớt xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone Katana Full Power 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE Katana Full Power 10W40 là nhớt tổng hợp 100% với công nghệ Ester, được thiết kế giúp tối ưu cho trải nghiệm lái xe và hệ phụ gia tiên tiến giúp mang đến tính năng “Dễ sang số và bứt tốc nhanh” độc quyền. Tính năng này giúp bạn có cảm giác tuyệt vời tăng tốc nhanh, khám phá nhiều hơn niềm vui khi lái xe. \r\nNhớt IPONE Katana Full Power 10W40 thích hợp cho các dòng xe thể thao, PKL... xuất xứ từ Pháp"
            ],
            [
                "name" => "Nhớt Ipone Katana Full Power 10W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE Katana Full Power 10W30 là nhớt tổng hợp 100% với công nghệ Ester, được thiết kế giúp tối ưu cho trải nghiệm lái xe và hệ phụ gia tiên tiến giúp mang đến tính năng “Dễ sang số và bứt tốc nhanh” độc quyền. Tính năng này giúp bạn có cảm giác tuyệt vời tăng tốc nhanh, khám phá nhiều hơn niềm vui khi lái xe. \r\nNhớt IPONE Katana Full Power 10W30 xuất xứ từ Pháp"
            ],
            [
                "name" => "Nhớt Ipone Katana Scoot 5W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE Katana Scoot 5W40 là nhớt  động cơ tổng hợp 100% dành cho xe tay ga. Dầu có độ ma sát thấp với độ ổn định trượt ca giúp giảm lượng tiêu thụ nhiên liệu hiệu quả và đảm bảo hiệu suất của động cơ. Tính năng này còn giúp xe tăng tốc mượt mà và nhanh, giảm độ trễ, rung lắc khi thốc ga. Sự kết hợp đặc biệt giữa dầu gốc và phụ gia cao cấp giúp ngăn ngừa sự hình thành cặn bẩn và bảo vệ chống mài mòn tối ưu.\r\nNhớt IPONE Katana Scoot 5W40 có xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone Katana Scoot 0W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE Katana Scoot 0W30 là nhớt  động cơ tổng hợp 100% dành cho xe tay ga. Dầu có độ ma sát thấp với độ ổn định trượt ca giúp giảm lượng tiêu thụ nhiên liệu hiệu quả và đảm bảo hiệu suất của động cơ. Tính năng này còn giúp xe tăng tốc mượt mà và nhanh, giảm độ trễ, rung lắc khi thốc ga. Sự kết hợp đặc biệt giữa dầu gốc và phụ gia cao cấp giúp ngăn ngừa sự hình thành cặn bẩn và bảo vệ chống mài mòn tối ưu. \r\nNhớt IPONE Katana Scoot 0W30 có xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone Scoot 4 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE Scoot 4 10W40 là nhớt bán tổng hợp được tối ưu cho các dòng xe tay ga thông dụng, có tính năng tiết kiệm nhiên liệu, thành phần nhớt  có độ ma sát thấp giúp giảm lượng tiêu thụ nhiên liệu hiệu quả và đảm bảo hiệu suất của động cơ. Tính năng này còn giúp bảo vệ động cơ tuyệt vời khi xe thường xuyên “chạy-dừng” trong đô thị. \nNhớt IPONE Scoot  4 10W40 1L thích hợp cho các loại xe tay ga, sản phẩm xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone R4000RS 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE R4000 RS 10W40 được sản xuất từ Dầu gốc Tổng hợp với Ester và hệ phụ gia tiên tiến với tính năng bảo vệ động cơ cực cao. Sản phẩm đảm bảo tính năng bôi trơn hiệu quả, hộp số và bộ ly hợp, giữ động cơ tránh quá nhiệt, tăng tuổi thọ nhớt và động cơ cục tốt. \r\nNhớt IPONE R4000RS 10W40 thích hợp cho các loại xe số, côn tay, xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Ipone 10.4 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt IPONE 10.4 10W40 được sản xuất từ Dầu gốc Bán tổng hợp với hệ phụ gia cao cấp, thích hợp cho các điều kiện hoạt động trong đô thị. Sản phẩm đảm bảo tính năng bôi trơn hiệu quả, cung cấp tính năng bảo vệ cho động cơ, hộp số và bộ ly hợp, giữ động cơ tránh quá nhiệt, tăng tuổi thọ nhớt và động cơ cục tốt. \r\nNhớt IPONE 10.4 10W40 thích hợp cho các loại xe số, côn tay, xuất xứ từ Pháp."
            ],
            [
                "name" => "Nhớt Repsol Smarter Scooter 4T 5W-40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Repsol Smarter Scooter 4T 5W-40 1L sản phẩm nhớt cho xe tay ga lý tưởng của tập đoàn nhớt Repsol.  \r\nBảo vệ động cơ vượt trội, ổn định về độ nhớt, chống sự mài mòn trong điều kiện động cơ hoạt động trong quãng đường dài và liên tục."
            ],
            [
                "name" => "Nhớt Repsol Smarter Synthetic 4T 10W-40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Repsol Smarter Synthetic 4T 10W-40 1L là sản phẩm dầu nhớt chính hãng của tập đoàn dầu nhớt Repsol danh tiếng trên toàn thế giới dành cho các thế hệ xe số 4 thì tiên tiến hiện nay.   \r\nBảo vệ động cơ chống mài mòn, ma sát, kéo dài tuổi thọ động cơ, cải thiện khả năng tiết kiệm nhiên liệu xăng tối ưu."
            ],
            [
                "name" => "Dịch vụ vệ sinh nhông sên dĩa", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dịch vụ vệ sinh nhông sên dĩa là việc bảo dưỡng định kỳ giúp làm sạch những bụi bẩn, tạp chất bám trên nhông sên dĩa xe máy khi vận hành trong thời gian dài \r\nDịch vụ vệ sinh nhông sên dĩa bằng dung dịch Goracing giúp xe số, xe côn tay vận hành êm ái, mượt mà gia tăng được tuổi thọ NSD của xe. \r\nDịch vụ Vệ sinh nhông sên dĩa bằng dung dịch Goracing cho các loại xe máy số, xe côn tay Honda, Yamaha, Suzuki: Exciter 150, Exciter 155, Winner 150, Winner X, Sonic 150, Satria, Raider 150, Wave, Futute, Sirius, Jupiter...."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Scooter 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance Xe công nghệ Scooter 10W40 0,8L là dầu nhớt cao cấp công nghệ tổng hợp cho động cơ xe tay ga của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe ga 10W40 0,8L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Scooter 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance Xe công nghệ Scooter 10W40 1L là dầu nhớt cao cấp công nghệ tổng hợp cho động cơ xe tay ga của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe ga 10W40 1L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Motorcycle 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance Xe công nghệ Motorcycle 10W40 1L là loại nhớt xe máy chuyên dụng cho xe số 4 thì của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe số 10W40 1L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Shell Advance Xe công nghệ Motorcycle 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance Xe công nghệ Motorcycle 10W40 0.8L là loại nhớt xe máy chuyên dụng cho xe số 4 thì của tập đoàn nhớt Shell dành riêng cho tài xế xe công nghệ.  \r\nShell Advance Techbike Xe số 10W40 0.8L ứng dụng công thức đặc biệt pha chế từ dầu gốc có đặc tính ma sát thấp giúp nâng cao khả năng tiết kiệm nhiên liệu và chống mài mòn vượt trội."
            ],
            [
                "name" => "Chai dưỡng bóng dàn áo GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chai dưỡng bóng dàn áo GoRacing (GoRacing Quick Spray Wax) là dung dịch tạo 1 lớp film mỏng, trong suốt bao phủ lên bề mặt sơn làm tăng độ sáng bóng, bảo vệ bề mặt sơn khỏi ánh nắng trực tiếp, đồng thời tạo hiệu ứng lá sen để chống bám nước, bụi bẩn.  \r\nChai xịt bóng dàn áo xe máy GoRacing là sản phẩm chính hãng của thương hiệu GoRacing đang rất được ưa chuộng tại Việt Nam. \r\nChai dưỡng bóng dàn áo GoRacing có 3 tính năng nổi bật: SÁNG BÓNG - BẢO VỆ MÀU SƠN - CHỐNG THẤM NƯỚC BẨN. \r\nHướng dẫn sử dụng chai dưỡng bóng dàn áo GoRacing: \r\n1/ Làm sạch, khô bề mặt dàn áo màu bóng. \r\n2/ Lắc đều chai – xịt đều lên bề mặt sơn. \r\n3/ Lau khô, đều tay bằng khăn sạch, mềm. \r\nLưu ý sử dụng: \r\n- Chỉ sử dụng trên bề mặt sơn bóng, không xịt lên nhựa đen, gỗ, thuỷ tinh. \r\n- Không xịt lên bề mặt sơn dưới ánh nắng trực tiếp. \r\n- Không được xịt vào mắt miệng. \r\n- Tránh xa tầm tay trẻ em. \r\n- Sản phẩm có chứa chất tạo áp suất nên không được đâm thủng hay làm hay đốt cháy, không để dưới nắng trực tiếp và khu vực có nhiệt độ trên 50 độ C."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Scooter Race 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Liqui Moly Scooter Race 10W40 là sản phẩm nhớt cao cấp nhất của Liqui chuyên dụng dành cho các dòng xe tay ga hiện đại mới nhất hiện nay. \nNhớt Liqui Moly Scooter Race 10W40 thích hơp với các dòng xe tay ga đời mới hiện nay tại Việt Nam như: Lead, Vision, SH, AB, NVX... \nThời gian thay nhớt Liqui Moly Scooter Race 10W40 sẽ từ 2500-3000km \nThông số kĩ thuật: \n- Nhớt tổng hợp hoàn toàn cho xe tay ga. Độ nhớt SAE 10W40 - API SN - Jaso MA2 \n- Dung tích nhớt: 100ml dùng mua thêm cho các dòng xe tay ga máy lớn như: SH300i, Forza, Vespa..."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Molygen 5W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Liqui Moly Molygen 5W40 chính hãng chất lượng cao  dành cho xe oto cao cấp có thể thay cho các dòng tay ga cao cấp. Bảo vệ động cơ trong điều kiện vận hành cao, tiết kiệm nhiên liệu, vận hành êm ái, kéo dài thời gian thay nhớt tốt nhất. \r\nNhớt Liqui Moly Molygen 5w40 là nhớt tổng hợp cao cấp với cấp nhớt API SP tốt nhất hiện nay. \r\nNhớt Liqui Moly Molygen 5W40 100ml dùng để mua thêm thay vào các dòng xe tay ga máy lớn như: SH300i, Vespa..."
            ],
            [
                "name" => "Thay chén cổ Honda Sonic 150", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thay chén cổ Sonic 150 giúp khắc phục tình trạng đầu tay lái phát ra tiếng kêu lụp cụp khi di chuyển trên các đoạn đường gồ ghề, tay lái điều khiển cứng, nặng, khó xoay hoặc đầu xe bị rung lắc mạnh khi chạy với tốc độ cao. \r\nDịch vụ Thay chén cổ xe máy Honda Sonic 150 chuyên nghiệp."
            ],
            [
                "name" => "Thay chén cổ xe máy Yamaha", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thay chén cổ xe máy Yamaha giúp khắc phục tình trạng đầu tay lái phát ra tiếng kêu lụp cụp khi di chuyển trên các đoạn đường gồ ghề, tay lái điều khiển cứng, nặng, khó xoay hoặc đầu xe bị rung lắc mạnh khi chạy với tốc độ cao. \r\nDịch vụ Thay chén cổ xe máy Yamaha Exciter 150, Exciter 135, R15, NVX, Sirius, Jupiter, Grande, Janus, Freego, Nouvo, Luvias..."
            ],
            [
                "name" => "Thay chén cổ xe máy Honda", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Thay chén cổ xe máy Honda giúp khắc phục tình trạng đầu tay lái phát ra tiếng kêu lụp cụp khi di chuyển trên các đoạn đường gồ ghề, tay lái điều khiển cứng, nặng, khó xoay hoặc đầu xe bị rung lắc mạnh khi chạy với tốc độ cao. \r\nDịch vụ Thay chén cổ xe máy Honda Winner 150, Winner X, Air Blade, Vision, Lead, SH, SH Mode, PCX, Vario, Click Thái, Wave Alpha/ RSX 110, Future, Dream, Dylan, PS.."
            ],
            [
                "name" => "Vệ sinh kim phun xăng điện tử Fi", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vệ sinh kim phun xăng điện tử Fi là việc bảo dưỡng định kỳ giúp làm sạch những bụi bẩn, tạp chất được hình thành, làm bẩn hệ thống phun xăng điện tử FI xe máy trong thời gian dài. \r\nVệ sinh kim phun xăng Fi giúp xe máy tăng tốc mượt mà, tiết kiệm được nhiên liệu, gia tăng được tuổi thọ của động cơ. \r\nDịch vụ Vệ sinh kim phun xăng điện tử Fi cho các loại xe máy Honda, Yamaha: Exciter 150, Winner 150, Winner X, Air Blade, Vario, Click, SH, SH Mode, Vision, Lead, PCX, NVX, Janus,...."
            ],
            [
                "name" => "Khắc phục lỗi vô nước đồng hồ Vario", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lỗi đồng hồ Vario bị nước vào mà nguyên nhân thường do đi trời mưa, rửa xe.  \r\nViệc khắc phục lỗi vô nước đồng hồ Vario giúp ngăn ngừa nguy cơ nước vào đồng hồ Vario 125/150 làm hư hỏng mạch điện tử bên trong,"
            ],
            [
                "name" => "Gói bảo dưỡng xe máy số, xe côn tay", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bảo dưỡng xe số, xe côn tay định kỳ giúp tăng độ bền, loại bỏ sớm nguy cơ gây hỏng hóc nghiêm trọng. \r\nBảo dưỡng xe máy số, xe côn tay giúp phát hiện và sửa chữa kịp thời những hư hỏng của xe, để xe máy luôn bền bỉ và tiết kiệm được nhiều chi phí sửa chữa. \r\nDịch vụ bảo dưỡng xe số, xe côn tay Winner 150, Winner X, Exciter 135, Exciter 150, Sonic, Wave Alpha, Wave RSX, Future, Dream, Sirius, Jupiter..."
            ],
            [
                "name" => "Gói bảo dưỡng xe tay ga", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Bảo dưỡng xe tay ga định kỳ giúp tăng độ bền, loại bỏ sớm nguy cơ gây hỏng hóc nghiêm trọng. \r\nCombo Bảo dưỡng xe ga giúp phát hiện và sửa chữa kịp thời những hư hỏng của xe, để xe luôn bền bỉ và tiết kiệm được nhiều chi phí sửa chữa. \r\nDịch vụ bảo dưỡng xe tay ga Air Blade, Vario, Click, Vision, Lead, SHVN, SH Ý, SH Mode, PCX, NVX, Janus..."
            ],
            [
                "name" => "Vệ sinh nồi xe tay ga", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vệ sinh nồi xe tay ga là việc bảo dưỡng cơ bản giúp làm sạch những bụi bẩn được hình thành từ quá trình vận hành xe ga trong thời gian dài.  \r\nVệ sinh nồi xe ga giúp khắc phục một số lỗi do bộ nồi dơ như: Xe đi không êm, không bốc, ì máy, hao xăng, rung đầu khi lên ga ...  \r\nVệ sinh nồi tay ga sẽ làm sạch và kiểm tra được những chi tiết hư hỏng để hạn những tổn thất chi phí về về sau.\r\nVệ sinh nồi xe tay ga Air Blade, SH, SH Mode, Vision, PCX, NVX, Janus, Nouvo, Janus, Luvias..."
            ],
            [
                "name" => "Nhớt Repsol MXR Platium 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Repsol MXR Platium 10W40 - sản phẩm dành riêng cho các dòng xe số ở thị trường Châu Á, là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nNhớt Repsol MXR Platium 10W40 có độ nhớt với chỉ số 160, chỉ số khá cao, gần như ngang ngửa với các dòng cao cấp như Repsol Racing."
            ],
            [
                "name" => "Nhớt Repsol MXR Platium 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Repsol MXR Platium 10W40 - sản phẩm dành riêng cho các dòng xe số ở thị trường Châu Á, là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nNhớt Repsol MXR Platium 10W40 có độ nhớt với chỉ số 160, chỉ số khá cao, gần như ngang ngửa với các dòng cao cấp như Repsol Racing."
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Premium Scooter 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Gulf Western Oil SYN-M 4T Premium Scooter là loại dầu tổng hợp được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ xe tay ga 4 thì hiện đại, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu xe tay ga 4T thông thường khác. \nNhớt Gulf Western SYN-M 4T Premium Scooter 10W40 có thể sử dụng được cho tất cả loại xe tay ga hiện đại như: SH, AB, Vario, Click, Lead, ADV, PCX, NVX, Vespa ..., được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Premium 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Gulf Western Oil SYN-M 4T Premium là loại dầu tổng hợp được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ 4 thì hiện đại, đặc biệt là những động cơ dùng để đua, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu 4T thông thường khác. \r\nNhớt Gulf Western Oil SYN-M 4T Premium 10W40 có thể sử dụng được cho tất cả loại xe số, côn tay thể thao như: Exciter, Winner, Sonic, Satria, R15, Wave/Dream, Future..., được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Premium 10W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Gulf Western Oil SYN-M 4T Premium là loại dầu tổng hợp được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ 4 thì hiện đại, đặc biệt là những động cơ dùng để đua, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu 4T thông thường khác. \nNhớt Gulf Western Oil SYN-M 4T Premium 10W40 có thể sử dụng được cho tất cả loại xe số, côn tay thể thao như: Exciter, Winner, Sonic, Satria, R15, Wave/Dream, Future..., được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Nước làm mát GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nước làm mát GoRacing với nguồn nguyên liệu nhập khẩu từ Châu Âu, cùng với công nghệ giảm tối đa ăn mòn động cơ (OAT) Carboxylate, giúp động cơ hoạt động ổn định hơn, duy trì dung dịch tốt hơn, cho phép thời gian sử dụng dài hơn mà không bị đóng cặn so với nước làm mát thông thường. Tính năng đặc biệt nhất của nước làm mát GoRacing là giải nhiệt cực nhanh, được nghiên cứu sử dụng ở điều kiện khí hậu nóng như Việt Nam \r\nNước làm mát GoRacing là dung dịch đã pha sẵn, có thể sử dụng liền mà không phải pha thêm bất kì dung dịch khác. \r\nNước làm mát GoRacing với 3 tính năng vượt trội: độ sôi cao - giải nhiệt nhanh - chống đóng cặn. Thương hiệu GoRacing đã có uy tín trong các sản phẩm chăm sóc xe máy."
            ],
            [
                "name" => "Nhớt chiết lẻ Fuchs Silkolene Pro 4 10W40 XP (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 320012  \r\nNhớt chiết lẻ Fuchs Silkolene Pro 4 10W40 XP luôn tối ưu hóa công nghệ tổng hợp ester, có nguồn gốc từ công nghệ bôi trơn hàng không vũ trụ, để đem đến tính chất chống mài mòn xuất sắc trong một phạm vi nhiệt độ hoạt động trải dài từ thời tiết nóng tới lạnh. Khả năng hoạt động bảo vệ bề mặt tiên tiến cung cấp sự bảo vệ cần thiết cho piston, lòng piston, trục cam và các vòng bi bạc đạn, ngay cả trong giai đoạn bắt đầu khởi động máy cho đến khi dòng chảy nhớt được ổn định. \r\nNhớt Fuchs Silkolene có đặc tính chạy êm mát máy, phù hợp với tất cả các loại xe số và xe tay côn hiện nay như: Wave, Sirius, Winner, Exciter, Raider, Sonic, Satria... \r\nNhớt Fuchs Silkolene Pro 4 10W40 XP sản xuất tại Anh. Dung tích 100ml dành cho xe có dung tích nhớt hơn 1 lít."
            ],
            [
                "name" => "Chai xịt làm sạch dàn nhựa nhám, vỏ lốp xe GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chai xịt làm sạch dàn nhựa nhám, vỏ lốp xe GoRacing giúp duy trì, bảo dưỡng độ bóng, tẩy rửa làm sạch mốc trắng, phục hồi lại màu sắc ban đầu của các chi tiết dàn nhựa, vỏ xe một cách tuyệt vời. Xế iu của các bạn lúc nào cũng sạch bóng như zin, lại hạn chế bám bụi cực tốt. \r\nƯu điểm của chai xịt làm sạch dàn nhựa nhám, vỏ xe GoRacing: \r\n+ Giúp tẩy sạch chất bẩn, tăng độ bóng, tái tạo độ sáng tự nhiên ban đầu, bảo vệ bề mặt nhựa, da và sao su. \r\n+ Sử dụng dung dịch tạo lớp phủ bảo vệ bề mặt sản phẩm trong thời gian dài chống khô, nứt do tác động môi trường gây nên. Chống ánh nắng mặt trời. \r\n+ Ít bám bụi.  \r\n+ Sử dụng được trên bất kì trang trí bằng nhựa đen/vỏ xe. Không hư hại màu sơn xe. \r\nGoracing thương hiệu đã quá quen thuộc với các bạn với những SP: \r\n- Chai xịt vệ sinh sên Goracing \r\n- Chai xịt bôi trơn sên GoRacing (đang có khuyến mãi tặng cọ chà sên chuyên dụng). \r\nChai xịt làm sạch nhựa dàn nhựa nhám, vỏ xe GoRacing có dung tích 250ml."
            ],
            [
                "name" => "Chai xịt vệ sinh sên GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chai xịt vệ sinh sên GoRacing (chain cleaner) là dung dịch tẩy rửa, làm sạch bề mặt sên, khô nhanh, giúp cho bề mặt kim loại sáng bóng. Rút ngắn thời gian vệ sinh với mọi bề mặt kim loại. Chai vệ sinh sên GoRacing còn có thể dùng để vệ sinh hệ thống thắng đĩa. \nChai xịt vệ sinh sên GoRacing với những ưu điểm vượt trội như: \n- Tẩy rửa sạch. \n- Bảo vệ màu sên tốt. \n- Chống rỉ sét. \n- Dùng cho sên có phốt và sên không phốt. \n* Dung tích: 400ml. \n* Chai xịt vệ sinh sên GoRacing được phân phối độc quyền bởi Shop2banh."
            ],
            [
                "name" => "Chai xịt bôi trơn sên GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chai xịt bôi trơn sên GoRacing (Chain Lube) là hỗn hợp dầu bôi trơn, chất hòa tan, khí hóa lỏng. Giúp tạo một lớp phủ lên bề mặt sên, giảm tiếng ồn, chống rỉ sét tận bên trong lõi sên, hạn chế bám bụi, giữ sạch sên lâu hơn. \r\nChai bôi trơn sên GoRacing với 3 tính năng chính: \r\n- Bôi Trơn Lâu: Dung dịch có khả năng bám tốt trên sên từ 7 đến 10 ngày, ít văng ra ngoài khi vận hành. \r\n- Sên Chạy Êm: Khả năng bôi trơn tốt giúp giảm tiếng kêu khi sên khô, làm xe chạy êm, nhanh hơn. \r\n- Ít Bám Bụi: Bảo vệ sên tốt, ít bám cát, đất khi vận hành, dễ dàng vệ sinh sau thời gian sử dụng. \r\n* Dung tích: 400ml. \r\n* Chai xịt bôi trơn sên GoRacing là sản phẩm độc quyền của shop2banh, dùng được cho tất cả loại xe vận hành bằng sên và đang được rất nhiều khách hàng phản hồi là sản phẩm có chất lượng tốt."
            ],
            [
                "name" => "Nước làm mát Liqui Moly (loại pha sẵn)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nước làm mát Liqui Moly đỏ cao cấp cho hệ thống làm mát động cơ, máy móc. Giải nhiệt động cơ, chống đông, chống ăn mòn, chống hình thành rong rêu cặn bẩn trong hệ thống. Nhiệt độ sôi trên 160°C. Nước làm mát đỏ loại này là loại đã pha sẵn, dùng trực tiếp. \r\nNước làm mát hàng chính hãng Liqui Moly nhập khẩu từ Đức. \r\nSử dụng cho tất cả các dòng xe sử dụng hệ thống làm mát bằng dung dịch."
            ],
            [
                "name" => "Nhớt Mobil 1 Gold 5W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mobil 1 Gold 5W30 nhập khẩu U.S.A .Dầu tổng hợp 100% Đáp ứng yêu cầu  khắt khe nhất của các nhà sản xuất.Phù hợp với các dòng xe tay ga hiện đại. Đặc biệt chuẩn cho các dòng xe tay ga của Honda sử dụng chuẩn cấp nhớt 30. \r\nThay mới sau 3000km sử dụng."
            ],
            [
                "name" => "Nước rửa xe bảo vệ màu sơn Sumo", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nước rửa xe Sumo bảo vệ màu sơn với công thức độc đáo dùng dễ tẩy rửa các vết bẩn bám trên bề mặt của lớp sơn, kim loại, không gây hư hỏng, rỉ sét, không làm đổi màu, bạc màu của lớp sơn và các chi tiết lốc máy. Giúp nước sơn luôn bóng loáng như mới và đặc biệt không hại da tay, sức khoẻ người sử dụng"
            ],
            [
                "name" => "Shell Advance Ultra Scooter 5W40 0,8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance Ultra Scooter 5W40 0,8L, dầu nhớt tổng hợp cao cấp dành cho tất cả các loại xe tay ga 4 thì đời mới hiện nay như Honda SH, Air Blade, Click, Vario, Yamaha NVX, Nouvo,...Bảo vệ tối ưu và khả năng vận hành đáng tin cậy, tăng độ ổn định trượt cao giúp giảm rung động và giảm tiếng ồn. \r\nThông số kỹ thuật: nhớt tổng hợp 100% \r\nAPI SN, Jaso MB, dung tích 0,8 lít."
            ],
            [
                "name" => "Shell Advance Ultra Scooter 5W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance Ultra Scooter 5W40 1L, dầu nhớt tổng hợp cao cấp dành cho tất cả các loại xe tay ga 4 thì đời mới hiện nay như Honda SH, Air Blade, Click, Vario, Yamaha NVX, Nouvo,...Bảo vệ tối ưu và khả năng vận hành đáng tin cậy, tăng độ ổn định trượt cao giúp giảm rung động và giảm tiếng ồn. \r\nThông số kỹ thuật: nhớt tổng hợp 100% \r\nAPI SN, Jaso MB, dung tích 1 lít."
            ],
            [
                "name" => "Phụ gia pha nhớt Liqui Moly MO S2", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phụ gia pha nhớt động cơ MOS2 Liqui Moly Oil Additiv Là loại phụ gia đặc biệt, chứa thành phần chính là dầu MoS2 loại hoạt chất bôi trơn cực mạnh, giúp dầu nhớt tăng hiệu quả bôi trơn và nâng cao tuổi thọ của nhớt, từ đó động cơ hoạt động trơn tru và êm hơn. \r\n- Sản phẩm đặc biệt thích hợp cho các dòng xe độ, nâng cấp động cơ cũng như các động cơ cũ nằm bãi lâu ngày hay cả với động cơ xe mới. \r\nPhụ gia pha nhớt Liqui Moly MO S2 nhập khẩu từ Đức, pha với nhớt với tỉ lệ 2% (20ml pha với 1 lít nhớt)."
            ],
            [
                "name" => "Chai xịt sên GoRacing", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Chai xịt sên Goracing là 1 sản phẩm sản xuất theo công nghệ mới với thương hiệu đã được nhiều anh em biker đánh giá tốt trong thời gian gần đây. \r\n Với các xe đi sên trần và đặc biệt là sên vàng thì việc chăm sóc sên là rất cần thiết để đảm bảo xe vận hành được trơn tru êm ái, giữ được vẻ đẹp của sên vàng theo thời gian giúp xe sạch hơn đẹp hơn thì sản phẩm chai xịt sên GoRacing sẽ đáp ứng tốt yêu cầu đó. \r\nChai xịt giúp tạo một lớp mỏng bám dính vào bề mặt dây sên xe máy, bảo vệ chống mòn dây xích và bánh răng. \r\nChai xịt bảo dưỡng sên Goracing 400ml dùng để bảo vệ sên trần cho xe motor, giảm tiếng ồn khi chạy, chịu được áp lực cao trong quá trình vận hành của xe máy. Sản phẩm mang đặc tính hiệu quả mạnh mẽ khi bôi trơn sên ngay và tạo độ bám dính tốt nhất cho xích sên xe máy của bạn. Ngoài ra, chai xịt sên Goracing còn giúp hạn chế bụi bẩn, có thể kéo dài tuổi thọ dây sên, bánh răng."
            ],
            [
                "name" => "Nhớt Liqui Moly 4T Synth 10W50", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Liqui Moly Motorbike Synth 4T 10W50 làm tốt nhiệm vụ bôi trơn giảm thiểu ma sát giữ các chi tiết trong động cơ. Giảm thiểu khả năng tụ tập căn bẩn trong động cơ, giúp bạn dễ dàng vệ sinh động cơ khi bảo dưỡng. \nLiqui Moly Motorbike Synth 4T 10W50 giúp xe máy của bạn khởi động dễ dàng, và tăng tốc nhanh chóng, giúp xe vận hành êm ái và mượt mà hơn. Khi sử dụng Liqui Moly Motorbike Synth 4T 10W50, xe máy của bạn sẽ giảm rung động, giảm tiếng ồn ngay cả khi vận hành ở vận tốc cao."
            ],
            [
                "name" => "Phụ gia tăng tốc Liqui Moly Speed Additive", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Phụ gia tăng tốc Liqui Moly Speed Additive giúp tăng chỉ số Octan, tối ưu quy trình cháy nổ, giảm tiêu hao nhiên liệu, ngăn chặn hình thành cặn bã, nâng cao hiệu xuất động cơ. \r\nPhụ gia tăng tốc Liqui Moly Speed Additive sử dụng cho tất cả loại xe 2 thì, 4 thì, phun xăng điện tử hoặc xăng cơ..."
            ],
            [
                "name" => "Dầu súc động cơ Liqui Moly Engine Flush", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Dầu súc rửa động cơ Liqui Moly Engine Flush, làm sạch động cơ bên trong xe của bạn. Tẩy rửa các chất bẩn bám lâu ngày trong động cơ mà quá trình thay dầu không thể sạch hết. \r\nDầu súc rửa động cơ Liqui Moly Engine Flush sử dụng cho tất cả loại xe."
            ],
            [
                "name" => "Shell Advance 4T AX7 10W40 Synthetic Based 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance 4T AX7 10W40 Synthetic Based là loại nhớt xe máy chuyên dụng dành cho xe số 4 thì của tập đoàn nhớt Shell. Shell Advance 4T AX7 10W40 Synthetic Based được ứng dụng nhiều công nghệ nhớt tiên tiến hiện đại giúp bảo vệ động cơ xe số tốt nhất trong điều kiện đường xá và khí hậu tại Việt Nam."
            ],
            [
                "name" => "Shell Advance 4T AX7 10W40 Synthetic Based 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance 4T AX7 10W40 Synthetic Based 1L là loại nhớt xe máy chuyên dụng dành cho xe số 4 thì của tập đoàn nhớt Shell. Shell Advance 4T AX7 10W40 Synthetic Based 1L được ứng dụng nhiều công nghệ nhớt tiên tiến hiện đại giúp bảo vệ động cơ xe số tốt nhất trong điều kiện đường xá và khí hậu tại Việt Nam."
            ],
            [
                "name" => "Nhớt Amsoil 10W40 Scooter 4 Stroke 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Nhớt Amsoil 10W40 Scooter 4 Stroke chuyên dùng cho xe tay ga cao cấp. \r\n- Nhớt tổng hợp  \r\n- API SG, SL / CF, JASO MA / MA2  \r\n- Độ nhớt SAE: 10W40  \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Nhớt Amsoil 10W40 Synthetic Metric 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Nhớt Amsol 10W40 Synthetic Metric phù hợp với các dòng xe số tại Việt Nam, đặc biệt là các xe moto PKL.  \r\n- Nhớt tổng hợp 100% Synthese  \r\n- GL-1 • API SG, SL / CF • JASO MA / MA2  \r\n- Độ nhớt SAE 10W40 \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Liqui Moly 4T Additive Shooter, Dung dịch vệ sinh buồng đốt Cacbon Cleaner", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- 4T Additive Shooter là dung dịch vệ sinh buồng đốt Liqui Moly Cacbon Cleaner \r\n- Sản phẩm hỗ trợ của Liqui Moly.  \r\n- Dung tích 80 ml"
            ],
            [
                "name" => "Nhớt Liqui Motorbike 10W40 Formula", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Moly chính hãng chất lượng cao dành cho xe số 4 thì hiện đại. Khả năng chịu nhiệt tốt, bảo vệ động cơ tối ưu, giúp xe vận hành ổn định nhất."
            ],
            [
                "name" => "Nhớt Liqui Moly Motorbike Scooter 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Moly chính hãng chất lượng cao dành cho xe tay ga. Nhớt có độ bền cao, ổn định, giúp xe vận hành tối ưu, tiết kiệm nhiên liệu"
            ],
            [
                "name" => "Nhớt hộp số Liqui Moly Racing Scooter Gear Oil 150ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Giúp động cơ xe có khả năng chịu áp lực cao, giảm tiếng ổn khi vận hành xe, độ nhớt ổn định, chống mài mòn bánh răng hiệu quả nhất."
            ],
            [
                "name" => "Motul Scooter Gear Plus, Nhớt lap (nhớt hộp số) 120ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul Scooter Gear Plus nhớt láp xe tay ga - nhớt hộp số chất lượng cao của hãng Motul. Motul Scooter Gear Plus chống mài mòn bánh răng, giảm độ ma sát tốt hơn cho xe tay ga đời mới, giúp xe chạy êm ái và mạnh mẽ, chống rỉ và chống ăn mòn tốt nhất trên động cơ xe"
            ],
            [
                "name" => "Nhớt Motul Scooter Expert LE 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul Scooter Expert LE 10W40 0.8L nhớt chất lượng cho xe tay ga 4 thì. Motul Scooter Expert LE 10W40 0.8L kiểm soát cặn piston, chống mài mòn hiệu quả giúp tăng tuổi thọ động cơ. Khả năng chống quá nhiệt hoàn hảo phù hợp với chế độ dừng chạy liên tục khi giao thông ở thành phố"
            ],
            [
                "name" => "Nhớt Motul Scooter Expert LE 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul Scooter Expert LE 10W40 1L nhớt chất lượng vượt trội dành cho xe tay ga 4 thì. Nhớt chống quá nhiệt hoàn hảo, tiết kiệm nhiên liệu, tăng tốc nhanh và có độ bền oxy hóa cao"
            ],
            [
                "name" => "Nhớt Motul Scooter Power LE 5W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul Scooter Power LE 5W40 1L nhớt cao cấp dành cho xe tay ga đời mới của hãng nhớt Motul. Nhớt kiểm soát cặn piston, chống mài mòn, chống ăn mòn cực kỳ hiệu quả với khả năng tẩy rửa tuyệt hảo giúp động cơ luôn được giữ sạch. Tiêu chuẩn: API SN, JASO MB"
            ],
            [
                "name" => "Shell Advance AX7 Scooter 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance AX7 Scooter 10W40 0.8L là nhớt xe tay ga cao cấp dành cho xe tay ga 4 thì đời mới. Nhớt mang lại khả năng kiểm soát tốt hơn với sự sang số, tăng tốc êm ái hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động."
            ],
            [
                "name" => "Shell Advance AX7 Scooter 10W40 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Shell Advance AX7 Scooter 10W40 1L Nhớt cao cấp chuyên dụng cho xe tay ga 4 thì đời mới. Nhớt mạnh mẽ trọng việc loại bỏ cặn bùn và cặn cứng trong động cơ, chống ăn mòn hiệu quả giúp tăng tuổi thọ động cơ xe tay ga"
            ],
            [
                "name" => "Nhớt Motul 3100 Silver 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul 3100 Silver 0.8L nhớt xe số chất lượng cao của tập đoàn nhớt Motul. Motul 3100 Silver 0.8L có khả năng bôi trơn hiệu quả và giảm ma sát tối đa giúp tiết kiệm nhiên liệu và chống oxy hóa ngăn hiện tượng đặc dầu do tác động của nhiệt giúp kéo dài thời gian sử dụng"
            ],
            [
                "name" => "Nhớt Motul 3100 Silver 1L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Motul 3100 Silver 1L là loại nhớt chuyên dụng dành cho xe số. Motul 3100 Silver 1L có tính năng bôi trơn hiệu quả và giảm ma sát tối đa giúp tiết kiệm nhiên liệu, chống oxy hóa ngăn hiện tượng đặc dầu do tác động của nhiệt giúp kéo dài thời gian sử dụng"
            ],
            [
                "name" => "Nhớt Gulf Western Oil SYN-M 4T Ester Pao 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 380004  \n\nNhớt Gulf Western Oil SYN-M 4T Ester Pao là loại dầu tổng hợp hoàn toàn được pha chế đặc biệt để đáp ứng yêu cầu của những động cơ hoạt động lâu dài, đáp ứng yêu cầu khắc khe và sự kiểm soát khí thải cũng như mức tiêu thụ dầu, đáp ứng yêu cầu bôi trơn nghiêm ngặt của các động cơ 4 thì hiện đại, đặc biệt là những động cơ dùng để đua, xe có tua máy cao và hạn chế tối đa về nhiệt độ cho các dòng xe máy, chắc chắn vượt trội hơn so với các dầu 4T thông thường khác. \nNhớt Gulf Western Oil SYN-M 4T Ester Pao 10W40 là dầu tổng hợp với công nghệ cao nhất PAO và Ester, sản phẩm có màu nhớt là cam phản quang rất độc đáo. \nNhớt Gulf Western Oil SYN-M 4T Ester Pao 10W40 có thể sử dụng được cho tất cả loại xe thể thao từ PKN đến PKL, được nhập khẩu chính hãng 100% từ Úc."
            ],
            [
                "name" => "Mobil 1 Racing 4T 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mobil 1 Racing 4T 10W40  là loại nhớt cao cấp đặc biệt chuyên dụng cho các dòng mô tô phân khối lớn hiện đại mới nhất như: Exciter 150, msx 125, raider 150, fz 150i,... Nhớt tiết kiệm nhiên liệu tối ưu nhất, kết hợp với khả năng tăng tốc xe dễ dàng và vượt trội"
            ],
            [
                "name" => "Nhớt Mobil 1 0W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 930012  \nNhớt Mobil 1 0W40 là dầu nhớt tổng hợp hoàn toàn (fully synthetic), đạt và vượt các cấp chất lượng quốc tế API SN. \nDầu nhớt 100% tổng hợp giúp tăng cường lớp màng dầu bảo vệ động cơ ở nhiệt độ cao và vận tốc lớn. Chỉ sử dụng cho xe tay ga đời mới có bộ ly hợp khô."
            ],
            [
                "name" => "Nhớt Liqui Moly Motorbike Street 4T 10W40 1lit", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Moly chính hãng chất lượng cao dành cho xe số 4 thì hiện đại. Khả năng chịu nhiệt tốt, bảo vệ động cơ tối ưu, giúp xe vận hành ổn định nhất."
            ],
            [
                "name" => "Nhớt Maxima Full Syn 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Maxima Full Syn 10W40 là dòng nhớt hoàn toàn mới của Maxima, với nhiều công nghệ như chống mài mòn các chi tiết máy cực tốt, dòng nhớt cho xe có khả năng tăng tốc khá bốc tuy nhiên vẫn giữ độ êm của máy, cùng với đó là chỉ số độ nhớt cao 161. \nNhớt Maxima Full Syn 10W40 phù hợp cho các dòng xe số trên thị trường, nhớt được sản xuất tại Mỹ."
            ],
            [
                "name" => "Nhớt láp Gulf Western Oil MoS2 80W90 120ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt láp Gulf Western Oil MoS2  80W90 dành cho xe tay ga được sản xuất chính hãng bởi tập đoàn dầu nhớt Gulf Western Oil. Alpha Gear Oil MoS2 là sản phẩm được Gulf Western Oil nghiên cứu và sản xuất dành riêng cho các dòng xe tay ga, với tính năng bôi trơn hộp số xe tay ga hiệu quảm đặc biệt khả năng chống hú cực tốt mang đến cho các bạn cảm giác vận hàng êm ái, bảo vệ các chi tiết bên trong hộp số được an toàn và hoạt động ổn định nhất. \nNhớt láp Gulf Western Oil MoS2 80W90 120ml đặc biệt có màu đen với nguyên liệu nhập khẩu từ Châu Âu, cấp nhớt GL5 cực cao dành cho mọi loại xe tay ga cao cấp."
            ],
            [
                "name" => "Nhớt Liqui Scooter Formula 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Scooter Formula 10W40 (0.8L) là dầu bán tổng hợp với công thức hoàn toàn mới dành riêng cho xe tay ga, đảm bảo bôi trơn liên tục, độ hao hụt dầu thấp, giảm tiếng ồn vận hành trong mọi điều kiện hoạt động. \nNhớt Liqui Scooter Formula 10W40  phù hợp cho các dòng xe tay ga, được nhập khẩu 100% chính hãng Liqui Moly Đức."
            ],
            [
                "name" => "Nhớt chiết lẻ Motul 300V Factory Line 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Motul 300V Factory Line 10W40 được người dùng Việt Nam đánh giá là một trong những sản phẩm nhớt xe máy chất lượng cao cấp dành cho xe mô tô phân khối lớn tốt nhất hiện nay.  \r\n\r\nMotul 300V 10W40 cũng là sản phẩm duy nhất trên thế giới đạt đến công nghệ ESTER Core, một công nghệ độc quyền của hãng dầu nhớt Motul, nâng tầm cải tiến và đáp ứng các yêu cầu kỹ thuật của những thế hệ động cơ đời mới nhất với tính năng bảo vệ chống mài mòn, chống giảm áp suất dầu và chống hiện tượng oxy hóa ở nhiệt độ cao, tối ưu hóa công suất và độ tin cậy cực cao. \r\n\r\nNhớt chiết lẻ Motul 300V Factory Line 10W40 dung tích 100ml dành cho các xe dung tích hơn 1 lít nhưng đỡ phải mua 2 chai."
            ],
            [
                "name" => "Nhớt chiết lẻ Motul H-Tech 100 4T 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Motul H-Tech 100 4T 10W40 (100ml) là loại nhớt xe số chất lượng cao dành cho xe máy động cơ 4 thì. Đây là sản phẩm nhớt của tập đoàn Motul – nhà sản xuất dầu nhớt hàng đầu của Pháp. Motul H-Tech 100 4T 10W40 đã được nhiều hãng xe máy uy tín tín nhiệm và khuyên dùng trong thời gian qua. Motul H-Tech 100 4T 10W40 tích hợp đồng thời nhiều tính năng tuyệt hảo của một sản phẩm nhớt xe máy chất lượng như: chống oxy hóa tuyệt vời giúp ngăn ngừa tình trạng dầu bị đặc lại do tác động của nhiệt độ; khả năng bôi trơn tốt làm giảm ma sát hiệu quả và chống mài mòn. \r\n\r\nNhớt Motul H-Tech 100ml dùng cho các dòng xe dung tich trên 1 lít, tiện cho khách đỡ phải mua 2 chai 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W30 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 320002  \nNhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W30 (100ml) ứng dụng các công nghệ tổng hợp tiên tiến của hãng nhớt Liqui Moly đặc chế cho xe số 4 thì. Sức mạnh tổng hợp các chất phụ gia cao cấp đã làm nên chất lượng vượt trội của nhớt Liqui Moly Motorbike Street 4T 10W30, công nghệ tổng hợp này giúp cho nhớt giảm thiểu khả năng tiêu hao nhiên liệu, và thân thiện với môi trường. \n\nLưu ý: Theo như nhà sản xuất Liqui Moly Motorbike Street 4T 10W30 có thể kéo dài thời gian thay nhớt khi xe đi được 3000km. Nhưng theo khuyến cao của các chuyên gia dầu nhớt, các bạn nên thay nhớt khi xe đi được từ 2000 - 2500 km. \nNhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W30 (100ml) thích hợp cho xe có dung tích nhớt trên 1 lít muốn mua lẻ."
            ],
            [
                "name" => "Nhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Liqui Moly Motorbike Street 4T 10W40 (100ml) là loại nhớt chuyên dùng cho các dòng xe số 4 thì hiện đại hiện nay trên thị trường Việt Nam. Liqui Moly Motorbike Street 4T 10W40 luôn mang lại sự tin cậy cho động cơ xe số 4 thì của bạn, nhớt có khả năng chịu nhiệt tốt và bảo vệ động cơ tối ưu. Bạn sẽ thật sự hài lòng khi chọn Liqui Moly Motorbike Street 4T 10W40 bởi lẽ đây là loại nhớt chất lượng cao cho xe số 4 thì và luôn đảm bảo đầy đủ các tiêu chuẩn mà động cơ của các loại xe số 4 thì đòi hỏi. \r\n\r\nNhớt Liqui Moly Motorbike Street 4T 10W40 dung tích 100ml dùng cho các dòng xe dung tich trên 1 lít, tiện cho khách đỡ phải mua 2 chai 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ... \r\n\r\nLưu ý: Theo như nhà sản xuất Liqui Moly Motorbike Street 4T 10W40 có thể kéo dài thời gian thay nhớt khi xe đi được 3000km. Nhưng theo khuyến cao của các chuyên gia dầu nhớt, các bạn nên thay nhớt khi xe đi được từ 2000 - 2500 km"
            ],
            [
                "name" => "Nhớt chiết lẻ Repsol Racing 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Repsol Racing 10W40 (100ml) là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ. \r\nNhớt Repsol Racing 10w40 khả năng thích nghi cao, độc đáo, phù hợp với hầu hết các loại xe và các loại động cơ 4 thì. Nhớt giúp giảm nhiệt tốt, cải thiện tốt sức mạnh và độ bền của động cơ. Loại nhớt này mang lại khả năng kiểm soát tốt hơn với sự sang số êm hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động. \r\n\r\nNhớt Repsol Racing 10W40 (100ml) dành cho các dòng xe dung tích nhớt trên 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Wolver Racing Synthetic 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Wolver Racing Synthetic 10W40 (100ml) là loại dầu nhớt bôi trơn tổng hợp đặc biệt dành riêng cho động cơ xe máy 4 thì được nhập khẩu chính hãng từ Đức. Wolver Racing được biết đến là dòng nhớt được ứng dụng đặc biệt cho các loại xe máy phân khối lớn, bên cạnh đó còn có thể dùng tốt cho tất cả các loại xe máy có bộ ly hợp khô và ướt (xe số và xe tay ga). \nNhớt Wolver Racing Synthetic 10W40 (100ml) thích hợp mua thêm cho các xe có dung tích nhớt trên 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Motul 7100 10W50 4T (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Motul 7100 10W50 4T (100ml) là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất, Motul 7100 4T 10W50 1L luôn bảo vệ động cơ xe máy tốt nhất và kéo dài thời gian thay nhớt tốt hơn các sản phẩm nhớt xe máy khác.  \r\nThời gian sử dụng nhớt Motul 7100 10W50 khi xe đi được khoảng 2000 - 2.500km các bạn nên thay nhớt. \r\nNhớt Motul 7100 10W50 4T 100ml thích hợp mua thêm cho các dòng xe có dung tích nhớt hơn 1 lít như: Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 .."
            ],
            [
                "name" => "Nhớt chiết lẻ Shell Advance Ultra 10W40 (100ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Shell Advance Ultra 10W40 (100ml) là nhớt xe máy chất lượng được thiết kế đặc biệt dành riêng cho phân khúc xe mô tô phân khối lớn, các loại xe côn tay. Shell Advance Ultra 10W40 1L được phát triển nhằm mang lại sự bảo vệ và vận hành tối ưu của hãng nhớt Shell, giúp kéo dài tuổi thọ động cơ.  \r\nNhớt Shell Advance Ultra 10W40 là sự kết hợp hoàn hảo từ công nghệ R.C.E và thực tế dựa trên sự hợp tác và nghiên cứu kĩ thuật của tập đoàn dầu nhớt Shell và các đội đua xe mô tô trứ danh nhằm mang lại sự bảo vệ và vận hành tối ưu giúp kéo dài tuổi thọ động cơ, tăng khả năng kiểm soát tốt hơn với sự sang số êm hơn và trải nghiệm lái xe đầy hứng thú nhờ giảm tiếng ồn và rung động. \r\nNhớt Shell Advance Ultra 10W40 (100ml) thích hợp mua thêm cho xe có dung tích nhớt trên 1 lít như:  Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Amsoil 10W40 Performance (150ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Amsoil 10W40 Performance (150ml) là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất, Nhớt Amsoil 10W40 Performance  giúp giảm thiểu ma sát trong quá trình vận hành của động cơ một cách tối đa, hạn chế việc ăn mòn các chi tiết trong động cơ. Giúp cho động cơ luôn vận hành trơn tru, mượt mà trong mọi điều kiện thời tiết khắc nghiệt. \n\nNhớt Amsoil 10W40 Performance (150ml) phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam có dung tích nhớt hơn 1lit như : Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Amsoil 10W40 Synthetic Metric (150ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Amsol 10W40 Synthetic Metric (150ml) là nhãn hiệu dầu nhớt Amsoil danh tiếng đến từ Mỹ, là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất. \r\nNhớt Amsol 10W40 Synthetic Metric luôn bảo vệ động cơ xe máy tốt nhất và kéo dài thời gian thay nhớt tốt hơn các sản phẩm nhớt xe máy khác. \r\nNhớt Amsol 10W40 Synthetic Metric (150ml) phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam có dung tích nhớt hơn 1lit như : Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt chiết lẻ Amsoil 10W30 Synthetic Metric (150ml)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt chiết lẻ Nhớt Amsol 10W30 Synthetic Metric (150ml) là lựa chọn nhớt xe máy phù hợp cho xe số. Với tiêu chí chất lượng và tiết kiệm nhất.  \nNhớt Amsol 10W30 Synthetic Metric luôn bảo vệ động cơ xe máy tốt nhất và kéo dài thời gian thay nhớt tốt hơn các sản phẩm nhớt xe máy khác.  \nNhớt Amsol 10W30 Synthetic Metric 150ml phù hợp với các dòng xe số hiện đại trên thị trường Việt Nam có dung tích nhớt hơn 1lit như : Winner 150, Winner X, Sonic 150, Raider 150, Satria, Fz150i, CBR 150, GSX-R150 ..."
            ],
            [
                "name" => "Nhớt Motul Scooter LE 10W40 0.8L", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Motul Scooter LE 10W40 0.8L nhớt chất lượng cho xe tay ga 4 thì, kiểm soát cặn piston, chống mài mòn hiệu quả giúp tăng tuổi thọ động cơ. Khả năng chống quá nhiệt hoàn hảo phù hợp với chế độ dừng chạy liên tục khi giao thông ở thành phố. \nNhớt Motul Scooter LE 10W40 được sản xuất bới chính hãng Motul VN."
            ],
            [
                "name" => "Nhớt Amsoil 10W30 Synthetic Metric 946ml", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "- Nhớt Amsol 10W30 Synthetic Metric phù hợp với các dòng xe số tại Việt Nam, đặc biệt là các xe moto PKL.  \r\n- Nhớt tổng hợp 100% Synthese  \r\n- GL-1 • API SG, SL / CF • JASO MA / MA2  \r\n- Độ nhớt SAE: 10W30 \r\n- Dung tích: 946ml"
            ],
            [
                "name" => "Nhớt Fuchs Comp 4 10W40 XP", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Fuchs Silkolene Comp 4 10w40 XP được chế tạo để đáp ứng nhu cầu của cả động cơ 4 thì làm mát bằng không khí và nước. Khả năng năng bám chặt và bề mặt giúp Comp 4 trở thành sản phẩm lý tưởng cho tất cả các linh kiện hiệu suất cao trong động cơ và hộp số . \nCông nghệ Tổng hợp hoàn toàn đã được chứng minh cung cấp khả năng đặc biệt chống mài mòn và hiệu năng chống ma sát dưới tất cả các điều kiện khắc nghiệt của nhiệt độ. \nTối ưu hóa công nghệ tổng hợp ester để đem đến tính chất chống mài mòn xuất sắc trong một phạm vi nhiệt độ hoạt động trải dài từ thời tiết nóng tới lạnh. \nNhớt Fuchs Silkolene Comp 4 10w40 XP có khả năng hoạt động bảo vệ bề mặt tiên tiến cung cấp sự bảo vệ cần thiết cho piston, lòng piston, trục cam và các vòng bi bạc đạn, ngay cả trong giai đoạn bắt đầu khởi động máy cho đến khi dòng chảy nhớt được ổn định."
            ],
            [
                "name" => "Nhớt Liqui Molygen Scooter 5W30", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Liqui Moly Molygen Scooter 5W30 mang những công thức đặc biệt đúng như tên gọi của nó, là sản phẩm nhớt dành riêng cho xe tay ga hiện đại rất chất lượng và được ưa chuộng trên nhiều nước bởi tín năng bảo vệ động cơ cực tốt. \r\nNhớt Liqui Moly Molygen Scooter 5W30 được hãng Liqui Moly sản xuất đặc biệt dành cho các dòng xe tay ga hiện đại hiện nay trên thị trường Việt, có thể kể đến những chiếc xe tay ga thông dụng và đắt tiền. \r\nNhớt Liqui Moly Molygen Scooter 5W30 có thể kéo dài thời gian thay nhớt lên rất lâu, có thể đến 2500 - 3000km."
            ],
            [
                "name" => "Nhớt Liqui Molygen Scooter 10W40", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Liqui Moly Molygen Scooter 10W40 mang những công thức đặc biệt đúng như tên gọi của nó, là sản phẩm nhớt dành riêng cho xe tay ga hiện đại rất chất lượng và được ưa chuộng trên nhiều nước bởi tín năng bảo vệ động cơ cực tốt. \r\nNhớt Liqui Moly Molygen Scooter 10W40 được hãng Liqui Moly sản xuất đặc biệt dành cho các dòng xe tay ga hiện đại hiện nay trên thị trường Việt, có thể kể đến những chiếc xe tay ga thông dụng và đắt tiền. \r\nNhớt Liqui Moly Molygen Scooter 10W40 có thể kéo dài thời gian thay nhớt lên rất lâu, có thể đến 2500 - 3000km."
            ],
            [
                "name" => "Nhớt Liqui Moly Motorbike Street 4T 10W30 1l", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Nhớt Liqui Moly Motorbike Street 4T 10W30 được tập đoàn dầu nhớt Liqui Moly nghiên cứu và chế tạo để trở thành một sản phẩm nhớt chuyên dụng dành cho các dòng xe máy 4 thì hiện nay. Độ nhớt an toàn, chất lượng cao đã giúp cho nhớt Liqui Moly Motorbike Street 4T 10W30 được nhiều biker Việt tin dùng và lựa chọn"
            ]

        ]);
        Category::where('name', 'vỏ xe')->first()->products()->createMany([
            [
                "name" => "Lốp Aspira Sportivo (110/80-14 - 140/70-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Sportivo 110/80-14 - 140/70-14 chính hãng Indonesia dành cho xe Yamaha NVX các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức.  \r\nLốp Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 với ưu điểm là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng.",

            ],


            [
                "name" => "Lốp Maxxis 3D gai kim cương (80/90-17 - 110/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Maxxis 3D gai kim cương 80/90-17 - 110/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155... các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 80/90-17 - 110/70-17 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Vỏ xe Aspira Urbano 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Urbano 120/70-17 gắn được cho xe số như Exciter, Winner, FZ150i...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Urbano thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Urbano 120/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Sportivo (80/90-17 - 110/80-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Sportivo 80/90-17 - 110/80-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155... các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. \r\nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 80/90-17 - 110/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Dunlop D102A (70/90-17 - 120/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop D102A 70/90-17 - 120/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155... các đời. \r\nvới thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt. \r\nVỏ xe Dunlop D102A 70/90-17 - 120/70-17 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Timsun TS823 (80/90-17 - 110/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Timsun TS823 80/90-17 - 110/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155, Exciter 135... các đời. \r\nLốp Timsun TS823 là dòng lốp xe máy đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (90/80-17 - 120/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Pirelli Diablo Rosso Sport 90/80-17 - 120/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155, Fz150i... các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 90/80-17 - 120/70-17, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (90/80-17 - 120/70-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Street 2 90/80-17 - 120/70-17 dành cho xe Winner 150 V1, Winner X, Exciter 150, Exciter 155, Fz150i... các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nLốp Michelin Pilot Street 2 90/80-17 - 120/70-17 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Dunlop D307 (90/90-12 - 100/90-10)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop D307 90/90-12 - 100/90-10 dành cho xe Honda Lead 125, SCR 110, Yamaha Latte, Azuro, Attila Alizabeth các đời. \r\nLốp Dunlop D307 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt. \r\nVỏ Dunlop D307 90/90-12 - 100/90-10 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin City Grip (90/90-12 - 100/90-10)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin City Grip 90/90-12 - 100/90-10 dành cho xe Honda Lead 125, SCR 110, Yamaha Latte, Azuro, Attila Alizabeth các đời. \r\nLốp Michelin City Grip rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, giúp thoát nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 90/90-12 - 100/90-10 được sản xuất tại Thái Lan, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn."
            ],
            [
                "name" => "Lốp Aspira Sportivo (110/80-14 - 140/70-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Sportivo 110/80-14 - 140/70-14 chính hãng Indonesia dành cho xe Yamaha NVX các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức.  \r\nLốp Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 với ưu điểm là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nLốp Aspira Sportivo 110/80-14 - 140/70-14 được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Dunlop Scoot Smart (110/80-14 - 140/70-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop Scoot Smart 110/80-14 - 140/70-14 chính hãng Indonesia dành cho xe Yamaha NVX các đời. \r\nLốp Dunlop Scoot Smart 110/80-14 - 140/70-14 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm xử lý mượt mà hơn khi vào cua, đồng thời mang lại cảm giác thoải mái cho người lái."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 130/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 130/70-12 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 130/70-12 dành cho các dòng xe: MSX, Vespa Sprint, Vespa GTS, Primavera..."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (90/80-17 - 100/80-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Moto GP 90/80-17 - 100/80-17 dành cho xe Winner 150 V1, Winner X, Exciter 135, Exciter 150, Exciter 155... các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\nVỏ Michelin Moto GP 90/80-17 - 100/80-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Aspira Sportivo (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Sportivo 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 70/90-17 - 80/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Pirelli Diablo Rosso Sport 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 70/90-17 - 80/90-17, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Maxxis 3D gai kim cương (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Maxxis 3D gai kim cương 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 70/90-17 - 80/90-17 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Lốp Dunlop TT902 (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop TT902 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Dunlop TT902 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt. \r\nVỏ xe Dunlop TT902 70/90-17 - 80/90-17 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Timsun TS692 (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Timsun TS692 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Timsun TS692 là dòng lốp xe máy đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối."
            ],
            [
                "name" => "Lốp Champion SHR85 (IZ 01) (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Champion SHR85 (IZ 01) 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Champion SHR85 (IZ 01) với thiết kế gai thể thao chạy được đường city lẫn đường trường. Gai lốp Champion SHR85 tạo cho người lái cảm giác xe chạy có trớn và lướt trên mặt đường. \r\nVỏ xe Champion SHR85 (IZ 01) 70/90-17 - 80/90-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION  đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR85  (IZ 01) chính hãng 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR85 (IZ 01) chính hãng 80/90-17. \r\nThiết kế gai thể thao chạy được đường city lẫn đường trường. Gai lốp sẽ cho người lái cảm giác xe chạy có trớn và lướt trên mặt đường. \r\nVỏ xe Champion sản xuất tại Thailand. CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất vỏ xe từ hạng nặng cho đến hạng nhẹ. \r\nVỏ xe Champion SHR85 (IZ 01) chính hãng 80/90-17 gắn được các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo....hoặc bánh trước Winner, Exciter 150 mới."
            ],
            [
                "name" => "Vỏ xe Champion SHR85 (IZ 01) chính hãng 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR85 (IZ 01) chính hãng 70/90-17. \r\nThiết kế gai thể thao chạy được đường city lẫn đường trường. Gai lốp sẽ cho người lái cảm giác xe chạy có trớn và lướt trên mặt đường. \r\nVỏ xe Champion sản xuất tại Thailand. CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất vỏ xe từ hạng nặng cho đến hạng nhẹ. \r\nVỏ xe Champion SHR85 (IZ 01) chính hãng 70/90-17 gắn được các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo..."
            ],
            [
                "name" => "Lốp Champion SHR86 (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Champion SHR86 (100/80-16 - 120/80-16) dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nLốp Champion SHR86 có kiểu gai như Dunlop SH Ý lúc trước nhìn sang và đẹp, có thể gắn vừa xe Honda SH. \r\nVỏ xe Champion SHR86 100/80-16 - 120/80-16 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR86 chính hãng 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR86 chính hãng 100/80-16 có kiểu gai như Dunlop SH Ý lúc trước nhìn sang và đẹp, có thể gắn vừa xe Honda SH. \r\nVỏ xe Champion SHR86 chính hãng 100/80-16 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR86 chính hãng 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR86 chính hãng 120/80-16 có kiểu gai như Dunlop SH Ý lúc trước nhìn sang và đẹp, có thể gắn vừa xe Honda SH. \r\nVỏ xe Champion SHR86 chính hãng 120/80-16 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất vỏ Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Moto GP 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n \r\nVỏ Michelin Moto GP 70/90-17 - 80/90-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Street 2 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nLốp Michelin Pilot Street 2 70/90-17 - 80/90-17 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Michelin City Extra (70/90-17 - 80/90-17)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin City Extra 70/90-17 - 80/90-17 dành cho xe Wave A-RSX, Future, Sonic 150, Raider, Satria, Sirius, Jupiter, YaZ, Axelo... các đời. \r\nVỏ Michelin City Extra, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 70/90-17 - 80/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra chính hãng được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Maxxis 3D gai kim cương (80/90-16 - 100/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Maxxis 3D gai kim cương 80/90-16 - 100/90-14 dành cho xe SH Mode 125 các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 80/90-16 - 100/90-14 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (80/90-16 - 100/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Street 2 80/90-16 - 100/90-14 dành cho xe SH Mode 125 các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nLốp Michelin Pilot Street 2 80/90-16 - 100/90-14 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Dunlop D307 (80/90-16 - 100/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop D307 80/90-16 - 100/90-14 dành cho xe SH Mode 125 các đời. \r\nDunlop thương hiệu lốp xe nổi tiếng được sản xuất tại Indonesia. \r\nLốp Dunlop D307 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt."
            ],
            [
                "name" => "Lốp Champion SHR79 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Champion SHR79 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Champion SHR79 chính hãng có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, lốp được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế.  \r\nCHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp...  \r\nChất lượng vỏ Champion đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Lốp Champion SHR78 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Champion SHR78 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Champion SHR78 chính hãng có kiểu gai Rosso thể thao tuyệt đẹp, được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế.  \r\nCHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp...  \r\nChất lượng vỏ Champion đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Lốp Aspira Stretto (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Stretto 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Aspira Stretto với gai vỏ hoàn toàn mới, nhìn rất hiện đại, được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Stretto 90/80-14 - 100/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Stretto (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Stretto 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Aspira Stretto với gai vỏ hoàn toàn mới, nhìn rất hiện đại, được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Stretto 80/90-14 - 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Sportivo (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Sportivo 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 80/90-14 - 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Aspira Sportivo (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Sportivo 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeler của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeler – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ Aspira Sportivo 80/90-14 - 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Timsun TS692 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Timsun TS692 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Timsun TS692 là dòng lốp xe máy đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối."
            ],
            [
                "name" => "Lốp Maxxis 3D gai kim cương (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Maxxis 3D gai kim cương 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nVỏ Maxxis gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \r\nLốp Maxxis 3D gai kim cương 80/90-14 - 90/90-14 với độ bền cao, tuổi thọ của lốp lên tới 20,000 Km."
            ],
            [
                "name" => "Lốp Pirelli Angel Scooter (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Pirelli Angel Scooter 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nChất lượng lốp Pirelli Angel Scooter đã được nhiều anh em trải nghiệm và đánh giá khá cao \r\nVỏ Pirelli Angel Scooter được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Angel Scooter 90/80-14 - 100/80-14, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Pirelli Diablo Rosso Sport 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 90/80-14 - 100/80-14, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Pirelli Diablo Rosso Sport (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Pirelli Diablo Rosso Sport 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nChất lượng lốp Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nLốp Pirelli Diablo Rosso Sport 80/90-14 - 90/90-14, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Moto GP 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao.  \r\nVỏ Michelin Moto GP 90/80-14 - 100/80-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Aspira Sportivo (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Aspira Sportivo 100/80-16 - 120/80-16 dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nLốp Aspira Sportivo được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \r\nVỏ xe Aspira Sportivo với ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nLốp Aspira Sportivo 100/80-16 - 120/80-16 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Lốp Michelin Anakee Street (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Anakee Street 80/90-14 - 90/90-14 dành cho xe  Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Michelin Anakee Street là sản phẩm lốp mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nLốp Michelin Anakee Street 80/90-14 - 90/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Anakee Street (90/80-14 - 100/80-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Anakee Street 90/80-14 - 100/80-14 dành cho xe Air Blade, Vario, Click Thái...các đời. \r\nLốp Michelin Anakee Street là sản phẩm lốp mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nLốp Michelin Anakee Street 90/80-14 - 100/80-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Moto GP (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Moto GP 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Michelin Pilot Moto GP lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao.  \r\nVỏ Michelin Moto GP 80/90-14 - 90/90-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Lốp Michelin City Extra (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin City Extra 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nVỏ Michelin City Extra, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 80/90-14 - 90/90-14 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra chính hãng được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin Pilot Street 2 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin Pilot Street 2 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nLốp Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nLốp Michelin Pilot Street 2 80/90-14 - 90/90-14 được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Lốp Dunlop D115 (80/90-14 - 90/90-14)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop D115 80/90-14 - 90/90-14 dành cho xe Air Blade, Vision, Vario, Click Thái, Genio, Beat...các đời. \r\nDunlop thương hiệu lốp xe nổi tiếng được sản xuất tại Indonesia. \r\nLốp Dunlop D115 với thiết kế gai đặc biệt, cao su khá tốt, bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt, độ mài mòn cực thấp giúp lốp rất bền, sử dụng rất lâu và cũng chống ăn đinh rất tốt."
            ],
            [
                "name" => "Lốp Pirelli Angel Scooter (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Pirelli Angel Scooter 100/80-16 - 120/80-16 dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nPirelli thương hiệu lốp xe nổi tiếng đến từ Italy được sản xuất tại Indonesia. \r\nVỏ Pirelli Angel Scooter được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt khi vào cua và thoát nước cực tốt trên đường ướt."
            ],
            [
                "name" => "Lốp Dunlop K330A (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop K330A 100/80-16 - 120/80-16 chính hãng Indonesia dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nVỏ Dunlop K330A thiết kế gai nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt. \r\nVỏ Dunlop K330A 100/80-16 - 120/80-16 với chất liệu cao su mềm tạo độ bám tốt cùng với lực cản lăn thấp khi vận hành giúp tiết kiệm nhiên liệu."
            ],
            [
                "name" => "Lốp Michelin City Grip 2 (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Michelin City Grip 2 (100/80-16 - 120/80-16) rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 (100/80-16 - 120/80-16) dành cho xe Honda SH 125i , 150i , 160i các đời."
            ],
            [
                "name" => "Lốp Conti Scoot (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Conti Scoot (100/80-16 - 120/80-16) dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \r\nVỏ Conti Scoot (100/80-16 - 120/80-16) được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \r\nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Lốp Dunlop Scoot Smart 2 (100/80-16 - 120/80-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Lốp Dunlop Scoot Smart 2 100/80-16 - 120/80-16 chính hãng Indonesia dành cho xe Honda SH 125i , 150i , 160i các đời. \r\nLốp Dunlop Scoot Smart 2 100/80-16 - 120/80-16 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm so với mẫu gai K330A cũ là độ bên tăng 20% và hiệu suất của vỏ tăng 10%."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR79 chính hãng 90/80-14 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe  AB, Vario, Click, Vision. \nVỏ xe Champion SHR79 chính hãng 90/80-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ Dunlop 120/80-16 Scoot Smart 2", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop 120/80-16 Scoot Smart 2 chính hãng Indonesia dành cho bánh sau xe Honda SH125 và 150 các đời. \r\nVỏ Dunlop 120/80-16 Scoot Smart 2 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm so với mẫu gai Scoot Smart cũ là độ bền tăng 20% và hiệu suất của vỏ tăng 10%."
            ],
            [
                "name" => "Vỏ Dunlop 100/80-16 Scoot Smart 2", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop 100/80-16 Scoot Smart 2 chính hãng Indonesia dành cho bánh trước xe Honda SH, ngoài ra có thể gắn cho xe Liberty, Medley. \r\nVỏ Dunlop 100/80-16 Scoot Smart 2 thiết kế mới gai khá nhiều, dày, bám đường cực tốt khi đi cua và thoát nước cực tốt trên đường ướt, ưu điểm so với mẫu gai Scoot Smart cũ là độ bền tăng 20% và hiệu suất của vỏ tăng 10%."
            ],
            [
                "name" => "Vỏ Michelin City Extra 60/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Extra 60/90-17, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin.  Vỏ Michelin City Extra 60/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả.  Công nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng.  Vỏ Michelin City Extra 60/90-17 gắn được các dòng xe Wave, Dream, Future... được sản xuất chính hãng Michelin."
            ],
            [
                "name" => "Vỏ Michelin City Extra 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Extra 70/90-17, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 70/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra 70/90-17 gắn được các dòng xe Wave, Dream, Future... được sản xuất chính hãng Michelin."
            ],
            [
                "name" => "Vỏ Michelin City Extra 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Extra 80/90-17, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 80/90-17 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra 80/90-17 gắn được các dòng xe Wave, Dream, Future... được sản xuất chính hãng Michelin."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 140/70-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 140/70-16 dành cho bánh sau xe SH300 và Sh350i thích đi size to hơn nguyên bản."
            ],
            [
                "name" => "Vỏ xe ContiScoot 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe ContiScoot 100/80-16 dành cho bánh trước xe SH. \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 100/80-16 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe ContiScoot 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe ContiScoot 120/80-16 dành cho bánh sau xe SH. \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 100/80-16 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe ContiScoot 110/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe ContiScoot 110/70-12 có thể gắn vừa xe MSX, Vespa, Grande,.... \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 110/70-12 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ. \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe ContiScoot 120/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe ContiScoot 120/70-12 có thể gắn vừa xe MSX, Vespa, Grande, Scoopy.... \nContiScoot - Dòng vỏ xe tay ga cao cấp ưu việt mới của thương hiệu lốp Continental nổi tiếng. \nVỏ xe Continental ContiScoot 120/70-12 được kế thừa thiết kế hoa gai ContiRoadAttack3 hoàn hảo dành cho dòng xe moto Sport Touring hiệu suất cao, với nhiều ưu điểm nổi bật: Hiệu suất bám đường ướt cao, an toàn, linh hoạt, thoải mái & bền bỉ.  \nVỏ ContiScoot nhập khẩu SOUTH KOREA."
            ],
            [
                "name" => "Vỏ xe Timsun 90/90-14 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Timsun 90/90-14 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\nVỏ xe Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \r\nVỏ xe Timsun 90/90-14 TS692 chính hãng xuất xứ China, có thể gắn nhiều loại xe ga: AB, Vario, Click, Vision..."
            ],
            [
                "name" => "Vỏ xe Timsun 80/90-14 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Timsun 80/90-14 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \n Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 80/90-14 TS692 chính hãng xuất xứ China, có thể gắn nhiều loại xe ga: AB, Vario, Click, Vision..."
            ],
            [
                "name" => "Vỏ xe Timsun 80/90-17 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Timsun 80/90-17 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \r\n Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \r\nVỏ xe Timsun 80/90-17 TS692 chính hãng xuất xứ China, có thể gắn nhiều loại xe số, Wave, Dream, Future, Exciter, Sonic, Raider, Satria..."
            ],
            [
                "name" => "Vỏ xe Timsun 70/90-17 TS692 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Timsun 70/90-17 TS692 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \n Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 70/90-17 TS692 chính hãng xuất xứ China, có thể gắn bánh trước nhiều loại xe số, Wave, Dream, Exciter, Sonic, Raider, Satria..."
            ],
            [
                "name" => "Vỏ xe Timsun 110/70-17 TS823 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Timsun 110/70-17 TS823 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \nVỏ xe Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 110/70-17 TS823 chính hãng xuất xứ China, có thể gắn nhiều loại xe số thể thao như Exciter, Winner..."
            ],
            [
                "name" => "Vỏ xe Timsun 80/90-17 TS823 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Timsun 80/90-17 TS823 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. \nVỏ xe Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 80/90-17 TS823 chính hãng xuất xứ China, có thể gắn nhiều loại xe số, Wave, Dream, Exciter..."
            ],
            [
                "name" => "Vỏ xe Timsun 70/90-17 TS823 chính hãng", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Timsun 70/90-17 TS823 là dòng vỏ xe đạt tiêu chuẩn cao cấp, đạt độ bền, khả năng chịu tải và tốc độ tối đa đều cao hơn tiêu chuẩn quốc tế 30%. Thương hiệu Timsun ra đời năm 2006 cùng với nhiều sản phẩm đột phá, chất lượng nên đã riêng cho mình thương hiệu uy tín, sản phẩm rất được ưa chuộng tại thị trường Nhật Bản. Timsun đi đầu về việc xoá bỏ định kiến xấu của cả thế giới bởi sản phẩm Made in China bằng những loại vỏ xe cao cấp, chất lượng với độ bám đường và độ bền tuyệt đối. \nVỏ xe Timsun 70/90-17 TS823 chính hãng xuất xứ China, có thể gắn bánh trước nhiều loại xe số, Wave, Dream, Exciter..."
            ],
            [
                "name" => "Vỏ Pirelli 100/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 100/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 100/90-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, Vario, PCX, Sh Mode..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2  size 130/70-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 130/70-16 dành cho bánh sau xe SH300 và Sh350i."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR79 chính hãng 90/90-14 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe  AB, Vario, Click, Vision. \nVỏ xe Champion SHR79 chính hãng 90/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR79 chính hãng 80/90-14 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe  AB, Vario, Click, Vision. \nVỏ xe Champion SHR79 chính hãng 80/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 120/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR79 chính hãng 120/70-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe MSX, Vespa, Grande \nVỏ xe Champion SHR79 chính hãng 120/70-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 110/70-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR79 chính hãng 110/70-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe MSX, Vespa, Grande \nVỏ xe Champion SHR79 chính hãng 110/70-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 110/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR79 chính hãng 110/90-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR79 chính hãng 110/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR79 chính hãng 100/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR79 chính hãng 100/90-12 có nhiều gai kiểu Grip tách nước cực tốt, an toàn khi đi đường ướt, có thể gắn vừa xe Scoopy, Zoomer, Freego \r\nVỏ xe Champion SHR79 chính hãng 100/90-12 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR67 chính hãng 110/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR67 chính hãng 110/90-12 có kiểu gai thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \r\nVỏ xe Champion SHR67 chính hãng 110/90-12 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR67 chính hãng 100/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR67 chính hãng 100/90-12 có kiểu gai thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR67 chính hãng 100/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 90/90-14 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Vario, Click, AB. \nVỏ xe Champion SHR78 chính hãng 90/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 80/90-14 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Vario, Click, AB. \nVỏ xe Champion SHR78 chính hãng 80/90-14 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 110/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 110/90-12 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR78 chính hãng 110/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 100/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 100/90-12 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Scoopy, Zoomer, Freego. \nVỏ xe Champion SHR78 chính hãng 100/90-12 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 110/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Exciter, Winner. \r\nVỏ xe Champion SHR78 chính hãng 110/70-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 120/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Exciter, Winner. \nVỏ xe Champion SHR78 chính hãng 120/70-17 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 130/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe Exciter, Winner, moto PKL 150-400cc. \r\nVỏ xe Champion SHR78 chính hãng 130/70-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 140/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 140/70-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe moto PKL 150-400cc. \r\nVỏ xe Champion SHR78 chính hãng 140/70-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 150/60-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 150/60-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe PKL 250-400cc. \r\nVỏ xe Champion SHR78 chính hãng 150/60-17 được sản xuất tại Thái Lan. \r\nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4).  \r\nCHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ xe Champion SHR78 chính hãng 160/60-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Champion SHR78 chính hãng 160/60-17 có kiểu gai Rosso thể thao tuyệt đẹp, có thể gắn vừa xe PKL 250-400cc. \nVỏ xe Champion SHR78 chính hãng 160/60-17 được sản xuất tại Thái Lan. \nThương hiệu CHAMPION là của nhà máy Thai Sin Rubber Industry (TSR) được thành lập vào năm 1963, tính theo thời điểm năm 2021 là đã tròn 58 tuổi vững mạnh trên thị trường THAILAND và các thị trường xuất khẩu quốc tế. CHAMPION nổi tiếng cho ra những sản phẩm hạng nặng như Lốp Xe cho xe Container, Xe Tải, Xe Bus, Xe Ô TÔ, Xe Máy, Xe Đạp... Chất lượng đạt chứng chỉ E-Mark (Quy định sản phẩm đáp ứng An Toàn và Môi Trường do Châu Âu cấp phép, trên vỏ có logo E4). \n CHAMPION đang dẫn đầu số 1 tại THAILAND về ngành công nghiệp sản xuất Lốp Xe từ hạng nặng cho đến hạng nhẹ."
            ],
            [
                "name" => "Vỏ Dunlop 120/80-16 gai D451 zin theo xe SH Ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 030058  \r\nVỏ Dunlop 120/80-16 gai D451 zin theo xe SH Ý, gắn được cho SHVN, được coi là mẫu vỏ xe tốt nhất hiện nay do khả năng bám đường cực tốt an toàn tuyệt đối khi lưu thông trên đường theo tiêu chuẩn Châu Âu cùng với đó là sự êm ái, dễ chịu cho người lái xe khi đi trên những quãng đường dài hay đường xấu, ghồ ghề. \r\nVỏ Dunlop 120/80-16 gai D451 dành cho sau SH Ý, SHVN,... \r\nVỏ Dunlop 120/80-16 gai D451 được sản xuất tại Slovenia."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 120/70-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 120/70-17 gắn được các xe: Winner, Exciter 150, Exciter 155,...\r\n  Vỏ Michelin Moto GP 120/70-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 80/90-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 80/90-17 gắn được hầu hết tất cả các loại xe số phổ thông: Wave Dream, Exciter, Raider, Axelo, Future, Sirius, Jupiter...\r\n  Vỏ Michelin Moto GP 80/90-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 70/90-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 70/90-17 gắn được hầu hết tất cả các loại xe số phổ thông: Wave Dream, Exciter, Raider, Axelo, Future, Sirius, Jupiter...\r\n  Vỏ Michelin Moto GP 70/90-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 100/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 100/90-14 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 100/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, PCX...\r\n  Vỏ Michelin Moto GP 100/90-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 90/90-14 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 90/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, Vision, Luvias...\r\n  Vỏ Michelin Moto GP 90/90-14 được nhập từ chính hãng Michelin Thái Lan"
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 80/90-14 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 80/90-14 gắn được vỏ trước cho các xe: Air Blade, Click, Vario, Vision, Luvias.......\r\n  Vỏ Michelin Moto GP 80/90-14 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin City Extra 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Extra 90/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 90/90-14 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt, chứa nước vào và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả \r\nVỏ Michelin City Extra 90/90-14 gắn được các dòng xe AB, Vario, Click, Vision... được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin City Extra 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Extra 80/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành cho các cung đường ẩm ướt. Sản phẩm được lấy công nghệ từ vỏ dòng vỏ Pilot Road 4 và Road 5 các dòng xe PKL của Michelin. \r\nVỏ Michelin City Extra 80/90-14 có độ ổn định và khả năng xử lý nước  trên đường  tuyệt vời nhờ các rãnh gai nhỏ trên bề mặt vỏ, rãnh gai nhỏ tiếp xúc với mặt đường ướt và xé ra 2 bên trong lúc vận hành, giúp xe không trơn trượt một cách hiệu quả. \r\nCông nghệ mật độ cao được hỗ trợ bởi 3 lớp bố được gia cường để tăng khả năng chống đinh, chống đâm thủng. \r\nVỏ Michelin City Extra 80/90-14 gắn được các dòng xe AB, Vario, Click, Vision... được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 100/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Anakee Street 100/80-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 100/80-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 100/80-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Anakee Street 90/80-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 90/80-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 90/80-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Anakee Street 90/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 90/90-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 90/90-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia."
            ],
            [
                "name" => "Vỏ Michelin Anakee Street 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Anakee Street 80/90-14, một sản phẩm mới của thương hiệu nổi tiếng Michelin, thiết kế dành riêng cho đường hỗn hợp, cả đường trường và đường mòn. Sản phẩm được lấy công nghệ từ vỏ Anakee  các dòng xe PKL Adventure của Michelin. \r\nVỏ Michelin Anakee Street 80/90-14 có độ ổn định và khả năng xử lý tay lái tuyệt vời nhờ các khối gai lớn trên bề mặt lốp. Các khối này tạo thành các rãnh, giúp tăng khả năng chịu lực của lốp trên đường và Thiết kế hoa lốp được tối ưu hóa nhằm đem lại khả năng bám đường và mòn đều dưới mọi điều kiện địa hình. Bố trí gai lốp theo hình chữ V giúp tối ưu hóa khả năng bám đường, dù là đường rải nhựa hay không. \r\nVỏ Michelin Anakee Street 80/90-14 gắn được các dòng xe AB, Vario, Click, Vision...Vỏ Michelin Anakee Street 80/90-14 được sản xuất chính hãng Michelin tại Indonesia"
            ],
            [
                "name" => "Vỏ Metzeler 80/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Metzeler 80/80-14, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 80/80-14 gắn được bánh trước cho xe AB, Click, Vision, Luvias..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 110/70-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỏ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 110/70-16 dành cho bánh trước  xe SH300 và Sh350i."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nVỏ Michelin Pilot Street 2 size 120/70-17 gắn được các xe: Winner, Exciter 150, Exciter 155. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Cặp vỏ IRC SS-530R chính hãng Thái Lan cho Honda SH", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cặp vỏ IRC SS-530R chính hãng Thái Lan cho Honda SH (bánh trước và sau), hàng IRC Thái Lan nên rất lượng tốt hơn nhiều so với IRC Việt Nam. Gai vỏ giống như vỏ IRC zin theo xe Honda SH nên rất tiện lợi để khách  thay thế vỏ xe chất lượng hơn nhưng vẫn giữ được nét zin nguyên bản. \nCặp vỏ IRC SS-530R chính hãng Thái Lan gồm bánh trước 100/80-16 và bánh sau 120/80-16 gắn được cho dòng xe Honda SH 125/150 các đời."
            ],
            [
                "name" => "Vỏ xe IRC Maxing DR-5 80/90-14 chính hãng Thái Lan", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ IRC MAXING Kiểu Gai DR-5 80/90-14, đây là vỏ Phân Phúc Đặc Biệt chính hãng của IRC THAILAND. \nVỏ IRC Maxing DR-5 có mẫu Gai CITY thế hệ mới bám đường cực tốt phù hợp cho mọi điều kiện thời tiết khô ráo hay ẩm ướt. Hợp chất cao su đặc biệt cho những quảng đường dài và tốc độ cao. \nVỏ IRC MAXING DR-5 80/90-14 gắn được cho các dòng xe: AB, Click, Vario, Vision..."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 80/90-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop D307 size 80/90-16 dành cho lốp sau các loại xe như Nouvo, Hayate, SH Mode, Vision 2021, Impluse,... \r\nThương hiệu lốp Dunlop chất lượng và giá thành hợp lí đã được khách hàng ưa chuộng. \r\nVỏ xe Dunlop D307 80/90-16 chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành, vỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Metzeler 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Metzeler 90/80-14, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 90/80-14 gắn được bánh sau cho xe AB, Click, Vision, Luvias..."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 100/90-10", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh. \r\nVỏ Michelin Pilot Street 2 size 100/90-10 gắn được các loại xe: Atilla, Lead, Latte, Acruzo... \r\nVỏ Michelin 100/90-10 Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Stretto 90/80-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, Vision, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Stretto 90/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nVỎ Michelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 100/80-16 dành cho bánh trước  xe SH."
            ],
            [
                "name" => "Vỏ xe Camel Pilot 888 size 100/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Camel Pilot 888 100/70-17 có gai giống Pilot Street 1 đã từng rất được ưu thích bởi anh em Biker, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel Pilot 888 100/70-17 gắn vừa xe  Exciter135-150, Winner... \nVỏ xe Camel Pilot 888 100/70-17 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ xe Camel Pilot 888 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Camel Pilot 888 80/90-17 có gai giống Pilot Street 1 đã từng rất được ưu thích bởi anh em Biker, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel Pilot 888 80/90-17 gắn vừa xe Wave, Dream, Sirius, Jupiter, Sonic, Exciter135-150, Winner,... \nVỏ xe Camel Pilot 888 80/90-17 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 80/90-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 80/90-16 gắn được các loại xe: SH Mode, Nouvo...\r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Dunlop 140/70-14 Scoot Smart", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop 140/70-14 Scoot Smart dành cho Yamaha NVX, thương hiệu Dunlop đã quá quen thuộc với người tiêu dùng Việt Nam với chất lượng bám đường tốt kể cả trên đường mưa, ẩm ướt... \r\nVỏ xe Dunlop 140/70-14 Scoot Smart dành cho Yamaha NVX được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Dunlop 110/80-14 Scoot Smart", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop 110/80-14 Scoot Smart dành cho Yamaha NVX, Honda PCX, thương hiệu Dunlop đã quá quen thuộc với người tiêu dùng Việt Nam với chất lượng bám đường tốt kể cả trên đường mưa, ẩm ướt... \r\nVỏ xe Dunlop 110/80-14 Scoot Smart dành cho Yamaha NVX, Honda PCX được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Pirelli 70/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 70/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 70/90-14 Diablo Rosso Sport gắn được cho Mio, Luvias, Janus..."
            ],
            [
                "name" => "Vỏ Pirelli 140/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 140/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 140/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter 150, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 150/70-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 150/70-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 150/70-14  gắn được cho bánh sau xe NVX đi size to"
            ],
            [
                "name" => "Vỏ Michelin City Grip 2 size 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu. \r\nMichelin City Grip 2 được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip 2 size 120/80-16 dành cho bánh sau xe SH."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 150/60-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 150/60-17 gắn được các dòng xe moto tầm dưới 300cc như: Ninja 300, Z300, R3, CBR250, CBR150, R15, GSX150... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 130/70-17 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 130/70-17 gắn được các xe: Winner, Exciter 150 muốn đi bánh lớn và các dòng xe moto tầm dưới 300cc như: Ninja 300, Z300, R3, CBR250, CBR150, R15, GSX150... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 100/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 100/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, PCX... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 110/70-17 gắn được các xe: Exciter 135 muốn đi bánh sau to hoặc Winner, Exciter 150 muốn đi bánh nhỏ. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 80/90-17 gắn được bánh sau các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo...hoặc bánh trước Winner, Exciter 150 mới \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ xe Camel 563 size 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Camel 563 130/70-17 có gai Rosso Sport hình tia sét rất độc đáo, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel 563 130/70-17 gắn vừa xe Exciter 150, Winner, các xe moto 150cc,... \nVỏ xe Camel 563 130/70-17 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ xe Camel 563 size 70/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Camel 563 70/90-14 có gai Rosso Sport hình tia sét rất độc đáo, khi gắn lên xe nhìn trông thể thao, vỏ Camel được lợi thế gai khá đẹp và giá cũng vô cùng hợp lí. \nVỏ xe Camel 563 70/90-14 gắn vừa xe Mio, Luvias... \nVỏ xe Camel 563 70/90-14 mang thương hiệu Camel Thái Lan được sản xuất tại Việt Nam."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 100/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Stretto 100/80-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao.\r\nVỏ xe Aspira Stretto 100/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Stretto 90/90-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, Vision, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Stretto 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Stretto 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Stretto 80/90-14 với gai vỏ hoàn toàn mới, nhìn rất hiện đại, gắn size zin cho Vario/Click mới và AB, Vision...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Stretto thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Stretto 80/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 120/70-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 120/70-14 gắn được cho bánh sau xe PCX hoặc bánh trước xe Forza 300, NVX."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 90/80-17 gắn được bánh sau các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo...hoặc bánh trước Winner, Exciter 150 mới \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 70/90-17 gắn được các xe số: Sonic, Satria, Raider, Wave, Dream, Sirius, Jupiter, Future, Axelo... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 140/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 140/70-17 gắn được các xe: Winner, Exciter 150 muốn đi bánh lớn và các dòng xe moto tầm dưới 300cc như: Ninja 300, Z300, R3, CBR250, CBR150, R15, GSX150... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 100/80-17 gắn được các xe: Exciter 135 hay Winner, Exciter 150 muốn đi bánh nhỏ. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 60/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 60/90-17 gắn được bánh trước các loại xe: Wave, Dream đời cũ hoặc các loại xe số phổ thông đi bánh nhỏ. \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 70/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin Pilot Street 2 size 70/90-14 gắn được bánh trước các loại xe: Luvias, Mio, Janus.... \r\nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Metzeler 70/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Metzeler 70/90-14, với thiết kế hoàn toàn mới, kiểu dáng rất thể thao và là dòng cao cấp hơn nhiều so với các loại thông thường. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy, chất lượng đã được rất nhiều khách hàng tin dùng bởi thiết kế rất đẹp và độ bám đường cực chuẩn. \nVỏ Metzeler 70/90-14 gắn được bánh trước cho xe Luvias, Mio..."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \nVỏ Michelin Pilot Street 2 size 80/90-14 gắn được bánh trước các loại xe: Air Blade, Click, Vario, Vision, Luvias... \nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Street 2 size 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Street 2 hoàn toàn mới được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn. Gai vỏ rất sâu có rảnh dày từ trong ra ngoài nên có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \nVỏ Michelin Pilot Street 2 có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \nVỏ Michelin Pilot Street 2 size 90/90-14 gắn được bánh sau các loại xe: Air Blade, Click, Vario, Vision, Luvias... \nVỏ Michelin Pilot Street 2 hoàn toàn mới được sản xuất tại Thái Lan."
            ],
            [
                "name" => "Vỏ Metzeler 130/70-12 Me 7 Teen", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 160025  \r\nVỏ Metzeler 130/70-12 Me 7 Teen, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường, giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \r\nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \r\nVỏ xe Metzeler 130/70-12 Me 7 Teen gắn được các loại xe: Vespa Sprint, GTS, Honda MSX..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 100/80-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 100/80-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, Vario, PCX..."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 90/80-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 90/80-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, Vario, PCX..."
            ],
            [
                "name" => "Vỏ Pirelli 90/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 90/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 90/90-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, vario, AB, Vision..."
            ],
            [
                "name" => "Vỏ Pirelli 80/90-14 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 80/90-14 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 80/90-14 Diablo Rosso Sport gắn được hầu như tất cả loại xe tay ga: Honda Click, vario, AB, Vision..."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 90/80-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 90/80-14 gắn được cho xe Vario/Click, PCX,AB, Vision..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 100/80-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 100/80-14 gắn được cho xe Vario/Click, PCX..."
            ],
            [
                "name" => "Vỏ Pirelli 110/70-12 Diablo Rosso Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 110/70-12 Diablo Rosso Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 110/70-12 gắn được cho bánh trước xe các dòng xe Vespa Sprint, Primavera và Yamaha Grande."
            ],
            [
                "name" => "Vỏ Metzeler 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 160019  \r\nMetzeler 100/80-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \r\nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \r\nMetzeler 100/80-17 gắn được bánh sau các dòng xe số trên thị trường như Exicter 135, WInner, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ xe Dunlop D102A size 120/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop D102A size 120/70-17 không ruột dành cho bánh sau Winner 150, Exciter 150 hoặc FZ150i, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop D102A size 120/70-17 chính hãng Dunlop, made in Indonesia."
            ],
            [
                "name" => "Vỏ Pirelli 150/60-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 150/60-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 150/60-17 Diablo Rosso Sport gắn được các loại xe Moto 300-500cc như: CBR250, CBR500, R3, R25, MT03. Z300, Ninja 300-400..."
            ],
            [
                "name" => "Vỏ Pirelli 130/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 130/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 130/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter 150, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 100/80-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 100/80-17 Diablo Rosso Sport gắn được bánh sau hầu như tất cả loại xe số phổ thông: Winner, Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 90/80-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 90/80-17 Diablo Rosso Sport gắn được bánh trước Winner, Exciter 150 và bánh sau hầu như tất cả loại xe số phổ thông: Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 90/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 90/80-14 gắn size zin cho Vario/Click mới và các xe PCX, AB, Vision...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 90/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 120/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \r\nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \r\nVỏ Pirelli 120/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter 150, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 110/70-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 110/70-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 110/70-17 Diablo Rosso Sport gắn được các loại xe số côn tay thể thao: Exciter, Winner, TFX, CBR150, CB150, R15...."
            ],
            [
                "name" => "Vỏ Pirelli 80/90-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 80/90-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 80/90-17 Diablo Rosso Sport gắn được hầu như tất cả loại xe số phổ thông: Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ Pirelli 70/90-17 Diablo Rosso Sport", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 70/90-17 Diablo Rosso Sport, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao, đặc biệt gai mới Diablo Rosso Sport thiết kế các rãnh thoát nước kiểu Flash nhìn rất đẹp, đậm chất thể thao. \nVỏ Pirelli Diablo Rosso Sport được nhắc đến với độ bền và cao su cao cấp, giúp xe bám đường cực tốt, an toàn khi vào cua, thoát nước cực tốt khi đi mưa. \nVỏ Pirelli 70/90-17 Diablo Rosso Sport gắn được cho bánh trước hầu như tất cả loại xe số phổ thông: Exciter, Wave/Dream, Future, Jupiter, SIrius, Sonic, Satria..."
            ],
            [
                "name" => "Vỏ Pirelli 130/70-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 130/70-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 130/70-16 gắn được cho bánh sau xe Honda SH 300i, SH350i..."
            ],
            [
                "name" => "Vỏ Pirelli 110/70-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 110/70-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 110/70-16 gắn được cho bánh trước xe Honda SH 300i, SH350i..."
            ],
            [
                "name" => "Vỏ Pirelli 120/80-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 120/80-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 120/80-16 gắn được cho bánh sau xe Honda SH 125/150..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-16 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 100/80-16 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 100/80-16 gắn được cho bánh trước xe Honda SH 125/150..."
            ],
            [
                "name" => "Vỏ Pirelli 130/70-12 Diablo Rosso Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 130/70-12 Diablo Rosso Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 130/70-12 gắn được cho bánh sau xe các dòng xe Vespa: Sprint, Primavera, GTS, 946 và Honda MSX."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-12 Diablo Rosso Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 120/70-12 Diablo Rosso Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 120/70-12 gắn được cho bánh trước xe các dòng xe Vespa: Sprint, Primavera, GTS, 946 và Honda MSX."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 100/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop D307 size 100/90-14  dành cho lốp sau các loại xe như Vario/Click 2018, PCX, SH Mode...hoặc xe Air Blade muốn đi bánh to. \r\nThương hiệu Dunlop chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành. Vỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 140/70-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 140/70-14 gắn được cho bánh sau xe Yamaha NVX, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 140/70-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 110/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 110/80-14 gắn được cho xe NVX các loại hoặc bánh sau Vario, PCX mới, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’.  \nƯu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 110/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Michelin City Grip 90/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Michelin City Grip 90/90-12 rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Thái Lan, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \r\nVỏ Michelin City grip 90/90-12 gắn được trên bánh trước xe Lead, SCR, Nozza, Acruzo..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 100/90-10", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 070628  \r\nVỏ xe Michelin City Grip 100/90-10 rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Thái Lan, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \r\nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \r\nVỏ Michelin City grip 100/90-10 gắn được trên bánh sau xe Lead, SCR, Elizabeth, Spacy..."
            ],
            [
                "name" => "Cặp vỏ Dunlop D451 zin theo xe SH ý", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop D451 zin theo xe Honda Sh Ý, gắn được cho SHVN được coi là mẫu vỏ xe tốt nhất hiện nay do khả năng bám đường cực tốt an toàn tuyệt đối khi lưu thông trên đường theo tiêu chuẩn Châu Âu cùng với đó là sự êm ái, dễ chịu cho người lái xe khi đi trên những quãng đường dài hay đường xấu, ghồ ghề. \r\nThông số vỏ: trước 100/80-16 và sau 120/80-16. \r\nVỏ Dunlop D451 được sản xuất tại Slovenia"
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 120/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 120/80-16 gắn được cho xe Sh125-150 các loại, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 120/80-16 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 100/80-16", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 100/80-16 gắn được cho xe Sh125-150 các loại, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 100/80-16 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 110/70-17 gắn được cho xe số như Exciter, Winner, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Sportivo 110/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Pirelli 140/70-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 140/70-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 140/70-14  gắn được cho bánh sau xe NVX"
            ],
            [
                "name" => "Vỏ Pirelli 110/80-14 Angel Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Mã: 150015  \nVỏ xe Pirelli 110/80-14 Angel Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 110/80-14  gắn được cho bánh trước xe NVX, bánh sau PCX, Click, Vario..."
            ],
            [
                "name" => "Vỏ Dunlop D404F size 100/90-18", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop D404F size 100/90-18 không ruột dành cho các loại xe Moto Classic như: Brixton, Cafe Race, Tracker... vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ Dunlop D404F size 100/90-18 chính hãng Dunlop, made in Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop D102A size 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop D102A size 130/70-17 không ruột dành cho bánh sau đi size to Winner 150, Exciter 150 hoặc FZ150i, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop D102A size 130/70-17 chính hãng Dunlop, made in Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop D102A size 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop D102A size 70/90-17 mới không ruột dành cho bánh trước các loại xe số phổ thông, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop D102A size 70/90-17 là hàng chính hãng Dunlop, made in Indonesia"
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 100/80-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 100/80-17 gắn được vỏ sau Winner rất đẹp, vỏ sau xe Exciter 135, Raider...gắn được vỏ sau xe Wave, Dream, Axelo, Future...muốn đi bánh lớn.\r\n  Vỏ Michelin Moto GP 100/80-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ Michelin Pilot Moto GP 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin Pilot Moto GP 90/80-17 lần đầu tiên Michelin áp dụng công nghệ vỏ của đường đua mini cho dòng xe phổ thông. Cho hiệu suất bám đường vượt trội. Với thiết kế đậm chất thể thao, độc đáo, được nhiều khách hàng đánh giá rất cao. \r\n  Vỏ Michelin Pilot MotoGP 90/80-17 gắn được vỏ trước xe Winner, vỏ sau xe Exciter 135 muốn đi bánh nhỏ, vỏ sau xe Wave, Dream, Axelo, Future...muốn đi bánh lớn.\r\n  Vỏ Michelin Moto GP 90/80-17 được nhập từ chính hãng Michelin Thái Lan."
            ],
            [
                "name" => "Vỏ xe Dunlop TT902 size 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop 90/80-17 chính hãng không ruột dành cho bánh sau các loại xe số phổ thông đi size lớn, vỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop TT902 size 90/80-17 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ Maxxis 110/70-17 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 110/70-17 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 110/70-17 gắn vừa cho Exciter 135 muốn đi size sau to và Winner, Exciter 150 muốn đi bánh nhỏ."
            ],
            [
                "name" => "Vỏ Michelin City Grip 140/70-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Michelin City Grip rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \nVỏ Michelin City grip 140/70-14 gắn được trên bánh sau xe Yamaha NVX."
            ],
            [
                "name" => "Vỏ Pirelli 90/80-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 90/80-17 Angel City, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 90/80-17 gắn được cho bánh sau hầu như tất cả loại xe số phổ thông đi bánh to như: Wave, Dream, Future, Axelo, Sport, FX, raider...hoặc bánh trước Winner 150"
            ],
            [
                "name" => "Vỏ Pirelli 110/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 110/70-17 Angel City, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \nVỏ Pirelli 110/70-17 gắn được cho bánh sau Exciter 150, Exciter 135, Winner, FZ..."
            ],
            [
                "name" => "Vỏ Maxxis 120/70-11 gai M6017", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 120/70-11 bánh sau dành cho Vespa Primavera. Thương hiệu đã quá quen thuộc tại thị trường Việt Nam, vỏ Maxxis bám đường khá tốt, an toàn khi lưu thông trên các cung đường xấu, trơn trượt và quan trọng là Vỏ Maxxis có giá cả khá mềm so với các thương hiệu khác."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "vỏ xe Aspira Terreno 70/90-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 70/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Maxxis 100/70-17 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 100/70-17 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 100/70-17 gắn vừa cho Exciter 135, Raider, Axelo...các dòng xe số khác hoặc Winner, Exciter 150 muốn đi bánh nhỏ"
            ],
            [
                "name" => "Vỏ Maxxis 90/90-16 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 90/90-16 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 90/90-16 gắn vừa cho xe Yamaha Nouvo, Suzuki Hayate, Impulse muốn đi bánh sau to cho đầm xe."
            ],
            [
                "name" => "Vỏ Pirelli 150/60-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 150/60-17 Angel City dòng cao cấp, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 150/60-17 gắn được cho bánh sau lớn cho Exciter 150, các dòng xe Moto 150cc như CBR150, R15, Suzuki GSX..."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Terreno 130/70-17 gắn được cho xe côn tay như Exciter, Winner, CBR150, R15...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \r\nVỏ xe Aspira Terreno 130/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 110/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Terreno 110/70-17 gắn được cho xe số phổ thông như  Exciter, Axelo, Raider, FX, FZ, Winner...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \r\nVỏ xe Aspira Terreno 110/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Terreno 100/80-17 gắn được cho xe số phổ thông như  Exciter, Axelo, Raider, FX, FZ, Winner...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 100/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Terreno 90/90-14 gắn được cho xe Air Blade, Vision, Click, Vario...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Terreno 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Terreno 80/90-14 gắn được cho xe Air Blade, Vision, Click, Vario...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Terreno thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, gai vỏ cực ngầu, lạ, vỏ cứng cáp rất lâu mòn, có thể dùng tốt trên 2 cung đường thành phố hoặc địa hình nhẹ. \nVỏ xe Aspira Terreno 80/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 130/70-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 130/70-17 gắn được cho xe số như Exciter, Winner, CBR150, R15, GSX150...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Sportivo 130/70-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 110/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 110/80-17 gắn được cho xe số như Exciter, Winner, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 110/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 100/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 100/80-17 gắn được cho xe số như Exciter, Winner, ...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \r\nVỏ xe Aspira Sportivo 100/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 90/80-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 90/80-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 80/90-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 80/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 70/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "vỏ xe Aspira Sportivo 70/90-17 gắn được cho xe số phổ thông như Wave, Dream, Blade, Future, Sirius, Jupiter, Exciter, Axelo, Raider, FX,...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 70/90-17 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 100/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 100/80-14 gắn được cho xe SH Mode, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 100/80-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ xe Aspira Sportivo 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Aspira Sportivo 90/90-14 gắn được cho xe Air Blade, Vision, Click, Vario, PCX...được sản xuất trên cùng dây chuyền trong cùng nhà máy sản xuất nên 2 thương hiệu lốp xe lớn của thế giới là Pirelli của Ý và Metzeller của Đức. Đồng điệu với những thương hiệu nổi tiếng, Aspira Sportivo thừa hưởng mọi tinh tuý từ chất lượng và độ chính xác cao nhất của Metzeller – giới Biker trên toàn thế giới ưu ái đặt cho mệnh danh là ”Vỏ xe máy thuộc đẳng cấp High-end’’. Ưu điểm lớn nhất chính là khả năng bám đường tốt cùng khoảng cách phanh ngắn, kiểm soát lái tối ưu và rất tiết kiệm nhiên liệu, êm ái thoải mái trên đường phố, yên tâm với những cú chặt cua ở tốc độ cao. \nVỏ xe Aspira Sportivo 90/90-14 được sản xuất ở Indonesia, được bảo hành 1 đổi 1 về vấn đề phù, nứt vỏ khi chưa cán đinh hoặc vật nhọn khác trong thời gian 3 tháng."
            ],
            [
                "name" => "Vỏ Maxxis 80/90-16 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 80/90-16 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 80/90-16 gắn vừa cho xe Yamaha Nouvo, Suzuki Hayate..."
            ],
            [
                "name" => "Vỏ Maxxis 70/90-16 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 70/90-16 với gai kim cương 3D không ruột đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 70/90-16 gắn vừa cho xe Yamaha Nouvo, Suzuki Hayate..."
            ],
            [
                "name" => "Vỏ Michelin City Grip 150/70-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Michelin City Grip rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \nVỏ Michelin City grip 150/70-14 gắn được trên bánh sau xe Yamaha NVX."
            ],
            [
                "name" => "Vỏ Michelin City Grip Pro 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Michelin City Pro được thiết kế sử dụng hàng ngày, có tuổi thọ cao nhờ có kết cấu chắc chắn, được mệnh danh là lốp chống đinh với công nghệ chống đâm thủng nhờ có 3 lớp bố được gia cường (Puncture Resistant Technology). Lốp có khả năng bám tốt trên đường đô thị kể cả đường trơn trượt giúp cho hành trình lái xe và người lái được an toàn. \r\nVỏ MICHELIN City Pro có quãng đường đi trung bình vượt trội trên 20.000 km. Đảm bảo độ bám đường tuyệt vời  ngay cả trên bề mặt đường trơn ướt nhờ thiết kế mặt gai mới, cấu trúc lốp và thiết kế rãnh.  \r\nVỏ Michelin City Grip Pro được sản xuất tại Thái Lan. \r\nVỏ Michelin City Grip Pro 80/90-14 gắn được bánh trước các loại xe: Air Blade, Click, Vario, Vision, Luvias..."
            ],
            [
                "name" => "Vỏ Maxxis 110/70-11 gai M6017", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 110/70-11 gai M6017 bánh trước dành cho Vespa Primavera, LX. Thương hiệu đã quá quen thuộc tại thị trường Việt Nam, vỏ Maxxis bám đường khá tốt, an toàn khi lưu thông trên các cung đường xấu, trơn trượt và quan trọng là Vỏ Maxxis có giá cả khá mềm so với các thương hiệu khác."
            ],
            [
                "name" => "Vỏ Michelin City Grip 110/80-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Michelin City Grip rất phù hợp với điều kiện ở Việt Nam, được sản xuất tại Châu Âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn. \nVỏ Michelin City Grip với thương hiệu hàng đầu, đảm bảo chất lượng tuyệt đối. \nVỏ Michelin City grip 110/80-14 gắn được trên bánh trước xe Yamaha NVX"
            ],
            [
                "name" => "Vỏ Metzeler 90/80-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Metzeler 90/80-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 90/80-17 gắn được bánh sau các dòng xe số trên thị trường. Hoặc bánh trước Winner, FZ, CBR...."
            ],
            [
                "name" => "Vỏ Metzeler 80/90-17", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Metzeler 80/90-17, với thiết kế hoàn toàn mới, dòng cao cấp hơn nhiều so với các loại thông thường. Giúp xe bám đường khá tốt khi khô ráo lẫn mưa gió. \nMETZELER là một công ty sản xuất vỏ xe của Đức với hơn 100 năm kinh nghiệm sản xuất vỏ xe máy. \nMetzeler 80/90-17 gắn được bánh sau các dòng xe số trên thị trường."
            ],
            [
                "name" => "Vỏ Maxxis 100/90-14 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 100/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 100/90-14 gắn vừa cho Honda AB, CLick, PCX, SH Mode...."
            ],
            [
                "name" => "Vỏ Maxxis 90/90-14 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 90/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 90/90-14 gắn vừa cho Honda Click, AB, Vision, Mio, Luvias, PCX..."
            ],
            [
                "name" => "Vỏ Maxxis 80/90-14 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Maxxis 80/90-14 với gai kim cương 3D đã quá quen thuộc với khách hàng, gai vỏ cực đẹp với độ bám đường ổn định, phù hợp cho mọi thời tiết, giá cả lại khá phù hợp. \nVỏ Maxxis 80/90-14 gắn vừa cho Honda Click, AB, Vision, Mio, Luvias..."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-16 Diablo Scooter", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 100/80-16 Diablo Scooter, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 100/80-16  gắn được cho bánh trước xe Honda SH, Shark....hoặc bánh sau to cho Yamaha Nouvo, Hayate..."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 90/90-12", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop D307 size 90/90-12 chính hãng, Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ Dunlop D307 size 90/90-12 gắn được bánh trước xe Lead, SCR....Vỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Lốp Michelin City Grip 2 (110/70-16 - 130/70-16)", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Cặp Lốp Michelin City Grip 2 size 110/70-16 và Michelin City Grip 2 130/70-16 cho Honda SH300i, SH350i với hoa vân City Grip 2 rất phù hợp với điều kiện ở Việt Nam. \r\nLốp Michelin City Grip 2 được sản xuất tại châu âu, với nhiều rãnh nhỏ trên bề mặt lốp sẽ đảm bảo việc di chuyển ở đường trơn, ôm cua gấp được an toàn hơn."
            ],
            [
                "name" => "Vỏ Pirelli 140/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 140/70-17 Angel City dòng cao cấp, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 140/70-17 gắn được cho bánh sau lớn cho Exciter 150, Raider Fi và Winner 150 và các dòng Moto 300cc trở xuống"
            ],
            [
                "name" => "Vỏ Pirelli 130/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 130/70-17 Angel City dòng cao cấp, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 130/70-17 gắn được cho bánh sau lớn cho Exciter 150, Raider Fi và Winner 150."
            ],
            [
                "name" => "Vỏ Pirelli 120/70-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 120/70-17 Angel City, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 120/70-17 gắn được cho bánh sau Exciter 150, Raider Fi và Winner 150."
            ],
            [
                "name" => "Vỏ Pirelli 100/80-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 100/80-17 Angel City, Pirelli thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 100/80-17 gắn được cho bánh sau Exciter 135 và hầu như tất cả loại xe số phổ thông muốn đi bánh lớn."
            ],
            [
                "name" => "Vỏ Pirelli 80/90-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 80/90-17 Angel City, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 80/90-17 gắn được cho bánh sau hầu như tất cả loại xe số phổ thông hoặc bánh trước Exciter 150 hoặc Winner 150"
            ],
            [
                "name" => "Vỏ Pirelli 70/90-17 Angel City", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Pirelli 70/90-17 Angel City, thương hiệu nổi tiếng từ Italy được sản xuất tại Indonesia. Chất lượng Pirelli đã được nhiều anh em trải nghiệm và đánh giá khá cao. \r\nVỏ Pirelli được nhắc đến với độ bền và cao su khá tốt, giúp xe bám đường cực tốt. \r\nVỏ Pirelli 70/90-17 gắn được cho bánh trước hầu như tất cả loại xe số phổ thông."
            ],
            [
                "name" => "Vỏ xe Dunlop D115 size 90/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop D115 size 90/90-14 dành cho lốp sau các loại xe như Air Blade các đời, Vario, Click các đời, Vision. \r\nThương hiệu lốp Dunlop chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành. \r\nVỏ xe Dunlop D115 size 90/90-14 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop D115 size 80/90-14", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop D115 size 80/90-14 dành cho lốp trước các loại xe như Air Blade các đời, Vario, Click các đời, Vision. \r\nThương hiệu lốp Dunlop chất lượng khá tốt, khả năng bám đường cao, an toàn khi vận hành. \r\nVỏ xe Dunlop D115 size 80/90-14 được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Maxxis 80/90-17 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Maxxis 80/90-17: Vỏ không ruột dành cho bánh sau các loại xe số phổ thông với chất lượng khá tốt, giá cả phải chăng, hợp với túi tiền của người tiêu dùng."
            ],
            [
                "name" => "Vỏ xe Maxxis 70/90-17 gai kim cương 3D", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Maxxis 70/90-17 gai kim cương 3D: Vỏ không ruột dành cho bánh trước các loại xe số phổ thông với chất lượng khá tốt, giá cả phải chăng, hợp với túi tiền của người tiêu dùng."
            ],
            [
                "name" => "Vỏ Dunlop D307 size 100/90-10", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ Dunlop D307 size 100/90-10. Vỏ không ruột dành cho bánh trước sau Attila hoặc sau của Lead, SCR, Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ được sản xuất tại Indonesia."
            ],
            [
                "name" => "Vỏ xe Dunlop Scoot Smart 130/70-13", 'number' => rand(1, 10000), 'price' => rand(50, 300) * 1000,  'like' => rand(1, 10000),
                "description" => "Vỏ xe Dunlop Scoot Smart 130/70-13 là vỏ không ruột dành cho bánh sau các loại xe Dylan, PS, @ \r\nVỏ Dunlop là thương hiệu nổi tiếng với chất lượng tuyệt vời, đảm bảo cho xe bám đường rất tốt. \r\nVỏ xe Dunlop Scoot Smart 130/70-13 được sản xuất tại Indonesia."
            ]

        ]);
    }
}
