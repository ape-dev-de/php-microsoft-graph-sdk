<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HorizontalSection
 */
class HorizontalSection
{
    /**
     * Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue.
     */
    private ?string $emphasis;

    /**
     * Layout type of the section. The possible values are: none, oneColumn, twoColumns, threeColumns, oneThirdLeftColumn, oneThirdRightColumn, fullWidth, unknownFutureValue.
     */
    private ?string $layout;

    /**
     * The set of vertical columns in this section.
     * @var string[]
     */
    private array $columns = [];


    public function getEmphasis(): ?string
    {
        return $this->emphasis;
    }

    public function setEmphasis(?string $emphasis): self
    {
        $this->emphasis = $emphasis;
        return $this;
    }

    public function getLayout(): ?string
    {
        return $this->layout;
    }

    public function setLayout(?string $layout): self
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * @param string[] $columns
     */
    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

}
