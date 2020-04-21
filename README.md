# -Exercise--structure_Queue
[Bài tập] Cài đặt cấu trúc Queue
Mục tiêu
Luyện tập cài đặt cấu trúc Queue.

Mô tả
Trong phần này, chúng ta sẽ luyện tập việc cài đặt cấu trúc Queue sử dụng ngôn ngữ PHP. Chúng ta sẽ cài đặt để hiểu kỹ hơn về ý nghĩa của Queue, còn trong thực tế thì có thể chúng ta sẽ ưu tiên các cấu trúc đã được xây dựng sẵn của ngôn ngữ PHP mà không sử dụng cấu trúc do chúng ta tự xây dựng.

Hướng dẫn
Bước 1: Khai báo lớp Node với 2 thuộc tính:

$value dùng để chứa giá trị của một node
$next dùng để trỏ đến phần tử tiếp theo 
Bước 2: Khai báo lớp Queue với 2 thuộc tính:

$front dùng để trỏ đến node đầu tiên (đầu)
$back dùng để trỏ đến node cuối cùng (đuôi)
Bước 3: Khai báo hàm isEmpty() để kiểm tra xem Queue có đang rỗng hay không

Thử nghiệm
Bước 4: Khai báo hàm enqueue() để thêm một value vào phần đuôi của Queue

Thử nghiệm
Bước 5: Khai báo hàm dequeue() để lấy ra phần đầu của Queue

Thử nghiệm
Bước 6: Thử nghiệm

Chạy lại toàn bộ các thử nghiệm với kịch bản:

Tạo Queue
Thêm 3 phần tử vào Queue
Lấy ra 2 phần tử từ Queue
Kiểm tra xem Queue có rỗng hay không
Thêm 2 phần tử vào Queue
Lấy ra 3 phần tử từ Queue
Kiểm ra xem Queue có rỗng hay không