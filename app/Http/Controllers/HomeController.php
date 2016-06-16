<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 16/06/2016
 * Time: 15:52
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Display the input form
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function getHome(Request $request) {
        return view('home');
    }

    /**
     * Find the missing number from user input and display result to user
     *
     * @param Request $request
     * @return $this
     * @throws \Exception
     */
    public function postSubmit(Request $request) {
        // Validate input server-side
        $this->validate($request, [
            'number' => 'required|integer|between:1,100'
        ]);

        // Number input by user
        $inputNumber = $request->get('number');

        // Array to hold numbers 1-100
        $numbers = [ ];

        // Fill array with values, excluding the one input by the user
        for($i = 1; $i <= 100; $i++) {
            if($i != $inputNumber) {
                $numbers[] = $i;
            }
        }

        // Find the missing number in the array, without relying on the user input
        $missingNumber = $this->findMissingNumber($numbers);

        return view('submit')
            ->with('missingNumber', $missingNumber);
    }

    /**
     * Find the missing number in an array of numbers 1 - 100
     *
     * @param array $numbers The array of numbers
     * @return int The missing number
     * @throws \Exception
     */
    protected function findMissingNumber($numbers) {
        for($i = 1; $i <= 100; $i++) {
            if(!in_array($i, $numbers)) {
                return $i;
            }
        }

        throw new \Exception('Failed to find missing number in array');
    }

}