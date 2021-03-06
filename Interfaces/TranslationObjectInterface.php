<?php

namespace Skippy565\ObjectTranslationBundle\Interfaces;

/**
 * Interface TranslationObjectInterface
 * @package Skippy565\ObjectTranslationBundle\Interfaces
 */
interface TranslationObjectInterface
{
    /**
     * function sets all the defaults and sets the to object to a specified type
     * if the to object isn't sent into the constructor
     *
     * @param object|array $fromObject
     * @param object|array $toObject
     */
    public function __construct($fromObject, $toObject = null);

    /**
     * translating outward is a custom model / hash
     * return the data structure
     */
    public function setToObject();

    /**
     * key value rules of straight translation
     * key is the from object property / key
     * value is the to object property / key
     */
    public function setTranslationModel();

    /**
     * hash of translation functions to call
     * key is the value to set
     * value is the function to call
     * using the from Object
     */
    public function setMappingFunctions();

    /**
     * has key to overwrite, and an array of values good to overwrite.
     * if it is always overwritten, take care of that in mapping functions.
     * if it is never to be overwritten, have an empty array
     */
    public function setOverwritingRules();
}
