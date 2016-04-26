---
layout: standard
title: Query examples
---


### Get *boolean* returning methods with an *int* parameter

	SELECT ?method WHERE {
		?method a woc:Method .
		?method woc:returns woc:boolean .
		?method woc:has_parameter ?par .
		?par woc:parameter_position 0 .
		?par woc:type woc:int .

		filter not exists {
			?method woc:has_parameter ?par1 .
			?par1 woc:parameter_position 1
		}
	}


### Get *lambdas* implementing an *interface*


	SELECT ?lambda WHERE {
		?lambda woc:functional_implements ?i
	}


### Get methods' usage cases


	SELECT ?invoker {
		?method a woc:Method .
		?invoker woc:requests ?method .
	}
