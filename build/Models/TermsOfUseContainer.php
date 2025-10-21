<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsOfUseContainer
 */
class TermsOfUseContainer
{
    /**
     * Represents the current status of a user's response to a company's customizable terms of use agreement.
     */
    private array $agreementAcceptances = [];

    /**
     * Represents a tenant's customizable terms of use agreement that's created and managed with Microsoft Entra ID Governance.
     * @var string[]
     */
    private array $agreements = [];


    public function getAgreementAcceptances(): array
    {
        return $this->agreementAcceptances;
    }

    public function setAgreementAcceptances(array $agreementAcceptances): self
    {
        $this->agreementAcceptances = $agreementAcceptances;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAgreements(): array
    {
        return $this->agreements;
    }

    /**
     * @param string[] $agreements
     */
    public function setAgreements(array $agreements): self
    {
        $this->agreements = $agreements;
        return $this;
    }

}
