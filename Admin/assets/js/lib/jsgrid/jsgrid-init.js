        $(function() {
            
            $.ajax({
                type: "GET",
                url: "/request/"
            }).done(function(request) {
        
                request.unshift({ id: "0", name: "" });

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
                deleteConfirm: "Do you really want to delete this request?",
                controller: {
                    loadData: function(filter) {
                        return $.ajax({
                            type: "GET",
                            url: "/clients/",
                            data: filter
                        });
                    },
                    insertItem: function(item) {
                        return $.ajax({
                            type: "POST",
                            url: "/clients/",
                            data: item
                        });
                    },
                    updateItem: function(item) {
                        return $.ajax({
                            type: "PUT",
                            url: "/clients/",
                            data: item
                        });
                    },
                    deleteItem: function(item) {
                        return $.ajax({
                            type: "DELETE",
                            url: "/clients/",
                            data: item
                        });
                    }
                },
                fields: [
                    { name: "ID", type: "text", width: 50 },
                    { name: "Recipient Name", type: "text", width: 150 },
                    { name: "Description", type: "text", width: 150 },
                    { name: "Status", type: "text", width: 50 },
                    { name: "Request Date", type: "text" },
                    { name: "Income", type: "number", width:50 },
                    { name: "Approved", type: "checkbox", title: "Approved", sorting: false },
                    { type: "control" }
                ]
            });

        });
    });