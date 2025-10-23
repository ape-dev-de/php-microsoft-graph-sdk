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
            $this->contentSharingDisabled = $data['contentSharingDisabled'];
        }
        if (isset($data['videoDisabled'])) {
            $this->videoDisabled = $data['videoDisabled'];
        }
    }
}
