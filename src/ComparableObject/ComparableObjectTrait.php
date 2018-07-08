<?php
/**
 * sta-comparable-object Project ${PROJECT_URL}
 *
 * @link      ${GITHUB_URL} Source code
 */


namespace Sta\ComparableObject;


trait ComparableObjectTrait
{
    public function equals(?ComparableObject $other): bool
    {
        /** @var ComparableObject $this */
        return $other !== null && $this->hashCode() == $other->hashCode();
    }
}
