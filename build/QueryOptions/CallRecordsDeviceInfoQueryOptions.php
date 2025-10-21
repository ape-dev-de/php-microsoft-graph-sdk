<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsDeviceInfo resources
 *
 * Available select fields:
 * - captureDeviceDriver
 * - captureDeviceName
 * - captureNotFunctioningEventRatio
 * - cpuInsufficentEventRatio
 * - deviceClippingEventRatio
 * - deviceGlitchEventRatio
 * - howlingEventCount
 * - initialSignalLevelRootMeanSquare
 * - lowSpeechLevelEventRatio
 * - lowSpeechToNoiseEventRatio
 * - micGlitchRate
 * - receivedNoiseLevel
 * - receivedSignalLevel
 * - renderDeviceDriver
 * - renderDeviceName
 * - renderMuteEventRatio
 * - renderNotFunctioningEventRatio
 * - renderZeroVolumeEventRatio
 * - sentNoiseLevel
 * - sentSignalLevel
 * - speakerGlitchRate
 */
class CallRecordsDeviceInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsDeviceInfo
     */
    public const FIELD_CAPTURE_DEVICE_DRIVER = 'captureDeviceDriver';
    public const FIELD_CAPTURE_DEVICE_NAME = 'captureDeviceName';
    public const FIELD_CAPTURE_NOT_FUNCTIONING_EVENT_RATIO = 'captureNotFunctioningEventRatio';
    public const FIELD_CPU_INSUFFICENT_EVENT_RATIO = 'cpuInsufficentEventRatio';
    public const FIELD_DEVICE_CLIPPING_EVENT_RATIO = 'deviceClippingEventRatio';
    public const FIELD_DEVICE_GLITCH_EVENT_RATIO = 'deviceGlitchEventRatio';
    public const FIELD_HOWLING_EVENT_COUNT = 'howlingEventCount';
    public const FIELD_INITIAL_SIGNAL_LEVEL_ROOT_MEAN_SQUARE = 'initialSignalLevelRootMeanSquare';
    public const FIELD_LOW_SPEECH_LEVEL_EVENT_RATIO = 'lowSpeechLevelEventRatio';
    public const FIELD_LOW_SPEECH_TO_NOISE_EVENT_RATIO = 'lowSpeechToNoiseEventRatio';
    public const FIELD_MIC_GLITCH_RATE = 'micGlitchRate';
    public const FIELD_RECEIVED_NOISE_LEVEL = 'receivedNoiseLevel';
    public const FIELD_RECEIVED_SIGNAL_LEVEL = 'receivedSignalLevel';
    public const FIELD_RENDER_DEVICE_DRIVER = 'renderDeviceDriver';
    public const FIELD_RENDER_DEVICE_NAME = 'renderDeviceName';
    public const FIELD_RENDER_MUTE_EVENT_RATIO = 'renderMuteEventRatio';
    public const FIELD_RENDER_NOT_FUNCTIONING_EVENT_RATIO = 'renderNotFunctioningEventRatio';
    public const FIELD_RENDER_ZERO_VOLUME_EVENT_RATIO = 'renderZeroVolumeEventRatio';
    public const FIELD_SENT_NOISE_LEVEL = 'sentNoiseLevel';
    public const FIELD_SENT_SIGNAL_LEVEL = 'sentSignalLevel';
    public const FIELD_SPEAKER_GLITCH_RATE = 'speakerGlitchRate';

    /**
     * Select specific CallRecordsDeviceInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
