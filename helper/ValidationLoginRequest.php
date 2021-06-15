<?php

function validateLoginRequest(LoginRequest $request)
{
	if (!isset($request->username) && !isset($request->password)) {
		throw new ValidationException("Username or password is null");
	} else if (trim($request->username) == "" && trim($request->password) == "") {
		throw new ValidationException("Username or password is empty");
	}
}