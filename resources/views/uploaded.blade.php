<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootsrap/bootstrap.min.css') }}">
<script src="{{ asset('bootsrap/jquery.js') }}"></script>
<script src="{{ asset('bootsrap/popper.js') }}"></script>
<script src="{{ asset('bootsrap/bootstrap.min.js') }}"></script>
</head>
<body>


    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>S/N</td>
                <td>Question</td>
                <td>Option A</td>
                <td>Option B</td>
                <td>Option C</td>
                <td>Option D</td>
                <td>Option E</td>
            </tr>
        </thead>
        <tbody>
            @php
                // $data = $data = (preg_split('#(?<=\d)(\.)#i', $text));
                $questionPattern = "#(?<=\d)(\.)#i";//"/[\d.]/";
                $questiondatas = preg_split($questionPattern, $text);


            @endphp

            @foreach($questiondatas as $sn => $questionDatai)
            @php
                // $question = "";
                // $optiona = "";
                // $optionb = "";
                // $optionc = "";
                // $optiond = "";
                // $optione = "";
                ;


                $questions = [];
                $questionData = [];
                if (strpos($questionDatai, "a.")){
                    $questionData = explode('a.', $questionDatai);
                    $questions['question'] = $questionData[0];

                    if (strpos($questionData[1], "b.")){
                    $questionData = explode('b.', $questionData[1]);
                    $questions['optiona'] = $questionData[0];
                        if (strpos($questionData[1], "c.")){
                        $questionData = explode('c.', $questionData[1]);
                        $questions['optionb'] = $questionData[0];
                            if (strpos($questionData[1], "d.")){
                            $questionData = explode('d.', $questionData[1]);
                            $questions['optionc'] = $questionData[0];

                                // if (strpos($questionData[1], "e.")){
                                // $questionData = explode('e.', $questionData[1]);
                                $questions['optiond'] = $questionData[1];
                                // }
                            }
                        }
                    }

                }elseif (strpos($questionDatai, "a. ")){
                    $questionData = explode('a. ', $questionDatai);
                    $questions['question'] = $questionData[0];
                    if (strpos($questionData[1], "b. ")){
                    $questionData = explode('b. ', $questionData[1]);
                    $questions['optiona'] = $questionData[0];
                        if (strpos($questionData[1], "c. ")){
                        $questionData = explode('c. ', $questionData[1]);
                        $questions['optionb'] = $questionData[0];
                            if (strpos($questionData[1], "d. ")){
                            $questionData = explode('d. ', $questionData[1]);
                            $questions['optionc'] = $questionData[0];

                                // if (strpos($questionData[1], "e.")){
                                // $questionData = explode('e.', $questionData[1]);
                                $questions['optiond'] = $questionData[1];
                                // }
                            }
                        }
                    }
                }elseif (strpos($questionDatai, "(a)")){
                    $questionData = explode('(a)', $questionDatai);
                    $questions['question'] = $questionData[0];
                    if (strpos($questionData[1], "(b)")){
                    $questionData = explode('(b)', $questionData[1]);
                    $questions['optiona'] = $questionData[0];
                        if (strpos($questionData[1], "(c)")){
                        $questionData = explode('(c)', $questionData[1]);
                        $questions['optionb'] = $questionData[0];
                            if (strpos($questionData[1], "(d)")){
                            $questionData = explode('(d)', $questionData[1]);
                            $questions['optionc'] = $questionData[0];

                                // if (strpos($questionData[1], "e.")){
                                // $questionData = explode('e.', $questionData[1]);
                                $questions['optiond'] = $questionData[1];
                                // }
                            }
                        }
                    }
                }
                elseif (strpos($questionDatai, " a)")){
                    $questionData = explode(' a)', $questionDatai);
                    $questions['question'] = $questionData[0];
                    if (strpos($questionData[1], " b)")){
                    $questionData = explode(' b)', $questionData[1]);
                    $questions['optiona'] = $questionData[0];
                        if (strpos($questionData[1], " c)")){
                        $questionData = explode(' c)', $questionData[1]);
                        $questions['optionb'] = $questionData[0];
                            if (strpos($questionData[1], " d)")){
                            $questionData = explode(' d)', $questionData[1]);
                            $questions['optionc'] = $questionData[0];

                                // if (strpos($questionData[1], "e.")){
                                // $questionData = explode('e.', $questionData[1]);
                                $questions['optiond'] = $questionData[1];
                                // }
                            }
                        }
                    }
                }
                elseif (strpos($questionDatai, "A. ")){
                    $questionData = explode('A. ', $questionDatai);
                    $questions['question'] = $questionData[0];
                    if (strpos($questionData[1], "B. ")){
                    $questionData = explode('B. ', $questionData[1]);
                    $questions['optiona'] = $questionData[0];
                        if (strpos($questionData[1], "C. ")){
                        $questionData = explode('C. ', $questionData[1]);
                        $questions['optionb'] = $questionData[0];
                            if (strpos($questionData[1], "D. ")){
                            $questionData = explode('D. ', $questionData[1]);
                            $questions['optionc'] = $questionData[0];

                                // if (strpos($questionData[1], "e.")){
                                // $questionData = explode('e.', $questionData[1]);
                                $questions['optiond'] = $questionData[1];
                                // }
                            }
                        }
                    }
                }

                elseif (strpos($questionDatai, "a) ")){
                    $questionData = explode("a) ", $questionDatai);
                    $questions['question'] = $questionData[0];
                    if (strpos($questionData[1], "b) ")){
                    $questionData = explode('b) ', $questionData[1]);
                    $questions['optiona'] = $questionData[0];
                        if (strpos($questionData[1], "c) ")){
                        $questionData = explode('c) ', $questionData[1]);
                        $questions['optionb'] = $questionData[0];
                            if (strpos($questionData[1], "d) ")){
                            $questionData = explode('d) ', $questionData[1]);
                            $questions['optionc'] = $questionData[0];

                                // if (strpos($questionData[1], "e.")){
                                // $questionData = explode('e.', $questionData[1]);
                                $questions['optiond'] = $questionData[1];
                                // }
                            }
                        }
                    }

                }

                elseif (strpos($questionDatai, " a) ")){
                    $questionData = explode(" a) ", $questionDatai);
                    $questions['question'] = $questionData[0];
                    if (strpos($questionData[1], "b.")){
                    $questionData = explode('b.', $questionData[1]);
                    $questions['optiona'] = $questionData[0];
                        if (strpos($questionData[1], "c.")){
                        $questionData = explode('c.', $questionData[1]);
                        $questions['optionb'] = $questionData[0];
                            if (strpos($questionData[1], "d.")){
                            $questionData = explode('d.', $questionData[1]);
                            $questions['optionc'] = $questionData[0];

                                // if (strpos($questionData[1], "e.")){
                                // $questionData = explode('e.', $questionData[1]);
                                $questions['optiond'] = $questionData[1];
                                // }
                            }
                        }
                    }
                }











// " by: a) The"
                // $question = $questionData[0];
                // $question = $questionData[0];
                // $optionsa = isset($questionData[1]) ? explode("b. ",$questionData[1]) : "No Data";
                // $optiona =  is_array($optionsa) ? $optionsa[0]:[];


            @endphp
                <tr>
                    <td>{{ $sn }}</td>
                    <td>{{ isset($questions['question'])?$questions['question'] :"" }}</td>
                    <td>{{ isset($questions['optiona'])?$questions['optiona'] :"" }}</td>
                    <td>{{ isset($questions['optionb'])?$questions['optionb'] :"" }}</td>
                    <td>{{ isset($questions['optionc'])?$questions['optionc'] :"" }}</td>
                    <td>{{ isset($questions['optiond'])?$questions['optiond'] :"" }}</td>
                    <td>{{ isset($questions['optione'])?$questions['optione'] :"" }}</td>
                    <td>{{ ($questionDatai) }}</td>
                    {{-- <td>{{ $optiona[0] }}</td> --}}

                    {{-- @php
                        $option = explode('a. ', $question);
                    @endphp
                    @foreach ($option as $item)

                    @endforeach --}}


                </tr>


            @endforeach
        </tbody>
    </table>
</body>
</html>
