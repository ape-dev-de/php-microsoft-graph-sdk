<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsMediaStream resources
 *
 * Available select fields:
 * - audioCodec
 * - averageAudioDegradation
 * - averageAudioNetworkJitter
 * - averageBandwidthEstimate
 * - averageFreezeDuration
 * - averageJitter
 * - averagePacketLossRate
 * - averageRatioOfConcealedSamples
 * - averageReceivedFrameRate
 * - averageRoundTripTime
 * - averageVideoFrameLossPercentage
 * - averageVideoFrameRate
 * - averageVideoPacketLossRate
 * - endDateTime
 * - isAudioForwardErrorCorrectionUsed
 * - lowFrameRateRatio
 * - lowVideoProcessingCapabilityRatio
 * - maxAudioNetworkJitter
 * - maxJitter
 * - maxPacketLossRate
 * - maxRatioOfConcealedSamples
 * - maxRoundTripTime
 * - packetUtilization
 * - postForwardErrorCorrectionPacketLossRate
 * - rmsFreezeDuration
 * - startDateTime
 * - streamDirection
 * - streamId
 * - videoCodec
 * - wasMediaBypassed
 */
class CallRecordsMediaStreamQueryOptions extends QueryOptions
{
    public const FIELD_AUDIO_CODEC = 'audioCodec';
    public const FIELD_AVERAGE_AUDIO_DEGRADATION = 'averageAudioDegradation';
    public const FIELD_AVERAGE_AUDIO_NETWORK_JITTER = 'averageAudioNetworkJitter';
    public const FIELD_AVERAGE_BANDWIDTH_ESTIMATE = 'averageBandwidthEstimate';
    public const FIELD_AVERAGE_FREEZE_DURATION = 'averageFreezeDuration';
    public const FIELD_AVERAGE_JITTER = 'averageJitter';
    public const FIELD_AVERAGE_PACKET_LOSS_RATE = 'averagePacketLossRate';
    public const FIELD_AVERAGE_RATIO_OF_CONCEALED_SAMPLES = 'averageRatioOfConcealedSamples';
    public const FIELD_AVERAGE_RECEIVED_FRAME_RATE = 'averageReceivedFrameRate';
    public const FIELD_AVERAGE_ROUND_TRIP_TIME = 'averageRoundTripTime';
    public const FIELD_AVERAGE_VIDEO_FRAME_LOSS_PERCENTAGE = 'averageVideoFrameLossPercentage';
    public const FIELD_AVERAGE_VIDEO_FRAME_RATE = 'averageVideoFrameRate';
    public const FIELD_AVERAGE_VIDEO_PACKET_LOSS_RATE = 'averageVideoPacketLossRate';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_IS_AUDIO_FORWARD_ERROR_CORRECTION_USED = 'isAudioForwardErrorCorrectionUsed';
    public const FIELD_LOW_FRAME_RATE_RATIO = 'lowFrameRateRatio';
    public const FIELD_LOW_VIDEO_PROCESSING_CAPABILITY_RATIO = 'lowVideoProcessingCapabilityRatio';
    public const FIELD_MAX_AUDIO_NETWORK_JITTER = 'maxAudioNetworkJitter';
    public const FIELD_MAX_JITTER = 'maxJitter';
    public const FIELD_MAX_PACKET_LOSS_RATE = 'maxPacketLossRate';
    public const FIELD_MAX_RATIO_OF_CONCEALED_SAMPLES = 'maxRatioOfConcealedSamples';
    public const FIELD_MAX_ROUND_TRIP_TIME = 'maxRoundTripTime';
    public const FIELD_PACKET_UTILIZATION = 'packetUtilization';
    public const FIELD_POST_FORWARD_ERROR_CORRECTION_PACKET_LOSS_RATE = 'postForwardErrorCorrectionPacketLossRate';
    public const FIELD_RMS_FREEZE_DURATION = 'rmsFreezeDuration';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STREAM_DIRECTION = 'streamDirection';
    public const FIELD_STREAM_ID = 'streamId';
    public const FIELD_VIDEO_CODEC = 'videoCodec';
    public const FIELD_WAS_MEDIA_BYPASSED = 'wasMediaBypassed';

    /**
     * Select specific CallRecordsMediaStream properties
     * 
     * @param array<string> $select Use CallRecordsMediaStreamQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
