<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsVideoCodec - Enum
 */
enum CallRecordsVideoCodec: string
{
    case UNKNOWN = 'unknown';
    case INVALID = 'invalid';
    case AV1 = 'av1';
    case H263 = 'h263';
    case H264 = 'h264';
    case H264S = 'h264s';
    case H264UC = 'h264uc';
    case H265 = 'h265';
    case RTVC1 = 'rtvc1';
    case RTVIDEO = 'rtVideo';
    case XRTVC1 = 'xrtvc1';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
