Soal:
1. SQL untuk menampilkan dan memaksukkan tabel murid 
2. Tampilkan data dari data diatas yg jurusan rpl
3. Tampilkan data2 diatas yg ada di dlm kelas xi 
4. Tampilkan data jurusan rpl
Jawaban:
1. SELECT * FROM tabelakuwh , INSERT INTO tabelakuwh (id, nama, kelas, jurusan, alamat)
2. SELECT * FROM tabelakuwh WHERE jurusan = 'rpl';
3. SELECT * FROM tabelakuwh WHERE kelas = 'xi';
4. SELECT jurusan FROM tabelakuwh WHERE jurusan = 'rpl';