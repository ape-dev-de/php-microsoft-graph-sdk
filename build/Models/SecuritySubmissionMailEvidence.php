<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySubmissionMailEvidence
 */
class SecuritySubmissionMailEvidence
{
    /**
     */
    private ?string $networkMessageId;

    /**
     */
    private ?string $recipient;

    /**
     */
    private ?string $reportType;

    /**
     */
    private ?string $sender;

    /**
     */
    private ?string $senderIp;

    /**
     */
    private ?string $subject;

    /**
     */
    private ?\DateTimeInterface $submissionDateTime;

    /**
     */
    private ?string $submissionId;

    /**
     */
    private ?string $submitter;


    public function getNetworkMessageId(): ?string
    {
        return $this->networkMessageId;
    }

    public function setNetworkMessageId(?string $networkMessageId): self
    {
        $this->networkMessageId = $networkMessageId;
        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(?string $recipient): self
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function getReportType(): ?string
    {
        return $this->reportType;
    }

    public function setReportType(?string $reportType): self
    {
        $this->reportType = $reportType;
        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(?string $sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function getSenderIp(): ?string
    {
        return $this->senderIp;
    }

    public function setSenderIp(?string $senderIp): self
    {
        $this->senderIp = $senderIp;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getSubmissionDateTime(): ?\DateTimeInterface
    {
        return $this->submissionDateTime;
    }

    public function setSubmissionDateTime(?\DateTimeInterface $submissionDateTime): self
    {
        $this->submissionDateTime = $submissionDateTime;
        return $this;
    }

    public function getSubmissionId(): ?string
    {
        return $this->submissionId;
    }

    public function setSubmissionId(?string $submissionId): self
    {
        $this->submissionId = $submissionId;
        return $this;
    }

    public function getSubmitter(): ?string
    {
        return $this->submitter;
    }

    public function setSubmitter(?string $submitter): self
    {
        $this->submitter = $submitter;
        return $this;
    }

}
