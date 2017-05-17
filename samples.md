---
layout: mdcontent
title: Query examples
---


### Select recursive methods

	SELECT ?method
	WHERE {
	  ?method a woc:Method ;
	          woc:references+ ?method .
	}
	LIMIT 20


### Get the most referenced classes

	SELECT ?class (COUNT(DISTINCT ?anotherClass) as ?count)
	WHERE {
	  ?class a woc:Class .
	  ?method a woc:Method ;
	      woc:isDeclaredBy ?anotherClass ;
	      woc:references ?class .
	  FILTER (?class != ?anotherClass)
	}
	GROUP BY ?class
	ORDER BY DESC(?count)
	LIMIT 3

### Sort classes by the number of subclasses

	SELECT ?superClass (COUNT(DISTINCT ?class) as ?count)
	WHERE {
	  ?class a woc:Class;
	         woc:extends* ?superClass .
	}
	GROUP BY ?superClass
	ORDER BY DESC(?count)
	LIMIT 3


### Singletons

	SELECT DISTINCT ?class
	WHERE {
	  ?class woc:hasConstructor ?constructor ;
	         woc:hasField ?field ;
	         woc:hasMethod ?method .
	  ?constructor woc:hasModifier woc:Private .
	  ?field woc:hasModifier woc:Static , woc:Private ;
	         woc:hasType ?class .
	  ?method woc:returns ?field ;
	          woc:hasModifier woc:Static , woc:Public .
	}


### Builder

	SELECT DISTINCT ?abstractBuilder ?concreteBuilder ?product
	WHERE {
	  ?abstractBuilder a woc:Class;
	                   woc:hasModifier woc:Abstract ;
	                   woc:hasField ?field ;
	                   woc:hasMethod ?abstractBuildMethod ;
	                   woc:hasMethod ?getter .
	  ?product a woc:Class .
	  ?field woc:hasType ?product .
	  ?getter woc:returns ?field .
	  ?abstractBuildMethod woc:hasModifier woc:Abstract .
	  ?concreteBuilder woc:extends ?abstractBuilder ;
	                   woc:hasMethod ?concreteBuildMethod .
	  ?concreteBuildMethod woc:overrides ?abstractBuildMethod .
	  ?concreteBuildMethod woc:references ?field .
	  FILTER NOT EXISTS {
	    ?getter woc:hasParameter ?parameter
	  }
	}


### Factories

	SELECT DISTINCT ?factory
	WHERE {
	  ?abstractClass a woc:Class ;
	                 woc:hasModifier woc:Abstract .
	  ?factory a woc:Class;
	           woc:hasMethod ?method .
	  ?method woc:hasReturnType/woc:extends* ?abstractClass .
	  FILTER NOT EXISTS {
	    ?factory woc:hasMethod ?anotherMethod .
	    ?anotherMethod woc:hasReturnType ?type ;
	                   woc:hasModifier woc:Public .
	    FILTER NOT EXISTS {
	    	?type woc:extends* ?abstractClass .
	    }
	  }
	}
	LIMIT 20


### Select all resources associated with Public-key cryptography and, in particular, with RSA 

	SELECT ?r
	WHERE {
	  ?r dul:associatedWith
	       dbr:Public-key_cryptography ,
	       dbr:RSA_\(cryptosystem\) .
	}


### Select methods to manipulate Zip files

	SELECT ?method
	WHERE {
	  ?method a woc:Method ; 
	          dul:associatedWith dbr:Zip_\(file_format\) , dbr:Input\/output
	}


### Select methods to read an image at a specified URL, along with the return type

	SELECT ?method ?type
	WHERE {
	  ?method a woc:Method;
	          woc:hasParameter ?parameter ;
	          woc:hasReturnType ?type .
	  ?parameter dul:associatedWith dbr:Uniform_Resource_Locator, dbr:Image .
	}


### Select methods to compute the cube root of a parameter of type double

	SELECT ?method
	WHERE {
	  ?method a woc:Method ;
	          woc:hasParameter/woc:hasType woc:Double ; 
	          dul:associatedWith dbr:Cube_root .
	}
