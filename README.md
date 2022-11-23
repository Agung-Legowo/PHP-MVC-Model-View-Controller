# PHP-MVC
Model-View-Controller atau MVC adalah sebuah metode untuk membuat sebuah aplikasi dengan memisahkan data dari tampilan dan cara bagaimana memprosesnya. Dalam implementasinya kebanyakan kerangka kerja dalam aplikasi web adalah berbasis arsitektur MVC

Model
Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database.

View
Bagian yang bertugas untuk menampilkan informasi dalam bentuk Graphical User Interface (GUI).

Controller
Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.

Alur Model View Controller
Setelah kamu mengetahui penjelasan dan komponen dari MVC, sekarang kita akan membahas alur proses dari MVC. Berikut ini adalah alur prosesnya.

Proses pertama adalah view akan meminta data untuk ditampilkan dalam bentuk grafis kepada pengguna.
Permintaan tersebut diterima oleh controller dan diteruskan ke model untuk diproses.
Model akan mencari dan mengolah data yang diminta di dalam database
Setelah data ditemukan dan diolah, model akan mengirimkan data tersebut kepada controller untuk ditampilkan di view.
Controller akan mengambil data hasil pengolahan model dan mengaturnya di bagian view untuk ditampilkan kepada pengguna.

Manfaat dari MVC
Ada beragam manfaat ketika kamu menerapkan MVC ini dalam pembuatan aplikasi kamu. Berikut ini adalah manfaatnya.

Proses pengembangan aplikasi menjadi lebih efisien
Penggunaan MVC dapat mempercepat pengembangan aplikasi karena kode dapat dikerjakan oleh beberapa developer. Contohnya dalam kasus pengembangan aplikasi web, bagian model dan controller dapat dikerjakan oleh back-end developer sedangkan bagian view dapat dilakukan oleh front-end developer.

Penulisan kode menjadi lebih rapi
Karena dibagi menjadi tiga bagian, maka penulisan kode akan jadi lebih rapi dan memudahkan developer lain untuk mengembangkan kode tersebut.

Dapat melakukan testing dengan lebih mudah
Untuk memastikan seluruh aplikasi bekerja sesuai dengan rencana maka langkah testing atau uji coba wajib dilakukan. Dengan menggunakan model view controller ini, maka proses uji coba dapat dilakukan pada setiap bagian.

Perbaikan bug atau error lebih cepat untuk diselesaikan
Penggunaan MVC dapat memudahkan developer untuk memperbaiki error atau bug yang terjadi. Developer dapat fokus untuk menemukan dan memperbaiki masalah yang terjadi karena kode dituliskan pada bagian-bagian terpisah.

Mempermudah pemeliharaan
Konsep MVC ini dapat mempermudah pemeliharaan aplikasi, karena script atau kode yang lebih rapi dan terstruktur sehingga mempermudah developer dalam proses pemeliharaan aplikasi.

Kesimpulan
Bagaimana sudah lebih paham kan? Jadi, MVC adalah metode dalam membuat aplikasi dengan cara memisahkan kode menjadi tiga bagian, yaitu Model, View, dan Controller. Karena memiliki tiga bagian yang saling berkaitan satu sama lain model view controller ini jadi memiliki banyak keuntungan untuk pengembangan dan pemeliharaan aplikasi.
