<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsDeviceInfo
 */
class CallRecordsDeviceInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Name of the capture device driver used by the media endpoint. */
    public ?string $captureDeviceDriver = null;

    /** Name of the capture device used by the media endpoint. */
    public ?string $captureDeviceName = null;

    /** 
     * Fraction of the call that the media endpoint detected the capture device was not working properly.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $captureNotFunctioningEventRatio = null;

    /** 
     * Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $cpuInsufficentEventRatio = null;

    /** 
     * Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $deviceClippingEventRatio = null;

    /** 
     * Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $deviceGlitchEventRatio = null;

    /** Number of times during the call that the media endpoint detected howling or screeching audio. */
    public ?float $howlingEventCount = null;

    /** 
     * The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $initialSignalLevelRootMeanSquare = null;

    /** 
     * Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $lowSpeechLevelEventRatio = null;

    /** 
     * Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $lowSpeechToNoiseEventRatio = null;

    /** 
     * Glitches per 5 minute interval for the media endpoint's microphone.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $micGlitchRate = null;

    /** Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint. */
    public ?float $receivedNoiseLevel = null;

    /** Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint. */
    public ?float $receivedSignalLevel = null;

    /** Name of the render device driver used by the media endpoint. */
    public ?string $renderDeviceDriver = null;

    /** Name of the render device used by the media endpoint. */
    public ?string $renderDeviceName = null;

    /** 
     * Fraction of the call that media endpoint detected device render is muted.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $renderMuteEventRatio = null;

    /** 
     * Fraction of the call that the media endpoint detected the render device was not working properly.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $renderNotFunctioningEventRatio = null;

    /** 
     * Fraction of the call that media endpoint detected device render volume is set to 0.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $renderZeroVolumeEventRatio = null;

    /** Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint. */
    public ?float $sentNoiseLevel = null;

    /** Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint. */
    public ?float $sentSignalLevel = null;

    /** 
     * Glitches per 5 minute internal for the media endpoint's loudspeaker.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $speakerGlitchRate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['captureDeviceDriver'])) {
            $this->captureDeviceDriver = $data['captureDeviceDriver'];
        }
        if (isset($data['captureDeviceName'])) {
            $this->captureDeviceName = $data['captureDeviceName'];
        }
        if (isset($data['captureNotFunctioningEventRatio'])) {
            $this->captureNotFunctioningEventRatio = $data['captureNotFunctioningEventRatio'];
        }
        if (isset($data['cpuInsufficentEventRatio'])) {
            $this->cpuInsufficentEventRatio = $data['cpuInsufficentEventRatio'];
        }
        if (isset($data['deviceClippingEventRatio'])) {
            $this->deviceClippingEventRatio = $data['deviceClippingEventRatio'];
        }
        if (isset($data['deviceGlitchEventRatio'])) {
            $this->deviceGlitchEventRatio = $data['deviceGlitchEventRatio'];
        }
        if (isset($data['howlingEventCount'])) {
            $this->howlingEventCount = $data['howlingEventCount'];
        }
        if (isset($data['initialSignalLevelRootMeanSquare'])) {
            $this->initialSignalLevelRootMeanSquare = $data['initialSignalLevelRootMeanSquare'];
        }
        if (isset($data['lowSpeechLevelEventRatio'])) {
            $this->lowSpeechLevelEventRatio = $data['lowSpeechLevelEventRatio'];
        }
        if (isset($data['lowSpeechToNoiseEventRatio'])) {
            $this->lowSpeechToNoiseEventRatio = $data['lowSpeechToNoiseEventRatio'];
        }
        if (isset($data['micGlitchRate'])) {
            $this->micGlitchRate = $data['micGlitchRate'];
        }
        if (isset($data['receivedNoiseLevel'])) {
            $this->receivedNoiseLevel = $data['receivedNoiseLevel'];
        }
        if (isset($data['receivedSignalLevel'])) {
            $this->receivedSignalLevel = $data['receivedSignalLevel'];
        }
        if (isset($data['renderDeviceDriver'])) {
            $this->renderDeviceDriver = $data['renderDeviceDriver'];
        }
        if (isset($data['renderDeviceName'])) {
            $this->renderDeviceName = $data['renderDeviceName'];
        }
        if (isset($data['renderMuteEventRatio'])) {
            $this->renderMuteEventRatio = $data['renderMuteEventRatio'];
        }
        if (isset($data['renderNotFunctioningEventRatio'])) {
            $this->renderNotFunctioningEventRatio = $data['renderNotFunctioningEventRatio'];
        }
        if (isset($data['renderZeroVolumeEventRatio'])) {
            $this->renderZeroVolumeEventRatio = $data['renderZeroVolumeEventRatio'];
        }
        if (isset($data['sentNoiseLevel'])) {
            $this->sentNoiseLevel = $data['sentNoiseLevel'];
        }
        if (isset($data['sentSignalLevel'])) {
            $this->sentSignalLevel = $data['sentSignalLevel'];
        }
        if (isset($data['speakerGlitchRate'])) {
            $this->speakerGlitchRate = $data['speakerGlitchRate'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
