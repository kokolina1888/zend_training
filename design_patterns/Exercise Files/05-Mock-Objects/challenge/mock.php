<?php 
class MockUser extends User {
	 public function delete($id)
    {
        echo "Does nothing";

        return true;
    }
}