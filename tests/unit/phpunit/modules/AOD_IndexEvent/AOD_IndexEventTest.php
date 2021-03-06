<?php

use SuiteCRM\Test\SuitePHPUnitFrameworkTestCase;

class AOD_IndexEventTest extends SuitePHPUnitFrameworkTestCase
{
    public function testAOD_IndexEvent()
    {
        // Execute the constructor and check for the Object type and type attribute
        $aod_indexEvent = BeanFactory::newBean('AOD_IndexEvent');
        $this->assertInstanceOf('AOD_IndexEvent', $aod_indexEvent);
        $this->assertInstanceOf('Basic', $aod_indexEvent);
        $this->assertInstanceOf('SugarBean', $aod_indexEvent);

        $this->assertAttributeEquals('AOD_IndexEvent', 'module_dir', $aod_indexEvent);
        $this->assertAttributeEquals('AOD_IndexEvent', 'object_name', $aod_indexEvent);
        $this->assertAttributeEquals('aod_indexevent', 'table_name', $aod_indexEvent);
        $this->assertAttributeEquals(true, 'new_schema', $aod_indexEvent);
        $this->assertAttributeEquals(true, 'disable_row_level_security', $aod_indexEvent);
        $this->assertAttributeEquals(false, 'importable', $aod_indexEvent);
        $this->assertAttributeEquals(false, 'tracker_visibility', $aod_indexEvent);
    }
}
