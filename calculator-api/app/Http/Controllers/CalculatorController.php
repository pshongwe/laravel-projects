<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 + $num2;

        return response()->json([
            'operation' => 'add',
            'num1' => $num1,
            'num2' => $num2,
            'result' => $result
        ]);
    }

    public function subtract(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 - $num2;

        return response()->json([
            'operation' => 'subtract',
            'num1' => $num1,
            'num2' => $num2,
            'result' => $result
        ]);
    }

    public function multiply(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 * $num2;

        return response()->json([
            'operation' => 'multiply',
            'num1' => $num1,
            'num2' => $num2,
            'result' => $result
        ]);
    }

    public function divide(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        if ($num2 == 0) {
            return response()->json(['error' => 'Division by zero is not allowed.'], 400);
        }

        $result = $num1 / $num2;

        return response()->json([
            'operation' => 'divide',
            'num1' => $num1,
            'num2' => $num2,
            'result' => $result
        ]);
    }
}
