<?php

namespace App\Http\Controllers;

use App\Models\NonSponsorVisit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NonSponsorVisitController extends Controller
{
    public function index()
    {
        // Index
        $non_sponsor_visit = NonSponsorVisit::where('user_id', Auth::user()->id)->first();
        return view('non-sponsor-visit-documents.index', compact('non_sponsor_visit'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'receipt_of_hotel_reservation' => 'required|file|mimes:pdf,docx',
            'evidence_of_sufficient_funds' => 'required|file|mimes:pdf,docx',
            'travel_itinerary' => 'required|file|mimes:pdf,docx',
            'life_insurance' => 'required|file|mimes:pdf,docx',
        ]);

        try {
            $non_sponsor_visit = new NonSponsorVisit();
            $non_sponsor_visit->user_id = auth()->user()->id;
            $status = 'pending';

            if ($request->hasFile('receipt_of_hotel_reservation')) {

                $file = $request->file('receipt_of_hotel_reservation');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_receipt_of_hotel_reservation = $fileName;
                $non_sponsor_visit->doc_receipt_of_hotel_reservation_status = $status;
            }

            if ($request->hasFile('evidence_of_sufficient_funds')) {

                $file = $request->file('evidence_of_sufficient_funds');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_evidence_of_sufficient_funds = $fileName;
                $non_sponsor_visit->doc_evidence_of_sufficient_funds_status = $status;
            }

            if ($request->hasFile('travel_itinerary')) {

                $file = $request->file('travel_itinerary');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_travel_itinerary = $fileName;
                $non_sponsor_visit->doc_travel_itinerary_status = $status;
            }

            if ($request->hasFile('life_insurance')) {

                $file = $request->file('life_insurance');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_life_insurance = $fileName;
                $non_sponsor_visit->doc_life_insurance_status = $status;
            }

            $non_sponsor_visit->save();

            return redirect()->route('non.sponsor.visit.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
    }

    public function edit()
    {

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'receipt_of_hotel_reservation' => 'file|mimes:pdf,docx',
            'evidence_of_sufficient_funds' => 'file|mimes:pdf,docx',
            'travel_itinerary' => 'file|mimes:pdf,docx',
            'life_insurance' => 'file|mimes:pdf,docx',
        ]);

        try {
            $non_sponsor_visit = NonSponsorVisit::where('user_id', Auth::user()->id)->first();
            $non_sponsor_visit->user_id = auth()->user()->id;
            $status = 'pending';

            if ($request->hasFile('receipt_of_hotel_reservation')) {

                $file = $request->file('receipt_of_hotel_reservation');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_receipt_of_hotel_reservation = $fileName;
                $non_sponsor_visit->doc_receipt_of_hotel_reservation_status = $status;
            }

            if ($request->hasFile('evidence_of_sufficient_funds')) {

                $file = $request->file('evidence_of_sufficient_funds');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_evidence_of_sufficient_funds = $fileName;
                $non_sponsor_visit->doc_evidence_of_sufficient_funds_status = $status;
            }

            if ($request->hasFile('travel_itinerary')) {

                $file = $request->file('travel_itinerary');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_travel_itinerary = $fileName;
                $non_sponsor_visit->doc_travel_itinerary_status = $status;
            }

            if ($request->hasFile('life_insurance')) {

                $file = $request->file('life_insurance');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/non_sponsor_visit/'), $fileName);

                $non_sponsor_visit->doc_life_insurance = $fileName;
                $non_sponsor_visit->doc_life_insurance_status = $status;
            }

            $non_sponsor_visit->save();

            return redirect()->route('non.sponsor.visit.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
    }

    public function delete()
    {

    }

    public function destroy()
    {

    }
}
