        $(function() {

            $("#jsGrid").jsGrid({
                height: "100%",
                width: "100%",
                filtering: false,
                editing: true,
                inserting: true,
                sorting: true,
                paging: true,
                autoload: true,
                pageSize: 15,
                pageButtonCount: 5,
                deleteConfirm: "Do you really want to delete the client?",
                controller: db,
                fields: [
                    { name: "Name", type: "text", width: 150 },
                    { name: "Age", type: "number", width: 50 },
                    { name: "Gender", type: "text", width: 50 },
                    { name: "Email", type: "text", width: 150 },
                    { name: "Phone Number", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                    { name: "Income", type: "number", width:50 },
                    { name: "Approved", type: "checkbox", title: "Approved", sorting: false },
                    { type: "control" }
                ]
            });

        });