<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDispositionReviewStage
 */
class SecurityDispositionReviewStage
{
    /**
     * Name representing each stage within a collection.
     */
    private ?string $name;

    /**
     * A collection of reviewers at each stage.
     * @var string[]
     */
    private array $reviewersEmailAddresses = [];

    /**
     * The unique sequence number for each stage of the disposition review.
     */
    private ?string $stageNumber;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getReviewersEmailAddresses(): array
    {
        return $this->reviewersEmailAddresses;
    }

    /**
     * @param string[] $reviewersEmailAddresses
     */
    public function setReviewersEmailAddresses(array $reviewersEmailAddresses): self
    {
        $this->reviewersEmailAddresses = $reviewersEmailAddresses;
        return $this;
    }

    public function getStageNumber(): ?string
    {
        return $this->stageNumber;
    }

    public function setStageNumber(?string $stageNumber): self
    {
        $this->stageNumber = $stageNumber;
        return $this;
    }

}
