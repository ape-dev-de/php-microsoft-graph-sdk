<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserFlowType - Enum
 */
enum UserFlowType: string
{
    case SIGNUP = 'signUp';
    case SIGNIN = 'signIn';
    case SIGNUPORSIGNIN = 'signUpOrSignIn';
    case PASSWORDRESET = 'passwordReset';
    case PROFILEUPDATE = 'profileUpdate';
    case RESOURCEOWNER = 'resourceOwner';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
