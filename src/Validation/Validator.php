<?php

namespace Drenth1\ApiSports\Validation;

use Drenth1\ApiSports\Validation\Validators\ValidatesStrings;
use Drenth1\ApiSports\Validation\Validators\ValidatesIntegers;
use Drenth1\ApiSports\Validation\Validators\ValidatesDataTypes;
use Drenth1\ApiSports\Validation\Validators\ValidatesUsingEnums;
use Drenth1\ApiSports\Validation\Validators\ValidatesUsingRegex;

class Validator
{
    use ValidatesUsingEnums;
    use ValidatesUsingRegex;
    use ValidatesDataTypes;
    use ValidatesIntegers;
    use ValidatesStrings;
}