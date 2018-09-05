<?php
$pageLayout = array(400, 600); //  or array($height, $width) 
$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetTitle('FJ/'.date("m").'/'.date("Y").'/'.($idTrans2));

$pdf->setPrintHeader(false);

$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');

$pdf->AddPage('L', 'A5');
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(110, 0, 'PT. PRAWIRATAMA MANDIRI', 0, 0, 'L', 0, '', 0);
$pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0);

$tgl = (!empty($transaksi)?$transaksi->created_at:date("d M Y"));
$pdf->Cell(50, 0, 'Jakarta,  '.(!empty($transaksi)?$transaksi->created_at:date("d M Y")), 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 10);
$pdf->Cell(110, 0, 'Jl. Raya Baru Pemda No. 94 Kabupaten Bogor', 0, 0, 'L', 0, '', 0);
$pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0);


$pdf->Cell(50, 0, (!empty($customer)?'Kepada Yth':''), 0, 1, 'L', 0, '', 0);
$pdf->Cell(110, 0, 'Telp. 021 - 29333966', 0, 0, 'L', 0, '', 0);
$pdf->Cell(30, 0, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(50, 0, (!empty($customer)?$customer['nama']:''), 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', 'B', 12);
$pdf->Cell(50, 0, '', 0, 0, 'L', 0, '', 0);

$pdf->Cell(90, 0, 'FAKTUR PENJUALAN', 0, 0, 'C', 0, '', 0);
$pdf->setFont('helvetica', '', 10);
$pdf->Cell(50, 0, (!empty($customer)?$customer['alamat']:''), 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(50, 0, '', 0, 0, 'L', 0, '', 0);
$pdf->Cell(90, 5, 'FJ/'.date("m").'/'.date("Y").'/'.($idTrans2), 0, 0, 'C', 0, '', 0);
$pdf->setFont('helvetica', '', 10);
$pdf->Cell(50, 0, (!empty($customer)?$customer['kota']:''), 0, 1, 'L', 0, '', 0);

$pdf->Ln();
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(190, 0, (!empty($piutang)?'Jatuh Tempo '.$piutang->tenggat.' hari tanggal '.$piutang->deadline.'':'') , 0, 1, 'L', 0, '', 0);
$pdf->Ln();
$pdf->setFont('helvetica', 'B', 10);
// $pdf->Cell(10, 0, 'No', 1, 0, 'C', 0, '', 0);
$pdf->Cell(15, 0, 'Kode', 1, 0, 'C', 0, '', 0);
$pdf->Cell(80, 0, 'Uraian', 1, 0, 'C', 0, '', 0);
$pdf->Cell(15, 0, 'Jumlah', 1, 0, 'C', 0, '', 0);
$pdf->Cell(30, 0, 'Harga Satuan', 1, 0, 'C', 0, '', 0);
$pdf->Cell(10, 0, 'Disc', 1, 0, 'C', 0, '', 0);
$pdf->Cell(40, 0, 'Total', 1, 1, 'C', 0, '', 0);

foreach ($items as $key) {
	
$pdf->setFont('helvetica', '', 8);
// $pdf->Cell(10, 5, $a, 1, 0, 'C', 0, '', 0);
$pdf->Cell(15, 5, $key->id_barang, 1, 0, 'C', 0, '', 0);
$pdf->Cell(80, 5, $key->nama_barang, 1, 0, 'L', 0, '', 0);
$pdf->Cell(15, 5, $key->jumlah, 1, 0, 'C', 0, '', 0);
$pdf->Cell(30, 5, 'Rp. '.$key->harga_satuan, 1, 0, 'R', 0, '', 0);
$pdf->Cell(10, 5, $key->diskon.'%', 1, 0, 'C', 0, '', 0);
$pdf->Cell(40, 5, 'Rp. '.$key->subtotal, 1, 1, 'R', 0, '', 0);

}

$pdf->Ln();
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(10, 5, 'Ket :', 0, 0, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(120, 6, '', 0, 0, 'L', 0, '', 0);
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(20, 5, 'Total :', 0, 0, 'R', 0, '', 0);
$pdf->Cell(40, 5, 'Rp. '.$sum->subtotal, 0, 1, 'R', 0, '', 0);

$pdf->Ln();
$pdf->setFont('helvetica', 'B', 10);
$pdf->Cell(10, 5, '', 0, 0, 'L', 0, '', 0);
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
$pdf->Cell(80, 5, '3. Transfer dapat dilakukan melalui no rek :', 0, 1, 'L', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(55, 5, '(....................................)', 0, 0, 'C', 0, '', 0);
$pdf->Cell(55, 5, '(....................................)', 0, 0, 'C', 0, '', 0);
$pdf->setFont('helvetica', '', 8);
$pdf->Cell(95, 5, 'BNI SYARIAH 1032018991 an PT. Prawiratama Mandiri', 0, 1, 'L', 0, '', 0);

$pdf->Output('FJ/'.date("m").'/'.date("Y").'/'.($idTrans-1)+'.pdf', 'I');