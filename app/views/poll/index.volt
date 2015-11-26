<h1> hi </h1>

<ul>
{% for polls in poll %}
	<li>{{ link_to('poll/show', polls.question) }}</li>
{% endfor %}
</ul>