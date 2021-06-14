<?php

class SocialMedia {

	public string $name;

}

final class Facebook extends SocialMedia {
	final public function login(string $username, string $password): bool
	{
		return TRUE;
	}
}

// Error
// class FakeFacebook extends Facebook {
// 	public function login(string $username, string $password): bool
// 	{
// 		return FALSE;
// 	}
// }