@component('mail::message')
Hej {{ $attendee->first_name}},

Vi har modtaget din anmodning om at deltage i workshoppen {{ $attendee->workshop->title }} og du er næsten klar. 
Inden for 24 timer modtager du et betalingslink. Når du har gennemført betalingen er du endeligt tilmeldt til online workshoppen.

**Pris:** 1.500 DKK <br>
**Startdato:** 1. marts 2019

Tjek venligst at nedenstående informationer er korrekte.

**Navn:** {{ $attendee->first_name }} {{ $attendee->last_name }} <br>
**Forventninger til workshoppen:** {{ $attendee->questions['your_expectations'] ?? 'Ikke angivet' }} <br>
**Har du allerede en business:** {{ $attendee->has_business ?? 'Ikke angivet' }} <br>

Mange hilsner <br>
Nicki Frandsen <br>
Dig & Din Business

P.s. jeg er altid interesseret i at høre din mening. Er der noget som du savner, at jeg går mere i dybden med, eller har du noget feedback til mig, så er du altid velkommen til at kontakte mig på mail [info@digogdinbusiness.dk](info@digogdinbusiness.dk).

P.s.s hvis du ikke allerede har tilmeldt dig Dig & Din Business nyhedsbrevet, der udkommer to gange månedligt. Skriv dig på listen lige her: [digogdinbusiness.dk/nyhedsbrev](http://digogdinbusiness.dk/nyhedsbrev)

@component('mail::subcopy')

Info og nyttige links: &nbsp;&nbsp;&nbsp; [Website](https://digogdinbusiness.dk) &nbsp;&nbsp;&nbsp;
[E-mail](mailto:info@digogdinbusiness.dk) &nbsp;&nbsp;&nbsp;
[Facebook](https://www.facebook.com/digogdinbusiness/) &nbsp;&nbsp;&nbsp;

@endcomponent

@endcomponent

