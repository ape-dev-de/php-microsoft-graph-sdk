<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsDeviceInfo
 */
class CallRecordsDeviceInfo
{
    public function __construct(
        /** Name of the capture device driver used by the media endpoint. */
        public ?string $captureDeviceDriver = null,
        /** Name of the capture device used by the media endpoint. */
        public ?string $captureDeviceName = null,
        /** Fraction of the call that the media endpoint detected the capture device was not working properly. */
        public ?string $captureNotFunctioningEventRatio = null,
        /** Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received. */
        public ?string $cpuInsufficentEventRatio = null,
        /** Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent. */
        public ?string $deviceClippingEventRatio = null,
        /** Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received. */
        public ?string $deviceGlitchEventRatio = null,
        /** Number of times during the call that the media endpoint detected howling or screeching audio. */
        public ?float $howlingEventCount = null,
        /** The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call. */
        public ?string $initialSignalLevelRootMeanSquare = null,
        /** Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent. */
        public ?string $lowSpeechLevelEventRatio = null,
        /** Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent. */
        public ?string $lowSpeechToNoiseEventRatio = null,
        /** Glitches per 5 minute interval for the media endpoint's microphone. */
        public ?string $micGlitchRate = null,
        /** Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint. */
        public ?float $receivedNoiseLevel = null,
        /** Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint. */
        public ?float $receivedSignalLevel = null,
        /** Name of the render device driver used by the media endpoint. */
        public ?string $renderDeviceDriver = null,
        /** Name of the render device used by the media endpoint. */
        public ?string $renderDeviceName = null,
        /** Fraction of the call that media endpoint detected device render is muted. */
        public ?string $renderMuteEventRatio = null,
        /** Fraction of the call that the media endpoint detected the render device was not working properly. */
        public ?string $renderNotFunctioningEventRatio = null,
        /** Fraction of the call that media endpoint detected device render volume is set to 0. */
        public ?string $renderZeroVolumeEventRatio = null,
        /** Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint. */
        public ?float $sentNoiseLevel = null,
        /** Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint. */
        public ?float $sentSignalLevel = null,
        /** Glitches per 5 minute internal for the media endpoint's loudspeaker. */
        public ?string $speakerGlitchRate = null
    ) {}
}
