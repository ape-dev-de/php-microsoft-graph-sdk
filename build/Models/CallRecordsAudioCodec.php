<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsAudioCodec - Enum
 */
enum CallRecordsAudioCodec: string
{
    case UNKNOWN = 'unknown';
    case INVALID = 'invalid';
    case CN = 'cn';
    case PCMA = 'pcma';
    case PCMU = 'pcmu';
    case AMRWIDE = 'amrWide';
    case G722 = 'g722';
    case G7221 = 'g7221';
    case G7221C = 'g7221c';
    case G729 = 'g729';
    case MULTICHANNELAUDIO = 'multiChannelAudio';
    case MUCHV2 = 'muchv2';
    case OPUS = 'opus';
    case SATIN = 'satin';
    case SATINFULLBAND = 'satinFullband';
    case RTAUDIO8 = 'rtAudio8';
    case RTAUDIO16 = 'rtAudio16';
    case SILK = 'silk';
    case SILKNARROW = 'silkNarrow';
    case SILKWIDE = 'silkWide';
    case SIREN = 'siren';
    case XMSRTA = 'xmsRta';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
