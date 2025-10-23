<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingRestricted
 */
class OnlineMeetingRestricted
{
    /** 
     * Specifies the reason shared content from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
     * @var OnlineMeetingContentSharingDisabledReason|\stdClass|null
     */
    public mixed $contentSharingDisabled = null;

    /** 
     * Specifies the reason video from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue.
     * @var OnlineMeetingVideoDisabledReason|\stdClass|null
     */
    public mixed $videoDisabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contentSharingDisabled'])) {
            $this->contentSharingDisabled = is_array($data['contentSharingDisabled']) ? new OnlineMeetingContentSharingDisabledReason($data['contentSharingDisabled']) : $data['contentSharingDisabled'];
        }
        if (isset($data['videoDisabled'])) {
            $this->videoDisabled = is_array($data['videoDisabled']) ? new OnlineMeetingVideoDisabledReason($data['videoDisabled']) : $data['videoDisabled'];
        }
    }
}
