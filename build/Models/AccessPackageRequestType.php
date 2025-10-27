<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageRequestType - Enum
 */
enum AccessPackageRequestType: string
{
    case NOTSPECIFIED = 'notSpecified';
    case USERADD = 'userAdd';
    case USERUPDATE = 'userUpdate';
    case USERREMOVE = 'userRemove';
    case ADMINADD = 'adminAdd';
    case ADMINUPDATE = 'adminUpdate';
    case ADMINREMOVE = 'adminRemove';
    case SYSTEMADD = 'systemAdd';
    case SYSTEMUPDATE = 'systemUpdate';
    case SYSTEMREMOVE = 'systemRemove';
    case ONBEHALFADD = 'onBehalfAdd';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
