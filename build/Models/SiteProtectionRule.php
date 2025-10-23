<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionRule
 */
class SiteProtectionRule
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The identity of person who created the rule.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The time of creation of the rule. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Contains error details if an operation on a rule fails.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;

    /**  */
    public ?bool $isAutoApplyEnabled = null;

    /** 
     * The identity of the person who last modified the rule.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Timestamp of the last modification made to the rule. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The status of the protection rule. The possible values are: draft, active, completed, completedWithErrors, unknownFutureValue. The draft member is currently unsupported.
     * @var ProtectionRuleStatus|\stdClass|null
     */
    public mixed $status = null;

    /** Contains a site expression. For examples, see siteExpression example. */
    public ?string $siteExpression = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['isAutoApplyEnabled'])) {
            $this->isAutoApplyEnabled = $data['isAutoApplyEnabled'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ProtectionRuleStatus($data['status']) : $data['status'];
        }
        if (isset($data['siteExpression'])) {
            $this->siteExpression = $data['siteExpression'];
        }
    }
}
