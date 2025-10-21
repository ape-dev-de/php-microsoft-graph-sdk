<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentRequest
 */
class ThreatAssessmentRequest
{
    /**
     */
    private ?string $category;

    /**
     * The content type of threat assessment. Possible values are: mail, url, file.
     */
    private ?string $contentType;

    /**
     * The threat assessment request creator.
     */
    private ?string $createdBy;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     */
    private ?string $expectedAssessment;

    /**
     * The source of the threat assessment request. Possible values are: administrator.
     */
    private ?string $requestSource;

    /**
     * The assessment process status. Possible values are: pending, completed.
     */
    private ?string $status;

    /**
     * A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     * @var string[]
     */
    private array $results = [];


    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getExpectedAssessment(): ?string
    {
        return $this->expectedAssessment;
    }

    public function setExpectedAssessment(?string $expectedAssessment): self
    {
        $this->expectedAssessment = $expectedAssessment;
        return $this;
    }

    public function getRequestSource(): ?string
    {
        return $this->requestSource;
    }

    public function setRequestSource(?string $requestSource): self
    {
        $this->requestSource = $requestSource;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param string[] $results
     */
    public function setResults(array $results): self
    {
        $this->results = $results;
        return $this;
    }

}
