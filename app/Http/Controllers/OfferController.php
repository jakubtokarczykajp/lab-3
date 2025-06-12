<?php

namespace App\Http\Controllers;
use Mpdf\Mpdf;

class OfferController extends Controller
{
    private array $offers = [
        ['title' => 'Podstawowy', 'price' => 99],
        ['title' => 'Standardowy', 'price' => 199],
        ['title' => 'Premium', 'price' => 299],
    ];

    public function index()
    {
        $offers = $this->offers;
        return view('offer', compact('offers'));
    }

    public function get_pdf(){
        $offers = $this->offers;
        $html = view('offer', ['offers' => $this->offers])->render();

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);

        return response($mpdf->Output('', 'S'), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="offers.pdf"');
    }
}
