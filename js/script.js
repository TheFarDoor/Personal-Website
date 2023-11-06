function preventDefault(id1, id2) {
    var content1 = document.getElementById(id1).value;
    var content2 = document.getElementById(id2).value;
    var styleSheet = document.createElement("style");

    if(content1.length < 1) {
        var styles = `
            #` + id1 + ` {
                border: 1px solid red;
            }
        `;
        styleSheet.innerText = styles;
        document.head.appendChild(styleSheet);

        if(content2.length < 1 || content2 == "Enter what you want to post to the blog.") {
            var styles = `
                #` + id1 + ` {
                    border: 1px solid red;
                }

                #` + id2 + ` {
                    border: 1px solid red;
                }

            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);

            alert("Fill in the details marked by an asterisk: *");
            return false;
        }
        else {
            var styles = `
                #` + id1 + ` {
                    border: 1px solid red;
                }

                #` + id2 + ` {
                    border: 1px solid lightgrey;
                }
            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);
            alert("Fill in the details marked by an asterisk: *");
            return false;
        }
    }
    else if(content2.length < 1 || content2 == "Enter what you want to post to the blog.") {
        var styles = `
            #` + id2 + ` {
                border: 1px solid red;
            }
        `;
        styleSheet.innerText = styles;
        document.head.appendChild(styleSheet);

        if(content1.length < 1) {
            var styles = `
                #` + id1 + ` {
                    border: 1px solid red;
                }

                #` + id2 + ` {
                    border: 1px solid red;
                }
            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);
            alert("Fill in the details marked by an asterisk: *");
            return false;
        }
        else {
            var styles = `
                #` + id2 + ` {
                    border: 1px solid red;
                }

                #` + id1 + ` {
                    border: 1px solid lightgrey;
                }
            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);
            alert("Fill in the details marked by an asterisk: *");
            return false;
        }
    }
    else if (!(content1.length < 1)){
        
        var styles = `
            #` + id1 + ` {
                border: 1px solid lightgrey;
            }
        
        `;
        styleSheet.innerText = styles;
        document.head.appendChild(styleSheet);

        if(content2.length < 1 || content2 == "Enter what you want to post to the blog.") {
            var styles = `
                #` + id1 + ` {
                    border: 1px solid red;
                }


                #` + id2 + ` {
                    border: 1px solid red;
                }

            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);
            alert("Fill in the details marked by an asterisk: *");
            return false;
        }
        else {
            var styles = `
                #` + id1 + ` {
                    border: 1px solid lightgrey;
                }


                #` + id2 + ` {
                    border: 1px solid lightgrey;
                }
            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);
            return true;
        }
    }

    else {
        var styles = `
            #` + id2 + ` {
                border: 1px solid lightgrey;
            }

        `;
        styleSheet.innerText = styles;
        document.head.appendChild(styleSheet);

        if(content1.length < 1) {
            var styles = `
                #` + id1 + ` {
                    border: 1px solid red;
                }

                #` + id2 + ` {
                    border: 1px solid red;
                }

            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);
            alert("Fill in the details marked by an asterisk: *");
            return false;
        }
        else {
            var styles = `
                #` + id2 + ` {
                    border: 1px solid lightgrey;
                }

                #` + id1 + ` {
                    border: 1px solid lightgrey;
                }

            `;
            styleSheet.innerText = styles;
            document.head.appendChild(styleSheet);
            return true;
        }
    }
}

function clearConfirm(id1, id2) {
    if(confirm("Are you sure you want to clear?")) {
        document.getElementById(id1).value = "";
        document.getElementById(id2).value = "Enter what you want to post to the blog.";
    }
}

function testPopUp() {
    window.alert('hello');
}