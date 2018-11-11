{ "collection" :
    {
        "title" : "TV Series Database",
            "type" : "serie",
            "version" : "1.0",
            "href" : "{{ path_for('series')}}",

            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/Movie","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
  {"rel" : "collection", "href" : "{{ path_for('series') }}","prompt":"Tvseries"}
            ],
      
            "items" : [
                {% for item in items %}
	  
                {
                    "href" : "{{ path_for('series') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la serie"}
                        ]
                        } {% if not loop.last %},{% endif %}
	  
                {% endfor %}
	  
            ],
      
            "template" : {
            "data" : [
                {"name" : "name", "value" : "", "prompt" : "Nombre de la serie"},
                {"name" : "description", "value" : "", "prompt" : "Descripción de la serie"},
                {"name" : "director", "value" : "", "prompt" : "Director de la serie"},
                {"name" : "datePublished", "value" : "", "prompt" : "Fecha de lanzamiento"},
                {"name" : "embedUrl", "value" : "", "prompt" : "Trailer en Youtube"}        
            ]
                }
    } 
}




