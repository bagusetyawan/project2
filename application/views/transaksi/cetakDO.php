<?php

$pdf = new Pdf('L', PDF_UNIT, array(400, 300), true, 'UTF-8', false);
$pdf->SetTitle('My Title');
// $pdf->SetHeaderMargin(10);
// $pdf->SetTopMargin(10);
$pdf->setPrintHeader(false);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');

$pdf->AddPage();

$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(110, 0, 'PT. PRAWIRATAMA MANDIRI', 0, 0, 'L', 0, '', 0);
$pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(50, 0, 'Jakarta, 24 Agustus 2018', 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 10);
$pdf->Cell(110, 0, 'Jl. Raya Baru Pemda No. 94 Kabupaten Bogor', 0, 0, 'L', 0, '', 0);
$pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(50, 0, 'Kepada Yth.', 0, 1, 'L', 0, '', 0);
$pdf->Cell(110, 0, 'Telp. 021 - 29333966', 0, 0, 'L', 0, '', 0);
$pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(50, 0, $customer['nama'], 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', 'B', 12);
$pdf->Cell(50, 0, '', 0, 0, 'L', 0, '', 0);

$pdf->Cell(90, 0, 'FAKTUR PENJUALAN', 0, 0, 'C', 0, '', 0);
$pdf->setFont('helvetica', '', 10);
$pdf->Cell(50, 0, $customer['alamat'], 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(50, 0, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(90, 5, '02/FJ/06/2018/015', 0, 0, 'C', 0, '', 0);
$pdf->setFont('helvetica', '', 10);
$pdf->Cell(50, 0, $customer['kota'], 0, 1, 'L', 0, '', 0);

$pdf->Ln();
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(190, 0, 'Jatuh Tempo 30 hari tanggal 23 September 2018', 0, 1, 'L', 0, '', 0);
$pdf->Ln();
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(10, 0, 'No', 1, 0, 'C', 0, '', 0);
$pdf->Cell(15, 0, 'Kode', 1, 0, 'C', 0, '', 0);
$pdf->Cell(70, 0, 'Uraian', 1, 0, 'C', 0, '', 0);
$pdf->Cell(15, 0, 'Jumlah', 1, 0, 'C', 0, '', 0);
$pdf->Cell(30, 0, 'Harga Satuan', 1, 0, 'C', 0, '', 0);
$pdf->Cell(10, 0, 'Disc', 1, 0, 'C', 0, '', 0);
$pdf->Cell(40, 0, 'Total', 1, 1, 'C', 0, '', 0);

foreach ($items as $key) {
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(10, 5, '1', 1, 0, 'C', 0, '', 0);
$pdf->Cell(15, 5, 'ORI10401', 1, 0, 'C', 0, '', 0);
$pdf->Cell(70, 5, $key->nama_barang, 1, 0, 'L', 0, '', 0);
$pdf->Cell(15, 5, $key->jumlah, 1, 0, 'C', 0, '', 0);
$pdf->Cell(30, 5, $key->harga_satuan, 1, 0, 'R', 0, '', 0);
$pdf->Cell(10, 5, $key->diskon, 1, 0, 'C', 0, '', 0);
$pdf->Cell(40, 5, $key->subtotal, 1, 1, 'R', 0, '', 0);
}

$pdf->Ln();
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(10, 5, 'TER :', 0, 0, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(120, 6, 'Dua puluh juta tiga ratus tujuh puluh ribu rupiah', 0, 0, 'L', 0, '', 0);
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(20, 5, 'Total :', 0, 0, 'R', 0, '', 0);
$pdf->Cell(40, 5, 'Rp. 20,370,000', 0, 1, 'R', 0, '', 0);

$pdf->Ln();
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(10, 5, 'KET :', 0, 0, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(100, 5, '', 0, 0, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 6);
$pdf->Cell(80, 5, 'Catatan :', 0, 1, 'L', 0, '', 0);

$pdf->Cell(110, 5, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(80, 5, '1. Harga yang tertera diatas adalah yang berlaku pada saat penyerahan', 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(55, 5, 'ADMIN PENJUALAN', 0, 0, 'C', 0, '', 0);
$pdf->Cell(55, 5, 'DITERIMA OLEH PELANGGAN', 0, 0, 'C', 0, '', 0);
$pdf->setFont('helvetica', '', 6);
$pdf->Cell(95, 5, 'barang. Barang yang sudah dibeli tidak dapat dikembalikan.', 0, 1, 'L', 0, '', 0);
$pdf->Cell(110, 5, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(80, 5, '2. Barang yang diterima dan belum lunas (pembayaran dengan Bilyet Giro', 0, 1, 'L', 0, '', 0);
$pdf->Cell(110, 5, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(80, 5, 'Cheque belum cair ), maka barang tersebut masih merupakan barang titipan', 0, 1, 'L', 0, '', 0);
$pdf->Cell(110, 5, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(80, 5, '3. Tranfer dapat dilakukan melalui no rek :', 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(55, 5, '(....................................)', 0, 0, 'C', 0, '', 0);
$pdf->Cell(55, 5, '(....................................)', 0, 0, 'C', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(95, 5, 'BNI SYARIAH 1032018991 an PT. Prawiratama Mandiri', 0, 1, 'L', 0, '', 0);

$pdf->Output('My-File-Name.pdf', 'I');