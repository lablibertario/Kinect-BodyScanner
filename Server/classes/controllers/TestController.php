<?php

/*
 * Test Controller.
*/ 

class TestController extends AbstractController
{
    /*
     * GET method.
     */ 

    public function get($request)
    {
        return "Test Passed, dis API be sick";
    }

}