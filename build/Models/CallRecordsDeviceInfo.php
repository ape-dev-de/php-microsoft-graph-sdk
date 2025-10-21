<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsDeviceInfo
 */
class CallRecordsDeviceInfo
{
    /**
     * Name of the capture device driver used by the media endpoint.
     */
    private ?string $captureDeviceDriver;

    /**
     * Name of the capture device used by the media endpoint.
     */
    private ?string $captureDeviceName;

    /**
     * Fraction of the call that the media endpoint detected the capture device was not working properly.
     */
    private ?string $captureNotFunctioningEventRatio;

    /**
     * Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
     */
    private ?string $cpuInsufficentEventRatio;

    /**
     * Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
     */
    private ?string $deviceClippingEventRatio;

    /**
     * Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
     */
    private ?string $deviceGlitchEventRatio;

    /**
     * Number of times during the call that the media endpoint detected howling or screeching audio.
     */
    private ?float $howlingEventCount;

    /**
     * The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
     */
    private ?string $initialSignalLevelRootMeanSquare;

    /**
     * Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
     */
    private ?string $lowSpeechLevelEventRatio;

    /**
     * Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
     */
    private ?string $lowSpeechToNoiseEventRatio;

    /**
     * Glitches per 5 minute interval for the media endpoint's microphone.
     */
    private ?string $micGlitchRate;

    /**
     * Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     */
    private ?float $receivedNoiseLevel;

    /**
     * Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     */
    private ?float $receivedSignalLevel;

    /**
     * Name of the render device driver used by the media endpoint.
     */
    private ?string $renderDeviceDriver;

    /**
     * Name of the render device used by the media endpoint.
     */
    private ?string $renderDeviceName;

    /**
     * Fraction of the call that media endpoint detected device render is muted.
     */
    private ?string $renderMuteEventRatio;

    /**
     * Fraction of the call that the media endpoint detected the render device was not working properly.
     */
    private ?string $renderNotFunctioningEventRatio;

    /**
     * Fraction of the call that media endpoint detected device render volume is set to 0.
     */
    private ?string $renderZeroVolumeEventRatio;

    /**
     * Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
     */
    private ?float $sentNoiseLevel;

    /**
     * Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
     */
    private ?float $sentSignalLevel;

    /**
     * Glitches per 5 minute internal for the media endpoint's loudspeaker.
     */
    private ?string $speakerGlitchRate;


    public function getCaptureDeviceDriver(): ?string
    {
        return $this->captureDeviceDriver;
    }

    public function setCaptureDeviceDriver(?string $captureDeviceDriver): self
    {
        $this->captureDeviceDriver = $captureDeviceDriver;
        return $this;
    }

    public function getCaptureDeviceName(): ?string
    {
        return $this->captureDeviceName;
    }

    public function setCaptureDeviceName(?string $captureDeviceName): self
    {
        $this->captureDeviceName = $captureDeviceName;
        return $this;
    }

    public function getCaptureNotFunctioningEventRatio(): ?string
    {
        return $this->captureNotFunctioningEventRatio;
    }

    public function setCaptureNotFunctioningEventRatio(?string $captureNotFunctioningEventRatio): self
    {
        $this->captureNotFunctioningEventRatio = $captureNotFunctioningEventRatio;
        return $this;
    }

    public function getCpuInsufficentEventRatio(): ?string
    {
        return $this->cpuInsufficentEventRatio;
    }

    public function setCpuInsufficentEventRatio(?string $cpuInsufficentEventRatio): self
    {
        $this->cpuInsufficentEventRatio = $cpuInsufficentEventRatio;
        return $this;
    }

    public function getDeviceClippingEventRatio(): ?string
    {
        return $this->deviceClippingEventRatio;
    }

    public function setDeviceClippingEventRatio(?string $deviceClippingEventRatio): self
    {
        $this->deviceClippingEventRatio = $deviceClippingEventRatio;
        return $this;
    }

    public function getDeviceGlitchEventRatio(): ?string
    {
        return $this->deviceGlitchEventRatio;
    }

    public function setDeviceGlitchEventRatio(?string $deviceGlitchEventRatio): self
    {
        $this->deviceGlitchEventRatio = $deviceGlitchEventRatio;
        return $this;
    }

    public function getHowlingEventCount(): ?float
    {
        return $this->howlingEventCount;
    }

    public function setHowlingEventCount(?float $howlingEventCount): self
    {
        $this->howlingEventCount = $howlingEventCount;
        return $this;
    }

    public function getInitialSignalLevelRootMeanSquare(): ?string
    {
        return $this->initialSignalLevelRootMeanSquare;
    }

    public function setInitialSignalLevelRootMeanSquare(?string $initialSignalLevelRootMeanSquare): self
    {
        $this->initialSignalLevelRootMeanSquare = $initialSignalLevelRootMeanSquare;
        return $this;
    }

    public function getLowSpeechLevelEventRatio(): ?string
    {
        return $this->lowSpeechLevelEventRatio;
    }

    public function setLowSpeechLevelEventRatio(?string $lowSpeechLevelEventRatio): self
    {
        $this->lowSpeechLevelEventRatio = $lowSpeechLevelEventRatio;
        return $this;
    }

    public function getLowSpeechToNoiseEventRatio(): ?string
    {
        return $this->lowSpeechToNoiseEventRatio;
    }

    public function setLowSpeechToNoiseEventRatio(?string $lowSpeechToNoiseEventRatio): self
    {
        $this->lowSpeechToNoiseEventRatio = $lowSpeechToNoiseEventRatio;
        return $this;
    }

    public function getMicGlitchRate(): ?string
    {
        return $this->micGlitchRate;
    }

    public function setMicGlitchRate(?string $micGlitchRate): self
    {
        $this->micGlitchRate = $micGlitchRate;
        return $this;
    }

    public function getReceivedNoiseLevel(): ?float
    {
        return $this->receivedNoiseLevel;
    }

    public function setReceivedNoiseLevel(?float $receivedNoiseLevel): self
    {
        $this->receivedNoiseLevel = $receivedNoiseLevel;
        return $this;
    }

    public function getReceivedSignalLevel(): ?float
    {
        return $this->receivedSignalLevel;
    }

    public function setReceivedSignalLevel(?float $receivedSignalLevel): self
    {
        $this->receivedSignalLevel = $receivedSignalLevel;
        return $this;
    }

    public function getRenderDeviceDriver(): ?string
    {
        return $this->renderDeviceDriver;
    }

    public function setRenderDeviceDriver(?string $renderDeviceDriver): self
    {
        $this->renderDeviceDriver = $renderDeviceDriver;
        return $this;
    }

    public function getRenderDeviceName(): ?string
    {
        return $this->renderDeviceName;
    }

    public function setRenderDeviceName(?string $renderDeviceName): self
    {
        $this->renderDeviceName = $renderDeviceName;
        return $this;
    }

    public function getRenderMuteEventRatio(): ?string
    {
        return $this->renderMuteEventRatio;
    }

    public function setRenderMuteEventRatio(?string $renderMuteEventRatio): self
    {
        $this->renderMuteEventRatio = $renderMuteEventRatio;
        return $this;
    }

    public function getRenderNotFunctioningEventRatio(): ?string
    {
        return $this->renderNotFunctioningEventRatio;
    }

    public function setRenderNotFunctioningEventRatio(?string $renderNotFunctioningEventRatio): self
    {
        $this->renderNotFunctioningEventRatio = $renderNotFunctioningEventRatio;
        return $this;
    }

    public function getRenderZeroVolumeEventRatio(): ?string
    {
        return $this->renderZeroVolumeEventRatio;
    }

    public function setRenderZeroVolumeEventRatio(?string $renderZeroVolumeEventRatio): self
    {
        $this->renderZeroVolumeEventRatio = $renderZeroVolumeEventRatio;
        return $this;
    }

    public function getSentNoiseLevel(): ?float
    {
        return $this->sentNoiseLevel;
    }

    public function setSentNoiseLevel(?float $sentNoiseLevel): self
    {
        $this->sentNoiseLevel = $sentNoiseLevel;
        return $this;
    }

    public function getSentSignalLevel(): ?float
    {
        return $this->sentSignalLevel;
    }

    public function setSentSignalLevel(?float $sentSignalLevel): self
    {
        $this->sentSignalLevel = $sentSignalLevel;
        return $this;
    }

    public function getSpeakerGlitchRate(): ?string
    {
        return $this->speakerGlitchRate;
    }

    public function setSpeakerGlitchRate(?string $speakerGlitchRate): self
    {
        $this->speakerGlitchRate = $speakerGlitchRate;
        return $this;
    }

}
