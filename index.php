<?php
require('fpdf/fpdf.php'); // Include the FPDF library

// Create a PDF object
$pdf = new FPDF();
$pdf->AddPage();

// Set font and font size for the heading (make it bold)
$pdf->SetFont('Arial', 'B', 20);

// Add the title to the first page (the bold heading, aligned to the left)
$pdf->Cell(0, 10, 'A Simple PDF File', 0, 1, 'L'); // 0 means full width, 1 means new line, 'L' means left alignment

// Set font and font size for the content (the paragraph)
$pdf->SetFont('Arial', '', 10); // Smaller font size (change '10' to the desired size)

// Define the content of the PDF for the first page
$content = "This is a small demonstration .pdf file -
just for use in the Virtual Mechanics tutorials. More text. And more
text. And more text. And more text. And more text.
And more text. And more text. And more text. And more text. And more
text. And more text. Boring, zzzzz. And more text. And more text. And
more text. And more text. And more text. And more text. And more text.
And more text. And more text.
And more text. And more text. And more text. And more text. And more
text. And more text. And more text. Even more. Continued on page 2 ...";

// Add the text content to the first page without borders, aligned to the left
$pdf->MultiCell(0, 10, $content);

// Start a new page (the second page)
$pdf->AddPage();

// Set font and font size for the second page (same as the first page)
$pdf->SetFont('Arial', 'B', 20);

// Add the title to the second page (the same bold heading as the first page, aligned to the left)
$pdf->Cell(0, 10, 'A Simple PDF File', 0, 1, 'L');

// Set font and font size for the content (the same as the first page)
$pdf->SetFont('Arial', '', 10); // Smaller font size (change '10' to the desired size)

// Define the content for the second page (same as the first page)
$content2 = "This is a small demonstration .pdf file -
just for use in the Virtual Mechanics tutorials. More text. And more
text. And more text. And more text. And more text.
And more text. And more text. And more text. And more text. And more
text. And more text. Boring, zzzzz. And more text. And more text. And
more text. And more text. And more text. And more text. And more text.
And more text. And more text.
And more text. And more text. And more text. And more text. And more
text. And more text. And more text. Even more. Continued from page 1 ...";

// Add the rest of the text content to the second page without borders, aligned to the left
$pdf->MultiCell(0, 10, $content2);

// Set the file path for the PDF
$pdfFilePath = $_SERVER['DOCUMENT_ROOT'] . '/using_fpdf/two_page_sample.pdf';

// Output the PDF to the specified file path
$pdf->Output($pdfFilePath, 'F'); // 'F' means save to a file

// Display a success message
echo "PDF with two pages created successfully!";
?>
