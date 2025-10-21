<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailAssessmentRequest
 */
class MailAssessmentRequest
{
    /**
     * The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     */
    private ?string $destinationRoutingReason;

    /**
     * The resource URI of the mail message for assessment.
     */
    private ?string $messageUri;

    /**
     * The mail recipient whose policies are used to assess the mail.
     */
    private ?string $recipientEmail;


    public function getDestinationRoutingReason(): ?string
    {
        return $this->destinationRoutingReason;
    }

    public function setDestinationRoutingReason(?string $destinationRoutingReason): self
    {
        $this->destinationRoutingReason = $destinationRoutingReason;
        return $this;
    }

    public function getMessageUri(): ?string
    {
        return $this->messageUri;
    }

    public function setMessageUri(?string $messageUri): self
    {
        $this->messageUri = $messageUri;
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
