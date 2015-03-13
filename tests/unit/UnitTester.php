<?php //[STAMP] 4c035d8aedd13602af39cb9f738a2f4a

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use Codeception\Module\Asserts;
use Codeception\Module\UnitHelper;
use Codeception\Module\Drupal7\Drupal7;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
*/
class UnitTester extends \Codeception\Actor
{
   
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are equal.
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     *
     * @return mixed
     * @see \Codeception\Module\Asserts::assertEquals()
     */
    public function assertEquals($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not equal
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotEquals()
     */
    public function assertNotEquals($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertNotEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that expected is greater than actual
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertGreaterThan()
     */
    public function assertGreaterThan($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertGreaterThan', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @deprecated
     * @see \Codeception\Module\Asserts::assertGreaterThen()
     */
    public function assertGreaterThen($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertGreaterThen', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that expected is greater or equal than actual
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertGreaterThanOrEqual()
     */
    public function assertGreaterThanOrEqual($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertGreaterThanOrEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @deprecated
     * @see \Codeception\Module\Asserts::assertGreaterThenOrEqual()
     */
    public function assertGreaterThenOrEqual($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertGreaterThenOrEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that expected is less than actual
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertLessThan()
     */
    public function assertLessThan($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertLessThan', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that expected is less or equal than actual
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertLessThanOrEqual()
     */
    public function assertLessThanOrEqual($expected, $actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertLessThanOrEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack contains needle
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \Codeception\Module\Asserts::assertContains()
     */
    public function assertContains($needle, $haystack, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertContains', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack doesn't contain needle.
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotContains()
     */
    public function assertNotContains($needle, $haystack, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertNotContains', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is empty.
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertEmpty()
     */
    public function assertEmpty($actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertEmpty', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not empty.
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotEmpty()
     */
    public function assertNotEmpty($actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertNotEmpty', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is NULL
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNull()
     */
    public function assertNull($actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertNull', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not NULL
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotNull()
     */
    public function assertNotNull($actual, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertNotNull', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is positive.
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertTrue()
     */
    public function assertTrue($condition, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertTrue', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is negative.
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertFalse()
     */
    public function assertFalse($condition, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertFalse', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fails the test with message.
     *
     * @param $message
     * @see \Codeception\Module\Asserts::fail()
     */
    public function fail($message) {
        return $this->scenario->runStep(new \Codeception\Step\Action('fail', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Assert that a countable item matches an expected amount.
     *
     * @param $countable
     *   The countable item that should be compared.
     * @param $expected
     *   The expected count() result.
     * @param string $message
     *   The message that should be shown in the event of a failure.
     * @return mixed
     * @see \Codeception\Module\UnitHelper::assertCount()
     */
    public function assertCount($countable, $expected, $message = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('assertCount', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Assert that a Codeception assertion should fail.
     *
     * @param callable $function
     *   A closure containing the code that should fail.
     *
     * @return void
     * @see \Codeception\Module\UnitHelper::shouldFail()
     */
    public function shouldFail($function) {
        return $this->scenario->runStep(new \Codeception\Step\Action('shouldFail', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an exception is thrown.
     *
     * @param $exception
     *   The class name name of the exception you are expecting (i.e. PHPUnit_Framework_AssertionFailedError)
     * @param $function
     *   A closure containing the code that should throw the expected exception.
     * @return bool
     *   True if the exception was thrown, false if not.
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\UnitHelper::seeExceptionThrown()
     */
    public function canSeeExceptionThrown($exception, $function) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeExceptionThrown', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an exception is thrown.
     *
     * @param $exception
     *   The class name name of the exception you are expecting (i.e. PHPUnit_Framework_AssertionFailedError)
     * @param $function
     *   A closure containing the code that should throw the expected exception.
     * @return bool
     *   True if the exception was thrown, false if not.
     * @see \Codeception\Module\UnitHelper::seeExceptionThrown()
     */
    public function seeExceptionThrown($exception, $function) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeExceptionThrown', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * { @inheritdoc }
     * @see \Codeception\Module\Drupal7\Drupal7::bootstrapDrupal()
     */
    public function bootstrapDrupal() {
        return $this->scenario->runStep(new \Codeception\Step\Action('bootstrapDrupal', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * { @inheritdoc }
     * @see \Codeception\Module\Drupal7\Drupal7::validateDrupalRoot()
     */
    public function validateDrupalRoot($root) {
        return $this->scenario->runStep(new \Codeception\Step\Action('validateDrupalRoot', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Get the Drupal root directory.
     *
     * @return string
     *   The root directory of the Drupal installation.
     * @see \Codeception\Module\DrupalBaseModule::getDrupalRoot()
     */
    public function getDrupalRoot() {
        return $this->scenario->runStep(new \Codeception\Step\Action('getDrupalRoot', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type exists.
     *
     * @param string $entityMachineName
     *   The machine name of the entity you are testing for (i.e. node)
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityExists()
     */
    public function canSeeEntityExists($entityMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeEntityExists', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type exists.
     *
     * @param string $entityMachineName
     *   The machine name of the entity you are testing for (i.e. node)
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityExists()
     */
    public function seeEntityExists($entityMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeEntityExists', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grab the output of entity_get_info().
     *
     * @param null $entityType
     *   The entity type, e.g. node, for which the info shall be returned, or NULL to return an array with info about
     *   all types.
     *
     * @return array
     *   Information about an entity type, or all entities if one was passed in.
     * @see \Codeception\Module\Drupal7\Drupal7::grabEntityInfo()
     */
    public function grabEntityInfo($entityType = null) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabEntityInfo', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type does not exist.
     *
     * @param string $entityMachineName
     *   The machine name of the entity you are testing for (i.e. node)
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityExists()
     */
    public function cantSeeEntityExists($entityMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeEntityExists', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type does not exist.
     *
     * @param string $entityMachineName
     *   The machine name of the entity you are testing for (i.e. node)
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityExists()
     */
    public function dontSeeEntityExists($entityMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeEntityExists', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type has a specific bundle.
     *
     * @param $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param $bundleMachineName
     *    The machine name of the bundle you are testing for (i.e. article)
     *
     * @return bool|void
     *     Will return true if test passes or void if it fails.
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityHasBundle()
     */
    public function canSeeEntityHasBundle($entityMachineName, $bundleMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeEntityHasBundle', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type has a specific bundle.
     *
     * @param $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param $bundleMachineName
     *    The machine name of the bundle you are testing for (i.e. article)
     *
     * @return bool|void
     *     Will return true if test passes or void if it fails.
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityHasBundle()
     */
    public function seeEntityHasBundle($entityMachineName, $bundleMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeEntityHasBundle', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type does not have a specific bundle.
     *
     * @param $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param $bundleMachineName
     *    The machine name of the bundle you are testing for (i.e. article)
     *
     * @return bool|void
     *     Will return true if test passes or void if it fails.
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityHasBundle()
     */
    public function cantSeeEntityHasBundle($entityMachineName, $bundleMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeEntityHasBundle', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type does not have a specific bundle.
     *
     * @param $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param $bundleMachineName
     *    The machine name of the bundle you are testing for (i.e. article)
     *
     * @return bool|void
     *     Will return true if test passes or void if it fails.
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityHasBundle()
     */
    public function dontSeeEntityHasBundle($entityMachineName, $bundleMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeEntityHasBundle', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type has a base field.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $baseField
     *    The name of the base field you are looking for.
     * @param string $schemaKey
     *    The key of the array item that contains the entity base fields.
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityHasBaseField()
     */
    public function canSeeEntityHasBaseField($entityMachineName, $baseField, $schemaKey = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeEntityHasBaseField', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type has a base field.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $baseField
     *    The name of the base field you are looking for.
     * @param string $schemaKey
     *    The key of the array item that contains the entity base fields.
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityHasBaseField()
     */
    public function seeEntityHasBaseField($entityMachineName, $baseField, $schemaKey = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeEntityHasBaseField', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type does not have a base field.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $baseField
     *    The name of the base field you are looking for.
     * @param string $schemaKey
     *    The key of the array item that contains the entity base fields.
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityHasBaseField()
     */
    public function cantSeeEntityHasBaseField($entityMachineName, $baseField, $schemaKey = null) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeEntityHasBaseField', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type does not have a base field.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $baseField
     *    The name of the base field you are looking for.
     * @param string $schemaKey
     *    The key of the array item that contains the entity base fields.
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityHasBaseField()
     */
    public function dontSeeEntityHasBaseField($entityMachineName, $baseField, $schemaKey = null) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeEntityHasBaseField', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type has a view mode assigned.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $viewModeMachineName
     *    The machine name of the view mode you are looking for (i.e. teaser)
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityHasViewMode()
     */
    public function canSeeEntityHasViewMode($entityMachineName, $viewModeMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeEntityHasViewMode', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type has a view mode assigned.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $viewModeMachineName
     *    The machine name of the view mode you are looking for (i.e. teaser)
     * @see \Codeception\Module\Drupal7\Drupal7::seeEntityHasViewMode()
     */
    public function seeEntityHasViewMode($entityMachineName, $viewModeMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeEntityHasViewMode', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type doesn't have a specific view mode assigned.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $viewModeMachineName
     *    The machine name of the view mode you are looking for (i.e. teaser)
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityHasViewMode()
     */
    public function cantSeeEntityHasViewMode($entityMachineName, $viewModeMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeEntityHasViewMode', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity type doesn't have a specific view mode assigned.
     *
     * @param string $entityMachineName
     *    The machine name of the entity you are testing (i.e. node)
     * @param string $viewModeMachineName
     *    The machine name of the view mode you are looking for (i.e. teaser)
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeEntityHasViewMode()
     */
    public function dontSeeEntityHasViewMode($entityMachineName, $viewModeMachineName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeEntityHasViewMode', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that a field base exists.
     *
     * @param string $fieldName
     *   The field name you are looking for (i.e. field_image).
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::seeFieldExists()
     */
    public function canSeeFieldExists($fieldName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeFieldExists', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that a field base exists.
     *
     * @param string $fieldName
     *   The field name you are looking for (i.e. field_image).
     * @see \Codeception\Module\Drupal7\Drupal7::seeFieldExists()
     */
    public function seeFieldExists($fieldName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeFieldExists', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grab a list of all fields.
     *
     * This is simply a wrapper around field_info_field_map().
     *
     * @return array
     *   Information about an entity type, or all entities if one was passed in.
     * @see \Codeception\Module\Drupal7\Drupal7::grabFieldList()
     */
    public function grabFieldList() {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabFieldList', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that a field base does not exist.
     *
     * @param string $fieldName
     *   The field name you are looking for (i.e. field_image).
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeFieldExists()
     */
    public function cantSeeFieldExists($fieldName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeFieldExists', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that a field base does not exist.
     *
     * @param string $fieldName
     *   The field name you are looking for (i.e. field_image).
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeFieldExists()
     */
    public function dontSeeFieldExists($fieldName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeFieldExists', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity bundle has a field instance attached.
     *
     * @param string $entityType
     *   The entity type the bundle is attached to.
     * @param string $fieldName
     *   The field name (i.e. field_image)
     * @param string $bundleName
     *   The bundle name you are looking on.
     *
     * @return void
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::seeBundleHasField()
     */
    public function canSeeBundleHasField($entityType, $fieldName, $bundleName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('seeBundleHasField', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity bundle has a field instance attached.
     *
     * @param string $entityType
     *   The entity type the bundle is attached to.
     * @param string $fieldName
     *   The field name (i.e. field_image)
     * @param string $bundleName
     *   The bundle name you are looking on.
     *
     * @return void
     * @see \Codeception\Module\Drupal7\Drupal7::seeBundleHasField()
     */
    public function seeBundleHasField($entityType, $fieldName, $bundleName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('seeBundleHasField', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grab the information about a field instance attached to a bundle.
     *
     * This is simple a wrapper around field_info_instance.
     *
     * @param string $entityType
     *   The entity type the bundle is attached to.
     * @param string $fieldName
     *   The field name (i.e. field_image)
     * @param string $bundleName
     *   The bundle name you are looking on.
     * @return array|null
     *   An array containing the output of field_info_instance or null if the field instance doesn't exist.
     * @see \Codeception\Module\Drupal7\Drupal7::grabFieldInstance()
     */
    public function grabFieldInstance($entityType, $fieldName, $bundleName) {
        return $this->scenario->runStep(new \Codeception\Step\Action('grabFieldInstance', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity bundle does not have a field instance attached.
     *
     * @param string $entityType
     *   The entity type the bundle is attached to.
     * @param string $fieldName
     *   The field name (i.e. field_image)
     * @param string $bundleName
     *   The bundle name you are looking on.
     *
     * @return void
     * Conditional Assertion: Test won't be stopped on fail
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeBundleHasField()
     */
    public function cantSeeBundleHasField($entityType, $fieldName, $bundleName) {
        return $this->scenario->runStep(new \Codeception\Step\ConditionalAssertion('dontSeeBundleHasField', func_get_args()));
    }
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that an entity bundle does not have a field instance attached.
     *
     * @param string $entityType
     *   The entity type the bundle is attached to.
     * @param string $fieldName
     *   The field name (i.e. field_image)
     * @param string $bundleName
     *   The bundle name you are looking on.
     *
     * @return void
     * @see \Codeception\Module\Drupal7\Drupal7::dontSeeBundleHasField()
     */
    public function dontSeeBundleHasField($entityType, $fieldName, $bundleName) {
        return $this->scenario->runStep(new \Codeception\Step\Assertion('dontSeeBundleHasField', func_get_args()));
    }
}
