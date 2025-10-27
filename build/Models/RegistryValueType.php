<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistryValueType - Enum
 */
enum RegistryValueType: string
{
    case UNKNOWN = 'unknown';
    case BINARY = 'binary';
    case DWORD = 'dword';
    case DWORDLITTLEENDIAN = 'dwordLittleEndian';
    case DWORDBIGENDIAN = 'dwordBigEndian';
    case EXPANDSZ = 'expandSz';
    case LINK = 'link';
    case MULTISZ = 'multiSz';
    case NONE = 'none';
    case QWORD = 'qword';
    case QWORDLITTLEENDIAN = 'qwordlittleEndian';
    case SZ = 'sz';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
