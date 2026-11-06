import pandas as pd

def generate_seeder(excel_file_path, sheet_name, table_name):
    df = pd.read_excel(excel_file_path, sheet_name=sheet_name)

    # Generate a seeder for each column
    for index, row in df.iterrows():
        print("[")
        for column in df.columns:
            value = row[column]
            if pd.isna(value):
                value = "null"
            elif isinstance(value, str):
                # Strip quote characters from the description attribute
                if column.upper() == 'OPIS':
                    value = value.replace("'", "")
                value = f"'{value}'"
            print(f"    '{column.upper()}' => {value},")
        print("],")

# Example usage
excel_file_path = r"C:/Users/poczt/Desktop/specyfikacje.xlsx"
sheet_name = "Arkusz1"
table_name = "ZDJECIA_PRODUKTOW"
generate_seeder(excel_file_path, sheet_name, table_name)
