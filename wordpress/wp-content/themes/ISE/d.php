<style>



.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
    z-index: 1;
    padding-top:3px;
    width: 100%;
   
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/*
.dropdown {
    float: left;
    overflow: hidden;
    z-index: 999;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: darkcyan;
}
*/

.navbar a:hover, .dropdown:hover .dropbtn {
/*    background-color: #6b2b2f;*/
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 999;
    height: auto;
    text-align: left;
}

.dropdown-content .header {
    background: #6b2b5f;
    padding: 16px;
    color: black;
    height: 10px; 
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    
    height: auto;
}

.column a {
    float: none;
    color: black;
    padding: 5px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: black;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
        height: auto;
    }
}

</style>


        <div class="dropdown">
            <div class="dropbtn">SHOP CATEGORIES
    </div>
            <div class="dropdown-content">
                <div class="header">
                    
                </div>
                <div class="row">
                    <div class="column" style="display:none">
                            <summary style="display:none">
                                  Shop Categories </summary>
                            <p>
                                <a href="#"> Shop Categories </a>
                            </p>
                    </div>
                    
                    <div class="column">

                        <details>
                            <summary>
                                  Material Handing</summary>
                            <p>

                                <a href="#"> Casters</a>
                                <a href="#"> Chains, Connectors, Hooks, Ropes & Straps</a>
                                <a href="#"> Conveyors</a>
                                <a href="#"> Dock & Truck Equipment</a>
                                <a href="#"> Drum & Barrel</a>
                                <a href="#"> Forklifts & Attachments</a>
                                <a href="#"> Hand Trucks & Dollies</a>
                                <a href="#"> Hoists & Cranes</a>
                                <a href="#"> Ladders</a>
                                <a href="#"> Lift Trucks</a>
                                <a href="#"> Logging Equipment & Tools</a>
                                <a href="#"> Machinery Guards</a>
                                <a href="#"> Medical & Maintenance Carts</a>
                                <a href="#"> Pallet Trucks & Jacks</a>
                                <a href="#"> Platform Trucks</a>
                                <a href="#"> Scales</a>
                                <a href="#"> Scissor Lifts & Lift Tables</a>
                                <a href="#"> Tractor Attachments & Implements</a>
                                <a href="#"> Trucks & Carts</a>
                                <a href="#"> Wire Mesh Partitions & Fencing</a>

                            </p>


                        </details>

                    </div>
                    <div class="column">
                        <details>
                            <summary>Furniture & Office supplies </summary>
                            <a href="#">  Accessories & Furnishings</a>
                            <a href="#"> Audio Visual Carts</a>
                            <a href="#"> Audio Visual Equipment</a>
                            <a href="#"> Audio Visual Mounts</a>
                            <a href="#"> Auditorium Equipment</a>
                            <a href="#"> Bedroom Furniture</a>
                            <a href="#"> Benches & Picnic Tables</a>
                            <a href="#"> Binding Machines, Cutters & Laminators</a>
                            <a href="#"> Blue Print Equipment</a>
                            <a href="#"> Bookcases & Displays</a>
                            <a href="#"> Cabinets</a>
                            <a href="#"> Chair & Table Carts</a>
                            <a href="#"> Chairs</a>
                            <a href="#"> Church Furniture</a>
                            <a href="#"> Clocks & Time Clocks</a>
                            <a href="#"> Coat & Luggage Racks</a>
                            <a href="#"> Computer Furniture</a>
                            <a href="#"> Correctional Facility Furniture</a>
                            <a href="#"> Desks</a>
                            <a href="#"> Entertainment Furniture</a>
                            <a href="#"> File Cabinets</a>
                            <a href="#"> Healthcare Furniture</a>
                            <a href="#"> Lecterns</a>
                            <a href="#"> Lockers</a>
                            <a href="#"> Mailroom Furniture</a>
                            <a href="#"> Mats & Runners</a>
                            <a href="#"> Office Decor</a>
                            <a href="#"> Office Partitions & Room Dividers</a>
                            <a href="#"> Outdoor Furniture & Equipment</a>
                            <a href="#"> Reception Furniture</a>
                            <a href="#"> Salon & Spa Equipment</a>
                            <a href="#"> School Furniture</a>
                            <a href="#"> School Supplies</a>
                            <a href="#"> Stools</a>
                            <a href="#"> Tables</a>
                            <a href="#"> Whiteboards & Bulletin Boards</a>
                        </details>
                    </div>
                    <div class="column">
                        <details>
                            <summary>Packaging & supplies</summary>


                            <a href="#">Bags & Sealers</a>
                            <a href="#">  Bottles & Closures</a>
                            <a href="#">  Corrugated Boxes & Cartons</a>
                            <a href="#">  Food Service Bags & Packaging</a>
                            <a href="#">  Health Care Bags</a>
                            <a href="#">  Labels & Dispensers</a>
                            <a href="#">  Mailers & Tubes</a>
                            <a href="#">  Packaging Workstations</a>
                            <a href="#">  Pallets</a>
                            <a href="#">  Papers, Newsprint & Tissue</a>
                            <a href="#">  Protective Packaging</a>
                            <a href="#">  Scales</a>
                            <a href="#">  Shipping Envelopes</a>
                            <a href="#">  Shrink Wrap</a>
                            <a href="#">  Staplers</a>
                            <a href="#">  Strapping Equipment & Banding</a>
                            <a href="#">  Stretch Wrap</a>
                            <a href="#">  Tags</a>
                            <a href="#">  Tape & Dispensers </a>
                        </details>
                    </div>
                    <div class="column">
                        <details>
                            <summary>Safety & Security</summary>


                            <a href="#"> Audible & Visual Safety Signals </a>
                            <a href="#"> Batteries, Chargers & Accessories </a>
                            <a href="#"> Bikes, Racks, and Storage </a>
                            <a href="#"> Cold Weather Protection </a>
                            <a href="#"> Crowd Control </a>
                            <a href="#"> Emergency Lighting & Exit Signs </a>
                            <a href="#"> Ergonomic Protection </a>
                            <a href="#"> Eye Protection </a>
                            <a href="#"> Eyewash Stations & Showers </a>
                            <a href="#"> Fall Protection </a>
                            <a href="#"> Fire Protection </a>
                            <a href="#"> First Aid </a>
                            <a href="#"> Flammable-OSHA Cabinets </a>
                            <a href="#"> Foot Protection </a>
                            <a href="#"> Gloves & Hand Protection </a>
                            <a href="#"> Head/Face Protection </a>
                            <a href="#"> Hearing Protection </a>
                            <a href="#"> Heat Stress Protection </a>
                            <a href="#"> Locking & Lockout Devices </a>
                            <a href="#"> Machinery Guards </a>
                            <a href="#"> Protective Clothing </a>
                            <a href="#"> Respiratory Protection </a>
                            <a href="#"> Safety Cans & Gas Tanks </a>
                            <a href="#"> Safety Mats </a>
                            <a href="#"> Security & Access Control </a>
                            <a href="#"> Signs </a>
                            <a href="#"> Spill Control Supplies </a>
                            <a href="#"> Traffic & Parking Lot Safety </a>
                            <a href="#"> Two Way Radios & Intercoms </a>
                            <a href="#"> Warning Tapes </a>
                            <a href="#"> Water Safety</a>
                        </details>
                    </div>
                    <div class="column">
                        <details>
                            <summary>Storage & shelving</summary>


                            
     <a href="#"> Animal Housing & Livestock     </a>
                            <a href="#"> Awnings, Canopies & Shelters    </a>
                            <a href="#"> Bikes, Racks, and Storage    </a>
                            <a href="#"> Bins, Totes & Containers    </a>
                            <a href="#"> Bookcases & Displays    </a>
                            <a href="#"> Buildings & Storage Sheds    </a>
                            <a href="#"> Bulk Rack
     <a href="#"> Bus & Smokers Shelters    </a>
                            <a href="#"> Cabinets    </a>
                            <a href="#"> Cases    </a>
                            <a href="#"> File Cabinets    </a>
                            <a href="#"> Fittings & Railing    </a>
                            <a href="#"> Flammable-OSHA Cabinets    </a>
                            <a href="#"> Garage Furniture    </a>
                            <a href="#"> Greenhouses    </a>
                            <a href="#"> Lockers    </a>
                            <a href="#"> Mailboxes    </a>
                            <a href="#"> Medical Cabinets & Utensils    </a>
                            <a href="#"> Mezzanines, Platforms & Stairs.    </a>
                            <a href="#"> Modular Inplant Offices    </a>
                            <a href="#"> Office Partitions & Room Dividers    </a>
                            <a href="#"> Pallet Rack    </a>
                            <a href="#"> Pallets    </a>
                            <a href="#"> Retail Display Fixtures    </a>
                            <a href="#"> Safes & Security    </a>
                            <a href="#"> Safety Gates    </a>
                            <a href="#"> Shelving    </a>
                            <a href="#"> Strut Channels & Framing    </a>
                            <a href="#"> Tarps & Covers    </a>
                            <a href="#"> Trays    </a>
                            <a href="#"> Wire Mesh Partitions & Fencing    </a>
                            <a href="#"> Wire Shelving      </a></a>
</details>
</div>
<div class="column">
    <details>
        <summary>Tool & Instrument</summary>


        <a href="#">   Abrasives - Grinding & Cutting   </a>
        <a href="#">   Adhesives, Applicators, Heat, & Glue Guns   </a>
        <a href="#">   Air Tools & Accessories   </a>
        <a href="#">   Batteries, Chargers & Accessories   </a>
        <a href="#">   Clamps   </a>
        <a href="#">   Concrete, Masonry & Drywall   </a>
        <a href="#">   Drills, Drivers, & Bits   </a>
        <a href="#">   Flashlights & Portable Work Lights   </a>
        <a href="#">   Grinders & Cutoff   </a>
        <a href="#">   Hammers, Chisels, & Striking Tools   </a>
        <a href="#">   Hex Keys & Drivers   </a>
        <a href="#">   Hose & Cord Reels   </a>
        <a href="#">   Knives, Blades, Scrapers & Multi-Tools   </a>
        <a href="#">   Ladders   </a>
        <a href="#">   Locking & Lockout Devices   </a>
        <a href="#">   Lubricants & Rust Prevention   </a>
        <a href="#">   Metalworking Machines - Machinery   </a>
        <a href="#">   Outdoor Tools & Supplies   </a>
        <a href="#">   Pipe & Tubing   </a>
        <a href="#">   Pliers   </a>
        <a href="#">   Pressure Gauges   </a>
        <a href="#">   Pressure Washers   </a>
        <a href="#">   Ratchets, Sockets & Wrenches </a>
  <a href="#">   Riveters, Staplers, Nailers, & Tackers   </a>
        <a href="#">   Sanders, Routers, & Finishing   </a>
        <a href="#">   Saws & Blades   </a>
        <a href="#">   Screwdrivers   </a>
        <a href="#">   Snow & Ice Removal, Spreaders   </a>
        <a href="#">   Taps, Punches & Dies   </a>
        <a href="#">   Test, Measurement & Inspection   </a>
        <a href="#">   Tool Boxes, Storage & Organization   </a>
        <a href="#">   Vises   </a>
        <a href="#">   Welding   </a>
        <a href="#">   Woodworking   </a>

    </details>
</div>

<div class="column">
    <details>
        <summary> Raw material & Building supplies
        </summary>


        <a href="#">  Access Doors & Panels </a>
         <a href="#"> Cabinet Hardware & Accessories </a>
         <a href="#"> Ceiling Tiles </a>
         <a href="#"> Concrete, Masonry & Blacktop </a>
         <a href="#"> Doors, Hardware & Framing </a>
         <a href="#"> Fencing </a>
         <a href="#"> Flooring & Carpeting </a>
         <a href="#"> Handrails & Wall Protection </a>
         <a href="#"> Insulation & Vapor Barriers </a>
         <a href="#"> Lubricants & Rust Prevention </a>
         <a href="#"> Masking Film </a>
         <a href="#"> Moulding & Millwork </a>
         <a href="#"> Paint & Accessories </a>
         <a href="#"> Pipe & Tubing </a>
         <a href="#"> Pipe Freeze/Roof & Gutter De-icing </a>
         <a href="#"> Raw Materials </a>
         <a href="#"> Roofing Materials </a>
         <a href="#"> Skylights & Windows </a>
         <a href="#"> Strut Channels & Framing </a>
         <a href="#"> Tarps & Covers </a>
         <a href="#"> Utility Tapes </a>
        
        
    </details>
</div>

<div class="column">
    <details>
        <summary> Janitorial & mantainence</summary>


        <a href="#"> Air Purifiers  </a>
        <a href="#"> Awnings, Canopies & Shelters  </a>
        <a href="#"> Bags-Hamper, Laundry & Mesh  </a>
        <a href="#"> Bathroom Partitions </a>
        <a href="#"> Bathroom Supplies  </a>
        <a href="#"> Cleaning Supplies  </a>
        <a href="#"> Dry Cleaning & Laundry Supplies  </a>
        <a href="#"> Floor Care Machines & Vacuums  </a>
        <a href="#"> Floor Cleaning Replacement Parts  </a>
        <a href="#"> Garbage Can & Recycling  </a>
        <a href="#"> Hand Dryers & Towel Dispensers  </a>
        <a href="#"> Janitorial & Cleaning Carts  </a>
        <a href="#"> Ladders  </a>
        <a href="#"> Leak Diverter  </a>
        <a href="#"> Lubricants & Rust Prevention  </a>
        <a href="#"> Maintenance Furniture  </a>
        <a href="#"> Maintenance Lifts  </a>
        <a href="#"> Masking Film  </a>
        <a href="#"> Mats & Runners  </a>
        <a href="#"> Medical & Maintenance Carts  </a>
        <a href="#"> Mopping  </a>
        <a href="#"> Outdoor Ashtrays  </a>
        <a href="#"> Outdoor Tools & Supplies  </a>
        <a href="#"> Paint & Accessories  </a>
        <a href="#"> Paper Supplies  </a>
        <a href="#"> Parking Lot Supplies  </a>
        <a href="#"> Pest Control  </a>
        <a href="#"> Pipe Freeze/Roof & Gutter De-icing  </a>
        <a href="#"> Pressure Washers  </a>
        <a href="#"> Sinks & Washfountains  </a>
        <a href="#"> Snow & Ice Removal, Spreaders  </a>
        <a href="#"> Sweeping  </a>
        <a href="#"> Tarps & Covers  </a>
        <a href="#"> Trash Bags  </a>
        <a href="#"> Uniforms & Workwear  </a>
        <a href="#"> Utility Tapes  </a>
        <a href="#"> Welding  </a>
    </details>
</div>
</div>
</div>
</div>


