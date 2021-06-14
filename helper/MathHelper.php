<?php

namespace Helper {

	class MathHelper {

		static public int $number = 0;

		static public function sum(int...$numbers) {
			$total = 0;
			foreach ($numbers as $number) {
				$total += $number;
			}
			return $total;
		}

	}

}