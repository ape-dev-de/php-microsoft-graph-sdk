<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailFileAssessmentRequest
 */
class EmailFileAssessmentRequest
{
    /**
     * Base64 encoded .eml email file content. The file content can't fetch back because it isn't stored.
     */
    private ?string $contentData;

    /**
     * The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     */
    private ?string $destinationRoutingReason;

    /**
     * The mail recipient whose policies are used to assess the mail.
     */
    private ?string $recipientEmail;


    public function getContentData(): ?string
    {
        return $this->contentData;
    }

    public function setContentData(?string $contentData): self
    {
        $this->contentData = $contentData;
        return $this;
    }

    public function getDestinationRoutingReason(): ?string
    {
        return $this->destinationRoutingReason;
    }

    public function setDestinationRoutingReason(?string $destinationRoutingReason): self
    {
        $this->destinationRoutingReason = $destinationRoutingReason;
        return $this;
    }

    public function getRecipientEmail(): ?string
    {
        return $this->recipientEmail;
    }

    public function setRecipientEmail(?string $recipientEmail): self
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

}
