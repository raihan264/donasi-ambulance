              <!DOCTYPE html>
              <html lang="en">
              <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Bantu TK ABA Gaduhan</title>
                  <style>
                    body {
                        font-family: 'Arial', sans-serif;
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        display: flex;
                        flex-direction: column;
                        background-color: #f2f2f2; /* Warna background */
                    }

                    header {
                        background-color: #0d9e42; /* Warna tan */
                        color: white;
                        padding: 10px; /* Mengurangi tinggi dan lebar padding */
                        text-align: left;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        width: 104%; /* Panjang header memenuhi layar */
                    }

                    header .links {
                        display: flex;
                        align-items: center;
                    }

                    header a, header button {
                        background-color: #fcfafa;
                        color: black;
                        border: none;
                        padding: 8px 15px;
                        margin-right: 10px; /* Menambahkan margin kanan */
                        text-decoration: none;
                        cursor: pointer;
                        border-radius: 5px;
                        transition: background-color 0.3s ease; /* Animasi perubahan warna latar */
                    }

                    header a:hover, header button:hover {
                        background-color: #555; /* Warna latar saat hover */
                    }


                    h1 {
                        font-size: 20px;
                        margin: 0;
                    }

                    main {
                        display: flex;
                        flex-direction: column; /* Mengubah menjadi kolom */
                    }

                    .data-viewer {
                        width: 100%;
                        padding: 20px;
                    }

                    .data-box {
                        border: 1px solid #ccc;
                        padding: 15px;
                        margin-bottom: 15px;
                        border-radius: 10px;
                        display: flex;
                        align-items: center;
                        background-color: #ffffff; /* Warna background dalam kotak list */
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan */
                    }

                    .profile-img {
                        border-radius: 50%; /* Membuat gambar berbentuk bulat */
                        margin-right: 15px;
                        object-fit: cover; /* Menyesuaikan gambar ke proporsi yang ditentukan */
                        width: 100px; /* Lebar gambar */
                        height: 100px; /* Tinggi gambar */
                    }

                    .data-details {
                        display: flex;
                        flex-direction: column;
                    }

                    .data-details p {
                        margin: 5px 0;
                        color: #333; /* Warna teks */
                    }

                    h2 {
                        font-size: 18px;
                        margin: 0;
                    }
                    h3 {
                        font-size: 18px;
                        margin: 0;
                        color: #008000;
                    }

                    .logo {
                      max-width: 108%;
                      height: auto;
                      margin: 0 auto;
                      width: 150%;
                      height: 60%;
                    }

                  </style>
              </head>
              <body>
                  <header>
                      <div class="links">
                          <a href="https://wa.me/6281226913083" target="_blank">DONASI SEKARANG!!</a>
                      </div>
                      <h1> </h1>
                  </header>

                  <main>
                     <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBiXqpggwgeDKLAomElG5tysbwt3K8XSIW6g&usqp=CAU" alt="Logo">
                    
                      <div class="data-viewer">
                      	
                          <h2>Yang Sudah Berdonasi
                           </h2>
                          <?php
                          // Membaca data dari file data.txt
                          $file = file_get_contents('data.txt');

                          // Memecah data menjadi baris
                          $rows = explode("\n", trim($file));
                          ?>

                          <?php foreach ($rows as $row): ?>
                              <?php
                              $cells = explode(', ', $row);
                              // Periksa agar terdapat cukup banyak sel sebelum mengakses indeks
                              if (count($cells) >= 4):
                              ?>
                                  <div class="data-box">
                                      <img class="profile-img" src="https://telegra.ph/file/1a58a143b3cc66bd38668.jpg" alt="Profile Image">
                                      <div class="data-details">
                                          <p style="font-weight: bold; margin: 0;">Nama: <?php echo $cells[0]; ?></p>
                                          <p style="font-weight: bold; margin: 0;">Sejumlah: <?php echo $cells[1]; ?></p>
                                          <p style="font-weight: bold; margin: 0;">Pada: <?php echo $cells[2]; ?></p>
                                          <p style="font-weight: bold; margin: 0;">Alamat: <?php echo $cells[3]; ?></p>
                                      </div>
                                  </div>
                              <?php else: ?>
                                  <div class="data-box">
                                      <p style="font-weight: bold; margin: 0;">Data Selanjutnya Akan Diproses Segera...</p>
                                  </div>
                              <?php endif; ?>
                          <?php endforeach; ?>
                      </div>
                  </main>

              </body>
              </html>
