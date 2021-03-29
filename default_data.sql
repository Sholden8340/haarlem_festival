-- Jazz Arists
INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Gumbo Kings", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Evolve", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Ntjam Rosie", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Wicked Jazz Sounds", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Tom Thomsom Assemble", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Jonna Frazer", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Fox & The Mayors", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Uncle Sue", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Chris Allen", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Myles Sanko", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Ruis Soundsystem", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("The Family XL", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Gare du Nord", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Rilan & The Bombadiers", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Soul Six", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Han Bennink", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("The Nordanians", "Description", "Classic Jazz");

INSERT INTO artist (artist_name, artist_description, genre)
VALUES ("Lilith Merlot", "Description", "Classic Jazz");




-- Jazz Locations
INSERT INTO location(location_name, location_description, capacity)
VALUES ("Patronaat", "Main Hall", 300);

INSERT INTO location(location_name, location_description, capacity)
VALUES ("Patronaat", "Second Hall", 200);

INSERT INTO location(location_name, location_description, capacity)
VALUES ("Patronaat", "Third Hall", 150);

INSERT INTO location(location_name, location_description, capacity)
VALUES ("Grote Markt", "Main Stage", 5000);

-- Jazz Events
INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Gumbo Kings Patronaat", "Jazz", "2021-07-26 18:00:00", "2021-07-26 19:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Evolve Patronaat", "Jazz", "2021-07-26 19:30:00", "2021-07-26 20:30:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Ntjam Rosie Patronaat", "Jazz", "2021-07-26 21:00:00", "2021-07-26 22:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Wicked Jazz Sounds Patronaat", "Jazz", "2021-07-26 18:00:00", "2021-07-26 19:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Second Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Tom Thomsom Assemble Patronaat", "Jazz", "2021-07-26 19:30:00", "2021-07-26 20:30:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Second Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Jonna Frazer Patronaat", "Jazz", "2021-07-26 21:00:00", "2021-07-26 22:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Second Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Fox & The Mayors Patronaat", "Jazz", "2021-07-27 18:00:00", "2021-07-27 19:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Uncle Sue Patronaat", "Jazz", "2021-07-27 19:30:00", "2021-07-27 20:30:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Chris Allen Patronaat", "Jazz", "2021-07-27 21:00:00", "2021-07-27 22:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Myles Sanko Patronaat", "Jazz", "2021-07-27 18:00:00", "2021-07-27 19:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Second Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Ruis Soundsystem Patronaat", "Jazz", "2021-07-27 19:30:00", "2021-07-27 20:30:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Second Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("The Family XL Patronaat", "Jazz", "2021-07-27 21:00:00", "2021-07-27 22:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Second Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Gare Du Nord Patronaat", "Jazz", "2021-07-28 18:00:00", "2021-07-28 19:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Rilan & The Bombadiers Patronaat", "Jazz", "2021-07-28 19:30:00", "2021-07-28 20:30:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Soul Six Patronaat", "Jazz", "2021-07-28 21:00:00", "2021-07-28 22:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Main Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Han Bennink Patronaat", "Jazz", "2021-07-28 18:00:00", "2021-07-28 19:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Third Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("The Nordanians Patronaat", "Jazz", "2021-07-28 19:30:00", "2021-07-28 20:30:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Third Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Lilith Merlot Patronaat", "Jazz", "2021-07-28 21:00:00", "2021-07-28 22:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Patronaat" AND location_description ="Third Hall"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Ruis Soundsystem Grote Markt", "Jazz", "2021-07-29 15:00:00", "2021-07-29 16:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Grote Markt"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Wicked Jazz Sounds Grote Markt", "Jazz", "2021-07-29 16:00:00", "2021-07-29 17:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Grote Markt"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Evolve Grote Markt", "Jazz", "2021-07-29 17:00:00", "2021-07-29 18:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Grote Markt"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("The Nordanians Grote Markt", "Jazz", "2021-07-29 18:00:00", "2021-07-29 19:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Grote Markt"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Gumbo Kings Grote Markt", "Jazz", "2021-07-29 19:00:00", "2021-07-29 20:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Grote Markt"
));

INSERT INTO event(event_name, category, start_time, end_time, location_id)
VALUES ("Gare Du Nord Grote Markt", "Jazz", "2021-07-29 20:00:00", "2021-07-29 21:00:00", 
(
    SELECT location_id FROM location
    WHERE location_name = "Grote Markt"
));

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Gumbo Kings"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Gumbo Kings Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Gumbo Kings Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Evolve"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Evolve Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Evolve Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Ntjam Rosie"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Ntjam Rosie Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Ntjam Rosie Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Wicked Jazz Sounds"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Wicked Jazz Sounds Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Wicked Jazz Sounds Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Tom Thomsom Assemble"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Tom Thomsom Assemble Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Tom Thomsom Assemble Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Jonna Frazer"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Jonna Frazer Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Jonna Frazer Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Fox & The Mayors"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Fox & The Mayors Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Fox & The Mayors Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Uncle Sue"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Uncle Sue Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Uncle Sue Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Chris Allen"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Chris Allen Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Chris Allen Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Myles Sanko"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Myles Sanko Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Myles Sanko Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Ruis Soundsystem"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Ruis Soundsystem Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Ruis Soundsystem Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "The Family XL"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "The Family XL Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "The Family XL Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Gare du Nord"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Gare du Nord Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Gare du Nord Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Rilan & The Bombadiers"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Rilan & The Bombadiers Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Rilan & The Bombadiers Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Soul Six"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Soul Six Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    15.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Soul Six Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Han Bennink"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Han Bennink Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Han Bennink Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "The Nordanians"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "The Nordanians Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "The Nordanians Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Lilith Merlot"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Lilith Merlot Patronaat"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    10.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Lilith Merlot Patronaat";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Ruis Soundsystem"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Ruis Soundsystem Grote Markt"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    0.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Ruis Soundsystem Grote Markt";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Wicked Jazz Sounds"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Wicked Jazz Sounds Grote Markt"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    0.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Wicked Jazz Sounds Grote Markt";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Evolve"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Evolve Grote Markt"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    0.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Evolve Grote Markt";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "The Nordanians"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "The Nordanians Grote Markt"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    0.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "The Nordanians Grote Markt";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Gumbo Kings"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Gumbo Kings Grote Markt"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    0.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Gumbo Kings Grote Markt";

INSERT INTO jazz_event (artist_id, event_id)
VALUES(
    (
        SELECT artist_id from artist
        WHERE artist_name = "Gare du Nord"
    ),
    (
        SELECT event_id from event
        WHERE event_name = "Gare du Nord Grote Markt"
    )
);

INSERT INTO ticket (event_id, ticket_quantity, ticket_price)
SELECT event.event_id,
    location.capacity,
    0.00 AS ticket_price
FROM event
INNER JOIN location ON event.location_id = location.location_id
WHERE event.event_name = "Gare du Nord Grote Markt";